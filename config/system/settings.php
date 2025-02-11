<?php
return [
    'BE' => [
        'debug' => '1',
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$Wm5pd2pZRkduYk4wREFndg$d3yqGLB+3aX1yKgmRIFAhro4dronq+6nE/vUx0ZpP14',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'driver' => 'mysqli',
            ],
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'de',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => 'EXT:cjnrw/Resources/Public/Images/logo-chorjugend-nrw-quer_transparent.png',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '#0f69b1',
            'loginLogo' => 'EXT:cjnrw/Resources/Public/Images/logo-chorjugend-nrw-quer_transparent.png',
            'loginLogoAlt' => 'Chorjugend NRW',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'form_to_database' => [
            'csvDelimiter' => ',',
            'csvOnlyFilenameOfUploadFields' => '0',
            'hideLocationInList' => '0',
        ],
        'lux' => [
            'anonymizeIp' => '1',
            'categoryScoringAddDownload' => '20',
            'categoryScoringAddNewsVisit' => '10',
            'categoryScoringAddPageVisit' => '10',
            'categoryScoringLinkListenerClick' => '20',
            'checkFunction' => 'User',
            'disableAnalysisModule' => '0',
            'disableCkEditorConfiguration' => '0',
            'disableIpLogging' => '0',
            'disableLeadModule' => '0',
            'disablePageOverview' => '0',
            'disableWorkflowModule' => '0',
            'leadImageFromExternalSources' => 'all',
            'pageOverviewView' => 'analysis',
            'scoringCalculation' => '(10 * numberOfSiteVisits) + (1 * numberOfPageVisits) + (20 * downloads) - (1 * lastVisitDaysAgo)',
            'showRenderTimes' => '0',
            'useCacheLayer' => '1',
        ],
        'news' => [
            'advancedMediaPreview' => '1',
            'archiveDate' => 'date',
            'categoryBeGroupTceFormsRestriction' => '0',
            'categoryRestriction' => '',
            'contentElementPreview' => '1',
            'contentElementRelation' => '1',
            'dateTimeNotRequired' => '0',
            'hidePageTreeForAdministrationModule' => '0',
            'manualSorting' => '0',
            'mediaPreview' => 'false',
            'prependAtCopy' => '1',
            'resourceFolderImporter' => '/news_import',
            'rteForTeaser' => '0',
            'showAdministrationModule' => '1',
            'showImporter' => '0',
            'slugBehaviour' => 'unique',
            'storageUidImporter' => '1',
            'tagPid' => '1',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
            'showSampleTasks' => '1',
        ],
        'webp' => [
            'convert_all' => '1',
            'converter' => 'Plan2net\\Webp\\Converter\\MagickConverter',
            'exclude_directories' => '',
            'filter_pattern' => '/\\.(jpe?g|png|gif)\\.webp$/i',
            'hide_webp' => '1',
            'mime_types' => 'image/jpeg,image/png,image/gif',
            'parameters' => 'image/jpeg::-quality 85 -define webp:lossless=false|image/png::-quality 75 -define webp:lossless=true|image/gif::-quality 85 -define webp:lossless=true',
            'silent' => '0',
            'use_system_settings' => '1',
        ],
    ],
    'FE' => [
        'debug' => '1',
        'disableNoCacheParameter' => true,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'gif_compress' => false,
        'processor' => 'GraphicsMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_allowUpscaling' => false,
        'processor_colorspace' => 'RGB',
        'processor_effects' => false,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/local/bin/mailhog sendmail test@example.org --smtp-addr 127.0.0.1:1025',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'imagesizes' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
            ],
        ],
        'devIPmask' => '*',
        'displayErrors' => '1',
        'encryptionKey' => '91afc57e4d8f51bcee147724d7d7c5798c6fe84ee65ad877b1fb06c0d09d4f30c5b657a91fed6ed6445c91f5bc6ce318',
        'exceptionalErrors' => 12290,
        'features' => [
            'security.usePasswordPolicyForFrontendUsers' => true,
            'yamlImportsFollowDeclarationOrder' => true,
        ],
        'sitename' => 'Chorjugend NRW',
        'systemMaintainers' => [
            1,
            2,
        ],
    ],
];
