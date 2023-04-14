<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'NB Default',
    'description' => '',
    'category' => 'plugin',
    'author' => 'Steffen Maechtel',
    'author_email' => 's.maechtel@netzbewegung.com',
    'author_company' => 'Netzbewegung GmbH',
    'state' => 'stable',
    'version' => '11.5',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'php' => '7.4.1-7.4.999'
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];
