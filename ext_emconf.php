<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Headless Grid Elements',
    'description' => 'Grid Elements json output for EXT:headless',
    'category' => 'be',
    'author' => 'Ramón Schlosser',
    'author_email' => 'schlosser@itplusx.de',
    'author_company' => 'ITplusX GmbH',
    'state' => 'alpha',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0-alpha',
    'constraints' => [
        'depends' => [
            'headless' => '2.0.0-2.99.99',
            'gridelements' => '10.0.0-10.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'ITplusX\\HeadlessGridelements\\' => 'Classes'
        ]
    ],
    'autoload-dev' => [
        'psr-4' => [
            'ITplusX\\HeadlessGridelements\\Tests\\' => 'Tests'
        ]
    ],
);
