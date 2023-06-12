<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Headless Grid Elements',
    'description' => 'Grid Elements json output for EXT:headless',
    'category' => 'fe',
    'author' => 'Ramón Schlosser',
    'author_email' => 'schlosser@itplusx.de',
    'author_company' => 'ITplusX GmbH',
    'state' => 'stable',
    'version' => '3.0.0-dev',
    'constraints' => [
        'depends' => [
            'php' => '7.2.0-0.0.0',
            'typo3' => '11.5.0-11.5.99',
            'headless' => '3.0.0-3.99.99',
            'gridelements' => '11.0.0-11.99.99',
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
