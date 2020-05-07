<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Sitepackage',
    'description' => 'Basic sitepackage for TYPO3.',
    'category' => 'templates',
    'author' => 'Wolfgang Wagner',
    'author_email' => 'wwagner@wwagner.net',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
