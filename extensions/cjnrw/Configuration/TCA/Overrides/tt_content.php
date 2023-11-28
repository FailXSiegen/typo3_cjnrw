<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}
call_user_func(
    function ($extkey) {
        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
            (
                new \B13\Container\Tca\ContainerConfiguration(
                    'accordion',
                    'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:accordion.title',
                    'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:accordion.description',
                    [
                        [
                            ['name' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:accordion', 'colPos' => 101]
                        ]
                    ]
                )
            )
            ->setIcon('EXT:cjnrw/Resources/Public/Icons/accordion.gif')
        );

        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
            (
                new \B13\Container\Tca\ContainerConfiguration(
                    'tinyslider',
                    'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:tinyslider.title',
                    'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:tinyslider.description',
                    [
                        [
                            ['name' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:tinyslider', 'colPos' => 101]
                        ]
                    ]
                )
            )
            ->setIcon('EXT:cjnrw/Resources/Public/Icons/tinyslider.gif')
        );

        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
            (
                new \B13\Container\Tca\ContainerConfiguration(
                    'slider',
                    'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:slider.title',
                    'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:slider.description',
                    [
                        [
                            ['name' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:slider', 'colPos' => 101]
                        ]
                    ]
                )
            )
            ->setIcon('EXT:cjnrw/Resources/Public/Icons/slider.gif')
        );

        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
            (
                new \B13\Container\Tca\ContainerConfiguration(
                    'scrollcontainer',
                    'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:scroll.container.title',
                    'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:scroll.container.description',
                    [
                        [
                            [
                                'name' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:scrollcontainer',
                                'colPos' => 101
                            ]
                        ]
                    ]
                )
            )
            ->setIcon('EXT:cjnrw/Resources/Public/Icons/scrollcontainer.gif')
        );

        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
            (
                new \B13\Container\Tca\ContainerConfiguration(
                    'headerrotate',
                    'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:headerrotate',
                    'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:headerrotate.description',
                    [
                        [
                            [
                                'name' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:scrollcontainer',
                                'colPos' => 102
                            ]
                        ]
                    ]
                )
            )
            ->setIcon('content-text')
        );

        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
            (
                new \B13\Container\Tca\ContainerConfiguration(
                    'bgcontainer',
                    'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:bgimage',
                    'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:bgimage.description',
                    [
                        [
                            ['name' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:scrollcontainer', 'colPos' => 103]
                        ]
                    ]
                )
            )
            ->setIcon('content-image')
        );
        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
            (
                new \B13\Container\Tca\ContainerConfiguration(
                    '1col',
                    'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:1col.title',
                    'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:1col.description',
                    [
                        [
                            ['name' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:grid.label.col1', 'colPos' => 101]
                        ]
                    ]
                )
            )
            ->setIcon('EXT:cjnrw/Resources/Public/Icons/col1.gif')
        );

        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
            (
                new \B13\Container\Tca\ContainerConfiguration(
                    '2cols',
                    'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:2cols.title',
                    'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:2cols.description',
                    [
                        [
                            ['name' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:grid.label.col1', 'colPos' => 201],
                            ['name' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:grid.label.col2', 'colPos' => 202]
                        ]
                    ]
                )
            )
            ->setIcon('EXT:cjnrw/Resources/Public/Icons/col2.gif')
        );

        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
            (
                new \B13\Container\Tca\ContainerConfiguration(
                    '3cols',
                    'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:3cols.title',
                    'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:3cols.description',
                    [
                        [
                            ['name' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:grid.label.col1', 'colPos' => 301],
                            ['name' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:grid.label.col2', 'colPos' => 302],
                            ['name' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:grid.label.col3', 'colPos' => 303]
                        ]
                    ]
                )
            )
            ->setIcon('EXT:cjnrw/Resources/Public/Icons/col3.gif')
        );

        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
            (
                new \B13\Container\Tca\ContainerConfiguration(
                    '4cols',
                    'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:4cols.title',
                    'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:4cols.description',
                    [
                        [
                            ['name' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:grid.label.col1', 'colPos' => 401],
                            ['name' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:grid.label.col2', 'colPos' => 402],
                            ['name' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:grid.label.col3', 'colPos' => 403],
                            ['name' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:grid.label.col4', 'colPos' => 404]
                        ]
                    ]
                )
            )
            ->setIcon('EXT:cjnrw/Resources/Public/Icons/col4.gif')
        );

        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
            (
                new \B13\Container\Tca\ContainerConfiguration(
                    'advent',
                    'Adventskalender',
                    '',
                    [
                        [
                            ['name' => 'Tag 1', 'colPos' => 501],
                            ['name' => 'Tag 2', 'colPos' => 502],
                            ['name' => 'Tag 3', 'colPos' => 503],
                            ['name' => 'Tag 4', 'colPos' => 504],
                            ['name' => 'Tag 5', 'colPos' => 505],
                            ['name' => 'Tag 6', 'colPos' => 506]
                        ],
                        [
                            ['name' => 'Tag 7', 'colPos' => 507],
                            ['name' => 'Tag 8', 'colPos' => 508],
                            ['name' => 'Tag 9', 'colPos' => 509],
                            ['name' => 'Tag 10', 'colPos' => 510],
                            ['name' => 'Tag 11', 'colPos' => 511],
                            ['name' => 'Tag 12', 'colPos' => 512]
                        ],
                        [
                            ['name' => 'Tag 13', 'colPos' => 513],
                            ['name' => 'Tag 14', 'colPos' => 514],
                            ['name' => 'Tag 15', 'colPos' => 515],
                            ['name' => 'Tag 16', 'colPos' => 516],
                            ['name' => 'Tag 17', 'colPos' => 517],
                            ['name' => 'Tag 18', 'colPos' => 518]
                        ],
                        [
                            ['name' => 'Tag 19', 'colPos' => 519],
                            ['name' => 'Tag 20', 'colPos' => 520],
                            ['name' => 'Tag 21', 'colPos' => 521],
                            ['name' => 'Tag 22', 'colPos' => 522],
                            ['name' => 'Tag 23', 'colPos' => 523],
                            ['name' => 'Tag 24', 'colPos' => 524]
                        ]
                    ]
                )
            )
        );
        $GLOBALS['TCA']['tt_content']['types']['slider']['showitem'] =  '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;;general,
        header,--palette--;;carousel,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;;frames,
        --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
        --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,';

        $GLOBALS['TCA']['tt_content']['types']['tinyslider']['showitem'] =  '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;;general,
        header,--palette--;;tinycarousel,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;;frames,
        --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
        --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,';

        $GLOBALS['TCA']['tt_content']['types']['headerrotate']['showitem'] =  '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;;general,
        header,header_color,subheader,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;;frames,
        --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
        --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,';

        $GLOBALS['TCA']['tt_content']['types']['bgcontainer']['showitem'] =  '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;;general,
        header; Internal title (not displayed),image,bgimage_class,bgimage_position,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;;frames,
        --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
        --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,';

        $GLOBALS['TCA']['tt_content']['types']['1col']['showitem'] = '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;;general,
        header,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;;frames,
        --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
        --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,';

        $GLOBALS['TCA']['tt_content']['types']['2cols']['showitem'] = '
        CType,header,tx_container_parent,colPos,--palette--;;col1,--palette--;;col2,
        --div--;LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:row,row_space_class,row_item_class,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;;frames,
        --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
        --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,';

        $GLOBALS['TCA']['tt_content']['types']['3cols']['showitem'] = '
        CType,header,tx_container_parent,colPos,--palette--;;col1,--palette--;;col2,--palette--;;col3,
        --div--;LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:row,row_space_class,row_item_class,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;;frames,
        --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
        --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,';

        $GLOBALS['TCA']['tt_content']['types']['4cols']['showitem'] = '
        CType,header,tx_container_parent,colPos,--palette--;;col1,--palette--;;col2,--palette--;;col3,--palette--;;col4,
        --div--;LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:row,row_space_class,row_item_class,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;;frames,
        --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
        --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,';

        $GLOBALS['TCA']['tt_content']['types']['advent']['showitem'] = '
        CType,header,tx_container_parent,colPos,--palette--;;advent,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;;frames,
        --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
        --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,';

        $GLOBALS['TCA']['tt_content']['palettes']['col1'] = [
            'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:grid.label.col1',
            'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:grid.sheet.description',
            'showitem' => 'col_1_class,col_1_sm_class,col_1_md_class,col_1_lg_class,col_1_xl_class,col_1_xxl_class,--linebreak--,col_1_custom_class'
        ];
        $GLOBALS['TCA']['tt_content']['palettes']['col2'] = [
            'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:grid.label.col2',
            'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:grid.sheet.description',
            'showitem' => 'col_2_class,col_2_sm_class,col_2_md_class,col_2_lg_class,col_2_xl_class,col_2_xxl_class,--linebreak--,col_2_custom_class'
        ];
        $GLOBALS['TCA']['tt_content']['palettes']['col3'] = [
            'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:grid.label.col3',
            'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:grid.sheet.description',
            'showitem' => 'col_3_class,col_3_sm_class,col_3_md_class,col_3_lg_class,col_3_xl_class,col_3_xxl_class,--linebreak--,col_3_custom_class'
        ];
        $GLOBALS['TCA']['tt_content']['palettes']['col4'] = [
            'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:grid.label.col4',
            'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:grid.sheet.description',
            'showitem' => 'col_4_class,col_4_sm_class,col_4_md_class,col_4_lg_class,col_4_xl_class,col_4_xxl_class,--linebreak--,col_4_custom_class'
        ];
        $GLOBALS['TCA']['tt_content']['palettes']['carousel'] = [
            'label' => 'Slider',
            'description' => 'Slider Properties',
            'showitem' => 'carousel_controls, carousel_indicators, carousel_captions,  carousel_crossfade, --linebreak--, carousel_intervall'
        ];
        $GLOBALS['TCA']['tt_content']['palettes']['tinycarousel'] = [
            'label' => 'Slider',
            'description' => 'Slider Properties',
            'showitem' => 'carousel_controls, carousel_indicators,  carousel_crossfade, --linebreak--, carousel_intervall,--linebreak--,special_carousel,--linebreak--,tinyslider_config'
        ];
        $GLOBALS['TCA']['tt_content']['palettes']['advent'] = [
            'label' => 'Advent',
            'description' => 'Advent',
            'showitem' => '
            -div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images, image,
            --palette--;;mediaAdjustments,
            --linebreak--, bodytext;Koordinaten,
            --linebreak--, subheader;Gilt für Monat'
        ];
        $columns = [
            'header' => [
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header',
                'config' => [
                    'type' => 'text',
                    'cols' => 40,
                    'rows' => 3,
                    'required' => true,
                ],
            ],
            'header_color' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:header.color',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:header.color.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'items' => [
                        ['---',''],
                        ['LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:color.white','cl-white','EXT:cjnrw/Resources/Public/Icons/color-white.png'],
                        ['LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:color.grey','cl-grey','EXT:cjnrw/Resources/Public/Icons/color-grey.png']
                    ],
                    'fieldWizard' => [
                        'selectIcons' => [
                            'disabled' => false,
                        ],
                    ],
                ],
            ],
            'header_distance_bottom' => [
                'label' => 'Header - Space After',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'items' => [
                        ['Default',''],
                        ['0','mb-0'],
                        ['1','mb-1'],
                        ['2','mb-2'],
                        ['3','mb-3'],
                        ['4','mb-4'],
                        ['5','mb-5'],
                        ['Auto','mb-auto'],
                    ],
                ],
            ],
            'menu_layout' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:menu.layout',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'items' => [
                        ['Default','1'],
                        ['2 Cols','2'],
                        ['3 Cols','3'],
                    ],
                ],
            ],
            'with_splash' => [
                'label' => 'Farbklekse aktiv',
                'exclude' => 0,
                'config' => [
                    'type' => 'check',
                    'renderType' => 'checkboxToggle',
                    'items' => [
                        [
                            0 => '',
                            1 => '',
                        ]
                    ],
                    'default' => 1
                ],
            ],
            'parallax' => [
                'label' => 'Bild mit Parallax',
                'exclude' => 0,
                'config' => [
                    'type' => 'check',
                    'renderType' => 'checkboxToggle',
                    'items' => [
                        [
                            0 => '',
                            1 => '',
                        ]
                    ],
                ],
            ],
            'parallaxoption' => [
                'label' => 'Parallax-Optionen',
                'description' => 'Positive Zahl für Bewegung von unten nach oben; Negative Zahl für Bewegung von oben nach unten; Default: -0.15',
                'exclude' => 0,
                'config' => [
                    'type' => 'input',
                    'eval' => 'trim',
                    'default' => '-0.15',
                ],
            ],
            'animatecss' => [
                'label' => 'Zusätzliche Animationsklassen',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        ['Keine', ''],
                        ['FadeIn', 'fadeIn'],
                        ['FadeInDown', 'fadeInDown'],
                        ['FadeInLeft', 'fadeInLeft'],
                        ['FadeInRight', 'fadeInRight'],
                        ['FadeInUp', 'fadeInUp'],
                        ['SlideIn', 'slideIn'],
                        ['SlideInDown', 'slideInDown'],
                        ['SlideInLeft', 'slideInLeft'],
                        ['SlideInRight', 'slideInRight'],
                        ['SlideInUp', 'slideInUp'],
                    ],
                ],
            ],
            'counter_start' => [
                'label' => 'Counter start',
                'description'=> 'If start is bigger than end it counts backwards',
                'config' => [
                    'type' => 'input',
                    'default' => '0'
                ],
            ],
            'counter_end' => [
                'label' => 'Counter end',
                'config' => [
                    'type' => 'input',
                    'default' => '9001'
                ],
            ],
            'counter_duration' => [
                'label' => 'Counter duration',
                'config' => [
                    'type' => 'input',
                    'default' => '2'
                ],
            ],
            'counter_delay' => [
                'label' => 'Counter delay',
                'config' => [
                    'type' => 'input',
                    'default' => '10'
                ],
            ],
            'counter_once' => [
                'label' => 'Counter once',
                'config' => [
                    'type' => 'check',
                    'renderType' => 'checkboxToggle',
                    'default' => 1
                ],
            ],
            'counter_decimals' => [
                'label' => 'Counter decimals',
                'config' => [
                    'type' => 'input',
                    'default' => '0'
                ],
            ],
            'counter_decimalseparatorsymbol' => [
                'label' => 'Counter decimal separator symbl',
                'config' => [
                    'type' => 'input',
                    'default' => ','
                ],
            ],
            'counter_currency' => [
                'label' => 'Counter currency',
                'config' => [
                    'type' => 'check',
                    'renderType' => 'checkboxToggle',
                    'default' => 0
                ],
            ],
            'counter_currencyposition' => [
                'label' => 'Counter currency position',
                'config' => [
                    'type' => 'radio',
                    'items' => [
                        ['left', 'left'],
                        ['right', 'right'],
                    ],
                    'default' => 'left'
                ],
            ],
            'counter_currencysymbol' => [
                'label' => 'Counter currency symbol',
                'config' => [
                    'type' => 'input',
                    'default' => '€'
                ],
            ],
            'counter_separator' => [
                'label' => 'Counter separator',
                'config' => [
                    'type' => 'check',
                    'renderType' => 'checkboxToggle',
                    'default' => 1
                ],
            ],
            'counter_separatorsymbol' => [
                'label' => 'Counter separator symbol',
                'config' => [
                    'type' => 'input',
                    'default' => ','
                ],
            ],
            'carousel_controls' => [
                'label' => 'Slider Controls',
                'description' => 'Adds arrows left and right',
                'config' => [
                    'type' => 'check',
                    'renderType' => 'checkboxToggle',
                    'default' => 0
                ],
            ],
            'carousel_indicators' => [
                'label' => 'Slider Indicators',
                'description' => 'Adds bars to the bottom of the slides',
                'config' => [
                    'type' => 'check',
                    'renderType' => 'checkboxToggle',
                    'default' => 0
                ],
            ],
            'carousel_captions' => [
                'label' => 'Slider Captions',
                'description' => 'Set header and optional subheader from slide element as content overlay. Useful for Images. No HTML interpreted!',
                'config' => [
                    'type' => 'check',
                    'renderType' => 'checkboxToggle',
                    'default' => 0
                ],
            ],
            'carousel_crossfade' => [
                'label' => 'Slider Fade',
                'description' => 'Set fade transition effect instead of movement',
                'config' => [
                    'type' => 'check',
                    'renderType' => 'checkboxToggle',
                    'default' => 0
                ],
            ],
            'carousel_intervall' => [
                'label' => 'Slider Intervall',
                'description' => 'Empty to set autoplay to false; Set in ms (1000 for 1 sec)',
                'config' => [
                    'type' => 'input',
                    'default' => 4000
                ],
            ],
            'special_carousel' => [
                'label' => 'Special tinyslider 3 card slider',
                'description' => 'Activates the special 3 card tinyslider with center in focus',
                'config' => [
                    'type' => 'check',
                    'renderType' => 'checkboxToggle',
                    'default' => 0
                ],
            ],
            'tinyslider_config' => [
                'label' => 'Tinyslider',
                'description' => 'https://github.com/ganlanyuan/tiny-slider#options',
                'config' => [
                    'type' => 'text',
                    'cols' => 40,
                    'rows' => 8,
                    'default' => 'items: 1',
                    'required' => true
                ],
            ],
            'overflow_hidden' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:overflow.hidden',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:overflow.hidden.description',
                'config' => [
                    'type' => 'check',
                    'renderType' => 'checkboxToggle',
                    'items' => [
                        [
                        0 => '',
                        1 => '',
                        ]
                    ],
                ],
            ],
            'drop_shadow' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:drop_shadow',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:drop_shadow.description',
                'config' => [
                    'type' => 'check',
                    'renderType' => 'checkboxToggle',
                    'items' => [
                        [
                        0 => '',
                        1 => '',
                        ]
                    ],
                ],
            ],
            'imagecols_xxl' => [
                'exclude' => true,
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:imagecols_xxl',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        [ 'auto', 0],
                        [
                            '1',
                            1,
                        ],
                        [
                            '2',
                            2,
                        ],
                        [
                            '3',
                            3,
                        ],
                        [
                            '4',
                            4,
                        ],
                        [
                            '5',
                            5,
                        ],
                        [
                            '6',
                            6,
                        ],
                        [
                            '7',
                            7,
                        ],
                        [
                            '8',
                            8,
                        ],
                    ],
                    'default' => 0,
                ],
            ],
            'imagecols_xl' => [
                'exclude' => true,
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:imagecols_xl',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        [ 'auto', 0],
                        [
                            '1',
                            1,
                        ],
                        [
                            '2',
                            2,
                        ],
                        [
                            '3',
                            3,
                        ],
                        [
                            '4',
                            4,
                        ],
                        [
                            '5',
                            5,
                        ],
                        [
                            '6',
                            6,
                        ],
                        [
                            '7',
                            7,
                        ],
                        [
                            '8',
                            8,
                        ],
                    ],
                    'default' => 0,
                ],
            ],
            'imagecols_lg' => [
                'exclude' => true,
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:imagecols_lg',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        [ 'auto', 0],
                        [
                            '1',
                            1,
                        ],
                        [
                            '2',
                            2,
                        ],
                        [
                            '3',
                            3,
                        ],
                        [
                            '4',
                            4,
                        ],
                        [
                            '5',
                            5,
                        ],
                        [
                            '6',
                            6,
                        ],
                        [
                            '7',
                            7,
                        ],
                        [
                            '8',
                            8,
                        ],
                    ],
                    'default' => 0,
                ],
            ],
            'imagecols_md' => [
                'exclude' => true,
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:imagecols_md',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        [ 'auto', 0],
                        [
                            '1',
                            1,
                        ],
                        [
                            '2',
                            2,
                        ],
                        [
                            '3',
                            3,
                        ],
                        [
                            '4',
                            4,
                        ],
                        [
                            '5',
                            5,
                        ],
                        [
                            '6',
                            6,
                        ],
                        [
                            '7',
                            7,
                        ],
                        [
                            '8',
                            8,
                        ],
                    ],
                    'default' => 0,
                ],
            ],
            'imagecols_sm' => [
                'exclude' => true,
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:imagecols_sm',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        [ 'auto', 0],
                        [
                            '1',
                            1,
                        ],
                        [
                            '2',
                            2,
                        ],
                        [
                            '3',
                            3,
                        ],
                        [
                            '4',
                            4,
                        ],
                        [
                            '5',
                            5,
                        ],
                        [
                            '6',
                            6,
                        ],
                        [
                            '7',
                            7,
                        ],
                        [
                            '8',
                            8,
                        ],
                    ],
                    'default' => 0,
                ],
            ],
        ];
        $GLOBALS['TCA']['tt_content']['columns']['frame_class']['config']['fieldWizard']['selectIcons']['disabled'] = '0';
        // Add TCA columns.
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
            'tt_content',
            $columns
        );

        $container_columns = [
            'bgimage_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:bgimage.class',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:bgimage.class.description',
                'config' => [
                    'renderType' => 'selectMultipleSideBySide',
                    'type' => 'select',
                    'items' => [
                        ['---',''],
                    ],
                ],
            ],
            'bgimage_position' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:bgimage.position',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:bgimage.position.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'items' => [
                        ['---',''],
                        ['Top Left','position-absolute top-0 start-0','EXT:cjnrw/Resources/Public/Icons/top-left.png'],
                        ['Top Center','position-absolute top-0 start-50 translate-middle-x','EXT:cjnrw/Resources/Public/Icons/top-center.png'],
                        ['Top Right','position-absolute top-0 end-0','EXT:cjnrw/Resources/Public/Icons/top-right.png'],
                        ['Center Left','position-absolute top-50 start-0 translate-middle-y','EXT:cjnrw/Resources/Public/Icons/center-left.png'],
                        ['Center Center','position-absolute top-50 start-50 translate-middle','EXT:cjnrw/Resources/Public/Icons/center-center.png'],
                        ['Center Right','position-absolute top-50 end-0 translate-middle-y','EXT:cjnrw/Resources/Public/Icons/center-right.png'],
                        ['Bottom Left','position-absolute bottom-0 start-0','EXT:cjnrw/Resources/Public/Icons/bottom-left.png'],
                        ['Bottom Center','position-absolute bottom-0 start-50 translate-middle-x','EXT:cjnrw/Resources/Public/Icons/bottom-center.png'],
                        ['Bottom Right','position-absolute bottom-0 end-0','EXT:cjnrw/Resources/Public/Icons/bottom-right.png']
                    ],
                    'fieldWizard' => [
                        'selectIcons' => [
                            'disabled' => false,
                        ],
                    ],
                ],
            ],
            'space_start_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:space.start',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'items' => [
                        ['Default',''],
                        ['0','ps-0'],
                        ['1','ps-1'],
                        ['2','ps-2'],
                        ['3','ps-3'],
                        ['4','ps-4'],
                        ['5','ps-5'],
                        ['6','ps-2 ps-md-4 ps-xl-6'],
                        ['7','ps-2 ps-md-4 ps-xl-7'],
                        ['8','ps-2 ps-md-5 ps-xl-8'],
                        ['9','ps-2 ps-md-5 ps-xl-9'],
                        ['10','ps-2 ps-md-5 ps-xl-10'],
                        ['Auto','ms-auto'],
                    ],
                ],
            ],
            'space_end_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:space.end',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'items' => [
                        ['Default',''],
                        ['0','pe-0'],
                        ['1','pe-1'],
                        ['2','pe-2'],
                        ['3','pe-3'],
                        ['4','pe-4'],
                        ['5','pe-5'],
                        ['6','pe-2 pe-md-4 pe-xl-6'],
                        ['7','pe-2 pe-md-4 pe-xl-7'],
                        ['8','pe-2 pe-md-5 pe-xl-8'],
                        ['9','pe-2 pe-md-5 pe-xl-9'],
                        ['10','pe-2 pe-md-5 pe-xl-10'],
                        ['Auto','me-auto'],
                    ],
                ],
            ],
            'row_space_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:row.space',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:row.space.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'items' => [
                        ['---',''],
                        ['Start','justify-content-start','EXT:cjnrw/Resources/Public/Icons/justify-content-start.png'],
                        ['Ende','justify-content-end','EXT:cjnrw/Resources/Public/Icons/justify-content-end.png'],
                        ['Mitte','justify-content-center','EXT:cjnrw/Resources/Public/Icons/justify-content-center.png'],
                        ['Außen','justify-content-between','EXT:cjnrw/Resources/Public/Icons/justify-content-between.png'],
                        ['Flexibel','justify-content-around','EXT:cjnrw/Resources/Public/Icons/justify-content-around.png'],
                        ['Gleichmäßig','justify-content-evenly','EXT:cjnrw/Resources/Public/Icons/justify-content-evenly.png']
                    ],
                    'fieldWizard' => [
                        'selectIcons' => [
                            'disabled' => false,
                        ],
                    ],
                ],
            ],
            'row_item_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:row.item',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:row.item.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'items' => [
                        ['---',''],
                        ['Start','align-items-start','EXT:cjnrw/Resources/Public/Icons/align-items-start.png'],
                        ['Ende','align-items-end','EXT:cjnrw/Resources/Public/Icons/align-items-end.png'],
                        ['Mitte','align-items-center','EXT:cjnrw/Resources/Public/Icons/align-items-center.png'],
                        ['Basislinie','align-items-baseline','EXT:cjnrw/Resources/Public/Icons/align-items-baseline.png'],
                        ['Vollfläche','align-items-stretch','EXT:cjnrw/Resources/Public/Icons/align-items-stretch.png']
                    ],
                    'fieldWizard' => [
                        'selectIcons' => [
                            'disabled' => false,
                        ],
                    ],
                ],
            ],
            'col_1_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col1Class',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xsCol'
                    ],
                    'default' => 'col'
                ],
            ],
            'col_1_sm_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col1SmClass',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.sm.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'smCol'
                    ],
                ],
            ],
            'col_1_md_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col1MdClass',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.md.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'mdCol'
                    ],
                ],
            ],
            'col_1_lg_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col1LgClass',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.lg.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'lgCol'
                    ],
                ],
            ],
            'col_1_xl_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col1XlClass',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.xl.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xlCol'
                    ],
                ],
            ],
            'col_1_xxl_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col1XxlClass',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.xxl.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xxlCol'
                    ],
                ],
            ],
            'col_1_custom_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col1CustomClass',
                'config' => [
                    'type' => 'input',
                ],
            ],

            'col_2_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col2Class',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xsCol'
                    ],
                    'default' => 'col'
                ],
            ],
            'col_2_sm_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col2SmClass',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.sm.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'smCol'
                    ],
                ],
            ],
            'col_2_md_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col2MdClass',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.md.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'mdCol'
                    ],
                ],
            ],
            'col_2_lg_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col2LgClass',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.lg.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'lgCol'
                    ],
                ],
            ],
            'col_2_xl_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col2XlClass',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.xl.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xlCol'
                    ],
                ],
            ],
            'col_2_xxl_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col2XxlClass',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.xxl.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xxlCol'
                    ],
                ],
            ],
            'col_2_custom_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col2CustomClass',
                'config' => [
                    'type' => 'input',
                ],
            ],

            'col_3_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col3Class',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xsCol'
                    ],
                    'default' => 'col'
                ],
            ],
            'col_3_sm_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col3SmClass',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.sm.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'smCol'
                    ],
                ],
            ],
            'col_3_md_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col3MdClass',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.md.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'mdCol'
                    ],
                ],
            ],
            'col_3_lg_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col3LgClass',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.lg.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'lgCol'
                    ],
                ],
            ],
            'col_3_xl_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col3XlClass',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.xl.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xlCol'
                    ],
                ],
            ],
            'col_3_xxl_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col3XxlClass',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.xxl.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xxlCol'
                    ],
                ],
            ],
            'col_3_custom_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col3CustomClass',
                'config' => [
                    'type' => 'input',
                ],
            ],

            'col_4_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col4Class',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xsCol'
                    ],
                    'default' => 'col'
                ],
            ],
            'col_4_sm_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col4SmClass',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.sm.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'smCol'
                    ],
                ],
            ],
            'col_4_md_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col4MdClass',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.md.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'mdCol'
                    ],
                ],
            ],
            'col_4_lg_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col4LgClass',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.lg.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'lgCol'
                    ],
                ],
            ],
            'col_4_xl_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col4XlClass',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.xl.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xlCol'
                    ],
                ],
            ],
            'col_4_xxl_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col4XxlClass',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:class.xxl.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Cjnrw\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xxlCol'
                    ],
                ],
            ],
            'col_4_custom_class' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_ttc.xlf:col4CustomClass',
                'config' => [
                    'type' => 'input',
                ],
            ],
        ];
        // Add TCA columns.
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
            'tt_content',
            $container_columns
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
            'tt_content',
            'header',
            'header_distance_bottom, --linebreak--, header_color',
            'after:header_link'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
            'tt_content',
            'headers',
            'header_distance_bottom, --linebreak--, header_color',
            'after:header_link'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
            'tt_content',
            'frames',
            '--linebreak--,',
            'after:frame_class'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
            'tt_content',
            'frames',
            'space_start_class, space_end_class, --linebreak--,
            overflow_hidden, --linebreak--,
            drop_shadow',
            'after:space_after_class,'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
            'tt_content',
            'imagelinks',
            '--linebreak--, row_space_class, row_item_class',
            'after:image_zoom'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
            'tt_content',
            'gallerySettings',
            '--linebreak--, imagecols_xxl, imagecols_xl, imagecols_lg, imagecols_md, imagecols_sm',
            'before:imagecols'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
            'tt_content',
            'general',
            '--linebreak--, menu_layout, with_splash',
            'after:tx_container_parent'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
            'tt_content',
            'video',
            'media, assets, image',
            'after:header_link'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
            'tt_content',
            'CType',
            [
                'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:scroll.background',
                'scroll_background',
                'content-image',
            ],
            'textmedia',
            'after'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
            'tt_content',
            'CType',
            [
                'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:counter',
                'counter',
                'mimetypes-x-content-script',
            ],
            'scroll_background',
            'after'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
            'tt_content',
            'CType',
            [
                'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:maps',
                'maps',
                'mimetypes-x-content-script',
            ],
            'textmedia',
            'after'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
            'tt_content',
            'CType',
            [
                'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:projectslider',
                'projectslider',
                'content-image',
            ],
            'textmedia',
            'after'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
            'tt_content',
            'CType',
            [
                'Video',
                'video',
                'content-media',
            ],
            'textmedia',
            'after'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
            'tt_content',
            'CType',
            [
                'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:cite',
                'cite',
                'content-text',
            ],
            'textmedia',
            'after'
        );
        $GLOBALS['TCA']['tt_content']['types']['scroll_background'] = [
            'showitem' => '
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    header; Internal title (not displayed),
                    image,
                    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,

                    --palette--;;hidden,
                    --palette--;;access,
            ',
        ];
        $GLOBALS['TCA']['tt_content']['types']['projectslider'] = [
            'showitem' => '
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    header; Internal title (not displayed),
                    image,
                    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
            ',
        ];
        $GLOBALS['TCA']['tt_content']['palettes']['counter_config'] = [
            'label' => 'Counter config',
            'showitem' => 'frame_class;Counter-Schriftgröße,--linebreak--,
                counter_start, counter_end,--linebreak--,
                counter_duration, counter_delay,--linebreak--,
                counter_decimals, counter_decimalseparatorsymbol, --linebreak--,
                counter_once,--linebreak--,
                counter_currency, counter_currencyposition, counter_currencysymbol,--linebreak--,
                counter_separator, counter_separatorsymbol,'
        ];

        $GLOBALS['TCA']['tt_content']['types']['counter'] = [
            'showitem' => '
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    header,
                    --palette--;;counter_config,
                    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
            ',
        ];

        $GLOBALS['TCA']['tt_content']['types']['cite'] = [
            'showitem' => '
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    image,imageheight,imagewidth,bodytext,header,subheader,
                    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
            ',
        ];

        
        $GLOBALS['TCA']['tt_content']['types']['video'] = [
            'showitem' => '
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    header,
                    --palette--;;video,
                    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
            ',
        ];
        $GLOBALS['TCA']['tt_content']['types']['maps'] = [
            'showitem' => '
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    header,
                    header_link;Google Maps URL,
                    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
            ',
        ];
    },
    'cjnrw'
);
