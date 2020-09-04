<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Headless Grid Elements',
    'description' => 'Grid Elements json output for headless extension',
    'category' => 'fe',
    'author' => 'Ramon Schlosser',
    'author_email' => 'schlosser@itplusx.de',
    'author_company' => 'ITplusX GmbH',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.4-dev',
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
];
