<?php

return [
    'ctrl' => [
        'label' => 'title',
        'title' => 'LLL:EXT:books/Resources/Private/Language/Tca.xlf:book',
        'delete' => 'deleted',
        'crdate' => 'crdate',
        'tstamp' => 'tstamp',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'cruser_id' => 'cruser_id',
        'useColumnsForDefaultValues' => 'hidden',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:books/Resources/Public/Icons/Book.svg',
        'searchFields' => 'title',
    ],
    'columns' => [
        'title' => [
            'l10n_mode' => 'prefixLangTitle',
            'label' => 'LLL:EXT:books/Resources/Private/Language/Tca.xlf:book.title',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'max' => 255,
                'eval' => 'trim,required'
            ],
        ],
        'year_of_publication' => [
            'label' => 'LLL:EXT:books/Resources/Private/Language/Tca.xlf:book.year_of_publication',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'max' => 4,
                'eval' => 'trim,int,required'
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'title, year_of_publication'
        ],
    ],
];
