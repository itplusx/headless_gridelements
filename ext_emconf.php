<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Headless Grid Elements',
    'description' => 'Grid Elements json output for EXT:headless',
    'category' => 'fe',
    'author' => 'Ramón Schlosser',
    'author_email' => 'schlosser@itplusx.de',
    'author_company' => 'ITplusX GmbH',
    'state' => 'stable',
    'version' => '4.0.0-dev',
    'constraints' => [
        'depends' => [
            'php' => '8.1.0-8.4.99',
            'typo3' => '12.4.0-12.4.99',
            'headless' => '4.0.0-4.99.99',
            'gridelements' => '12.0.0-12.99.99',
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
];
