<?php

return [
    'details' => [
        'name' => 'Industry',
        'description' => 'This plugin adds a list of all industries to OctoberCMS',
        'author' => 'Prismify'
    ],

    'permissions' => [
        'access_industries' => 'Manage Industries',
    ],

    'controllers' => [
        'industries' => [
            'config' => [
                'form' => [
                    'name' => 'Industry',
                    'create' => [
                        'title' => 'Create Industry'
                    ],
                    'update' => [
                        'title' => 'Edit Industry'
                    ],
                    'enable' => [
                        'label' => 'Enabled',
                        'comment' => 'Disabled industries are not visible on the backend-end.',
                        'success' => 'Successfully enabled those industries.'
                    ],
                    'disable' => [
                        'title' => 'Enable or Disable Industries',
                        'amount' => 'Industries selected: :amount',
                        'success' => 'Successfully disabled those industries.',
                    ]
                ],
                'list' => [
                    'title' => 'Manage Industries',
                    'toolbar' => [
                        'create' => 'New Industry',
                        'enable_or_disable' => 'Enable or Disable'
                    ]
                ]
            ]
        ]
    ],

    'models' => [
        'industry' => [
            'columns' => [
                'enabled' => [
                    'label' => 'Enabled'
                ],
                'name' => [
                    'label' => 'Name'
                ],
                'code' => [
                    'label' => 'Code'
                ],
            ],
            'fields' => [
                'enabled' => [
                    'label' => 'Enabled'
                ],
                'name' => [
                    'label' => 'Name',
                    'placeholder' => 'New industry name'
                ],
                'code' => [
                    'label' => 'Code',
                    'placeholder' => 'NEW_INDUSTRY_CODE'
                ],
            ]
        ],
    ],

    'settings' => [
        'menu' =>[
            'label' => 'Industries',
            'description' => 'Manage back-end industries.'
        ],
    ],

];
