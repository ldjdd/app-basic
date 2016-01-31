<?php

return [
    'env' => 'production',
    'debug' => true,
    'components' => require dirname(__FILE__).'/components.php',
    'modules' => [
        'manage' => [
            'namespace' => '',
        ]
    ]
];