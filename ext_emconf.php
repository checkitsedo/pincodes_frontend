<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "pincodes_frontend"
 *
 * Auto generated by Extension Builder 2020-06-17
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Pincodes frontend',
    'description' => 'This extension enables frontend users to add ext:form_pincodes items in the frontend.',
    'category' => 'plugin',
    'author' => 'Dominik Senti',
    'author_email' => 'info@senti.lu',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'form_pincodes' => '1.0.0-1.99.99',
            'numbered_pagination' => '1.0.1-1.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
