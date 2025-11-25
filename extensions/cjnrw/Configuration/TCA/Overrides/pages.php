<?php
/***************************************************************
  *  Copyright notice
  *
  *  (c) 2019 Felix Herrmann <info@failx.de>
  *      Created on: 28.09.17 15:23
  *
  *  All rights reserved
  *
  *  This script is part of the TYPO3 project. The TYPO3 project is
  *  free software; you can redistribute it and/or modify
  *
  *  it under the terms of the GNU General Public License as published by
  *  the Free Software Foundation; either version 3 of the License, or
  *  (at your option) any later version.
  *
  *  The GNU General Public License can be found at
  *  http://www.gnu.org/copyleft/gpl.html.
  *
  *  This script is distributed in the hope that it will be useful,
  *  but WITHOUT ANY WARRANTY; without even the implied warranty of
  *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  *  GNU General Public License for more details.
  *
  *  This copyright notice MUST APPEAR in all copies of the script!
  ***************************************************************/

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

if (!defined('TYPO3')) {
    die('Access denied.');
}

call_user_func(
    function ($extkey) {
        // $configurationManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Configuration\BackendConfigurationManager::class);
        // $extbaseFrameworkConfiguration = $configurationManager->getTypoScriptSetup();
        // get absolute path the PageTSconfig directory.
        $path = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($extkey).'Configuration/PageTSconfig/';
        // Collect .ts files.
        $filesTS = \TYPO3\CMS\Core\Utility\GeneralUtility::getFilesInDir($path, 'ts');
        // Collect .txt files
        $filesTXT = \TYPO3\CMS\Core\Utility\GeneralUtility::getFilesInDir($path, 'typoscript');
        // Merge collected files.
        $files = array_merge($filesTS, $filesTXT);
        foreach ($files as $fileKey => $fileValue) {
            // Register all files under PageTS
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
                $extkey,
                'Configuration/PageTSconfig/'.$fileValue,
                $fileValue
            );
        }
        $columns = [
            'theme' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:theme',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:theme.description',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        ['---',''],
                        ['Theme Weiß', 'theme-white', 'EXT:cjnrw/Resources/Public/Icons/theme-white.png']
                    ],
                    'fieldWizard' => [
                        'selectIcons' => [
                            'disabled' => false,
                        ],
                    ],
                ],
            ],
            'social_media_icon' => [
                'label' => 'Icon',
                'exclude' => 0,
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectMultipleSideBySide',
                    // 'items' => \Failx\Cjnrw\Utility\IconUtility::iconArray($extbaseFrameworkConfiguration['plugin.']['tx_cjnrw.']['settings.']['jsonfile']),
                    'maxitems' => 1
                ],
            ],
            'disable_pagesplash' => [
                'label' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:disable_pagesplash',
                'description' => 'LLL:EXT:cjnrw/Resources/Private/Language/locallang_db.xlf:disable_pagesplash.description',
                'config' => [
                    'type' => 'check',
                    'renderType' => 'checkboxToggle',
                    'default' => 0,
                ],
            ]
        ];
        // Add TCA columns.
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
            'pages',
            $columns
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
            'pages',
            'theme,disable_pagesplash,--linebreak--',
            '',
            'after:doktype'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
            'pages',
            'title',
            '--linebreak--,social_media_icon',
            'after:subtitle'
        );
    },
    'cjnrw'
);
