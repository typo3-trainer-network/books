<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Books example',
    'description' => 'Books example extension by the TYPO3 Trainer Network',
    'version' => '1.0.x-dev',
    'category' => 'example',
    'constraints' => [
        'depends' => [
            'php' => '7.2.0-7.4.99',
            'typo3' => '9.5.0-10.99.99',
            'extbase' => '9.5.0-10.99.99',
            'fluid' => '9.5.0-10.99.99',
            'frontend' => '9.5.0-10.99.99',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'author' => 'TYPO3 Trainer Network',
    'author_email' => 'trainer-network@typo3.org',
    'author_company' => 'TYPO3 Trainer Network',
    'autoload' => [
        'psr-4' => [
            'TTN\\Books\\' => 'Classes/',
        ],
    ],
    'autoload-dev' => [
        'psr-4' => [
            'TTN\\Books\\Tests\\' => 'Tests/',
        ],
    ],
];
