<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}

// Aktuelle Domain ermitteln
$currentDomain = \TYPO3\CMS\Core\Utility\GeneralUtility::getIndpEnv('HTTP_HOST');

// Standardwerte setzen
$domainSpecificConfig = [
    'backendFavicon' => '',
    'backendLogo' => 'EXT:cjnrw/Resources/Public/Images/logo-chorjugend-nrw-quer_transparent.png',
    'loginBackgroundImage' => '',
    'loginFootnote' => '',
    'loginHighlightColor' => '#0f69b1',
    'loginLogo' => 'EXT:cjnrw/Resources/Public/Images/logo-chorjugend-nrw-quer_transparent.png',
    'loginLogoAlt' => 'Chorjugend NRW',
];
$sitename = $_ENV['SITENAME'];
// Domain-spezifische Anpassungen
switch ($currentDomain) {
    case 'chorstiftung.ddev.site':
    case 'dev.chorstiftung.nrw':
    case 'chorstiftung.nrw':
        $domainSpecificConfig['backendLogo'] = 'EXT:chorstiftung/Resources/Public/Images/Chorstiftung_NRW.svg';
        $domainSpecificConfig['loginLogo'] = 'EXT:chorstiftung/Resources/Public/Images/Chorstiftung_NRW.svg';
        $domainSpecificConfig['loginLogoAlt'] = 'Chorstiftung NRW';
        $domainSpecificConfig['loginHighlightColor'] = '#009136';
        $sitename = 'Chorstiftung NRW';
        break;
}

// Allgemeine Konfiguration aus Umgebungsvariablen
$customChanges = [
    'DB' => [
        'Connections' => [
            'Default' => [
                'dbname' => $_ENV['TYPO3_DB_NAME'],
                'host' => $_ENV['TYPO3_DB_HOST'],
                'password' => $_ENV['TYPO3_DB_PASSWORD'],
                'user' => $_ENV['TYPO3_DB_USER'],
            ],
        ],
    ],
    'FE' => [
        'debug' => $_ENV['FE_DEBUG'],
    ],
    'GFX' => [
        'processor' => $_ENV['GFX'],
        'processor_colorspace' => $_ENV['GFX_COLORSPACE'],
        'processor_stripColorProfileCommand' => '+profile \'*\'',
    ],
    'MAIL' => [
        'transport' => $_ENV['MAIL_TRANSPORT'],
        'transport_sendmail_command' => $_ENV['MAIL_SENDMAIL'],
        'transport_smtp_encrypt' => $_ENV['MAIL_ENCRYPT'],
        'transport_smtp_password' => $_ENV['MAIL_PASSWORD'],
        'transport_smtp_server' => $_ENV['MAIL_SERVER'],
        'transport_smtp_username' => $_ENV['MAIL_USERNAME'],
        'defaultMailFromAddress' => $_ENV['MAIL_FROM'],
        'defaultMailFromName' => $_ENV['MAIL_FROMNAME'],
        'defaultMailReplyToAddress' => $_ENV['MAIL_REPLY'],
        'defaultMailReplyToName' => $_ENV['MAIL_REPLYNAME'],
    ],
    'SYS' => [
        'sitename' => $sitename,
        'systemMaintainers' => [2],
        'trustedHostsPattern' => $_ENV['TRUSTED_HOSTS_PATTERN'],
        'displayErrors' => $_ENV['DISPLAY_ERRORS'],
        'enableDeprecationLog' => $_ENV['ENABLE_DEPRECATION_LOG'],
        'exceptionalErrors' => $_ENV['EXCEPTIONAL_ERRORS'],
        'sqlDebug' => $_ENV['SQL_DEBUG'],
        'systemLogLevel' => $_ENV['SYSTEM_LOG_LEVEL'],
        'devIPmask' => $_ENV['DEV_IP_MASK'],
    ],
    'EXTENSIONS' => [
        'backend' => $domainSpecificConfig, // Domain-spezifische Backend-Anpassungen einbinden
    ],
];

// Anwenden der Anpassungen auf die globale TYPO3 Konfiguration
$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive($GLOBALS['TYPO3_CONF_VARS'], $customChanges);
