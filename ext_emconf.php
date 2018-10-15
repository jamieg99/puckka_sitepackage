<?php

/**
 * Extension Manager/Repository config file for ext "puckka".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Puckka',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '9.1.0-9.1.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Puckka\\Puckka\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Jamie',
    'author_email' => 'jamie@jamie-grant.com',
    'author_company' => 'Puckka',
    'version' => '1.0.0',
];
