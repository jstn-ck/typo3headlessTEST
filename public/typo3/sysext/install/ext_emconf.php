<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'System>Install',
    'description' => 'The Install Tool mounted as the module Tools>Install in TYPO3.',
    'category' => 'module',
    'state' => 'stable',
    'author' => 'TYPO3 Core Team',
    'author_email' => 'typo3cms@typo3.org',
    'author_company' => '',
    'version' => '11.5.16',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.16',
            'extbase' => '11.5.16',
            'fluid' => '11.5.16',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
