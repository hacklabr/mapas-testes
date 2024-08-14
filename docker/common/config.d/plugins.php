<?php

return [
    'plugins' => [
        'AdminLoginAsUser' => ['namespace' => 'AdminLoginAsUser'],
        'MultipleLocalAuth' => [ 'namespace' => 'MultipleLocalAuth' ],
        'Accessibility',
        'Analytics',
        'RegistrationPayments' => [
            'namespace' => 'RegistrationPayments',
            'config' => [],
        ],
        'MapasBlame' => [
            'namespace' => 'MapasBlame',
            'config' => [
                'request.logData.PATCH' => function ($data) {
                    return $data;
                },
            ]
        ],
    ]
];