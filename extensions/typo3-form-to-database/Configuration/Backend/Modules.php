<?php

use T3docs\Examples\Controller\ModuleController;

return [
    'web_FormToDatabaseFormresults' => [
        'parent' => 'web',
        'position' => ['after' => 'web_FormFormbuilder'],
        'access' => 'user',
        'workspaces' => '*',
        'path' => '/module/web/FormToDatabaseFormresults',
        'labels' => 'LLL:EXT:form_to_database/Resources/Private/Language/locallang_mod.xlf',
        'extensionName' => 'FormToDatabase',
        'iconIdentifier' => 'actions-form-to-database',
        'controllerActions' => [
            \Lavitto\FormToDatabase\Controller\FormResultsController::class => [
                'index',
                'show',
                'downloadCsv',
                'deleteFormResult',
                'updateItemListSelect',
                'unDeleteFormDefinition',
            ],
        ],
    ],
];