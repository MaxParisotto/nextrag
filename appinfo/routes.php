<?php

declare(strict_types=1);

return [
    'routes' => [
        [
            'name' => 'nextrag.admin_settings',
            'url' => '/admin/settings',
            'verb' => 'GET',
            'controller' => 'SettingsController',
            'action' => 'index',
        ],
        [
            'name' => 'nextrag.useful_page',
            'url' => '/useful',
            'verb' => 'GET',
            'controller' => 'PageController',
            'action' => 'useful',
        ],
    ],
    'resources' => [],
];