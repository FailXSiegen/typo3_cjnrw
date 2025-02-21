<?php

$EM_CONF['chorstiftung'] = [
    'title' => 'Chorstiftung NRW Templates',
    'description' => 'basic template extension and configs for Chorstiftung NRW',
    'category' => 'backend',
    'version' => '1.0.0',
    'state' => 'stable',
    'author' => 'Felix Herrmann',
    'author_email' => 'info@failx.de',
    'author_company' => 'Chorstiftung NRW',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.4.99',
            'news' => '10.0.0-11.9.99'

        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'Failx\\Chorstiftung\\' => 'Classes',
        ],
    ],
];
