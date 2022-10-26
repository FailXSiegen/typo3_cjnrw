<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

call_user_func(
    function ($extKey, $table) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns($table, [
            'image_style' => [
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        0 => [
                            0 => 'Ohne Modifikation',
                            1 => 'no-mod',
                        ],
                        1 => [
                            0 => 'Graustufen',
                            1 => 'grayscale',
                        ]
                    ],
                    'maxitems' => '1',
                ],
                'exclude' => '1',
                'label' => 'Bild-Stil'
            ],
        ]);

        $GLOBALS['TCA']['sys_file_reference']['palettes']['imageoverlayPalette']['showitem'] = '
            title,alternative,
            --linebreak--,
            image_style,
            --linebreak--,
            description, link,
            --linebreak--,
            crop
            ';
    },
    'cjnrw',
    'sys_file_reference'
);
