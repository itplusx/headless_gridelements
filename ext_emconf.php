<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Headless Grid Elements',
    'description' => 'Grid Elements json output for EXT:headless',
    'category' => 'fe',
    'author' => 'Ramón Schlosser',
    'author_email' => 'schlosser@itplusx.de',
    'author_company' => 'ITplusX GmbH',
    'state' => 'beta',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'php' => '7.2.0-0.0.0',
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
