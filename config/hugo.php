<?php
$twoLevel = [
    [
        'name'  => 'PHP',
        'icon'  => 'typcn typcn-device-desktop hor-icon',
        'menus' => [
            ['name' => 'install', 'url' => '/php/php_install/md'],
            ['name' => 'phpstorm', 'url' => '/php/PhpStorm/md'],
            ['name' => 'fpm-conf', 'url' => '/php/php-fpm/conf'],
            ['name' => 'php the right way', 'url' => '/php/theWay/php'],
            ['name' => 'composer', 'url' => '/php/composer/composer/md'],
            ['name' => 'design mode - singleton', 'url' => '/php/designMode/mode/Singleton/php'],
            ['name' => 'design mode - strategy', 'url' => '/php/designMode/mode/Strategy/php'],
        ]
    ],
    [
        'name'  => 'PHP Frame',
        'icon'  => 'fa fa-paw',
        'menus' => [
            ['name' => 'Laravel - Application', 'url' => '/php/laravel/core/md'],
            ['name' => 'Laravel - Core', 'url' => '/php/laravel/core2/md'],
        ]
    ],
    [
        'name'  => 'MySql',
        'icon'  => 'mdi mdi-airplay',
        'menus' => [
            ['name' => 'Install', 'url' => ''],
            ['name' => 'phpStorm', 'url' => ''],
        ]
    ],
    [
        'name'  => 'Nginx',
        'icon'  => 'mdi mdi-airplay',
        'menus' => [
            ['name' => 'Install', 'url' => ''],
            ['name' => 'phpStorm', 'url' => ''],
        ]
    ],
    [
        'name'  => 'Docker',
        'icon'  => 'mdi mdi-airplay',
        'menus' => [
            ['name' => 'Install', 'url' => ''],
            ['name' => 'phpStorm', 'url' => ''],
        ]
    ],
    [
        'name'  => 'NoSQL',
        'icon'  => 'mdi mdi-airplay',
        'menus' => [
            ['name' => 'Install', 'url' => ''],
            ['name' => 'phpStorm', 'url' => ''],
        ]
    ],
    [
        'name'  => 'RabbitMQ',
        'icon'  => 'mdi mdi-airplay',
        'menus' => [
            ['name' => 'Install', 'url' => ''],
            ['name' => 'phpStorm', 'url' => ''],
        ]
    ],
];
$moreLevel = [
    [
        'name' => 'Other',
        'icon' => 'typcn typcn-spanner-outline',
        'menus' => [
            //本地忽略文件地址
            [
                ['name' => '工单错误信息', 'url' => '/try/error_order/log'],
                ['name' => 'CST错误信息', 'url' => '/try/error_cst/log'],
            ],
            [
                ['name' => '框架设计', 'url' => '/designFrame/frame/md'],
                ['name' => 'A2', 'url' => '/A2'],
            ],
            [
                ['name' => '领域驱动设计 - 货运', 'url' => '/_bookLog/DDD/SimpleOne/php'],
                ['name' => 'B2', 'url' => '/B2'],
            ],
            [
                ['name' => 'C1', 'url' => '/C1'],
                ['name' => 'C2', 'url' => '/C2'],
            ],
            [
                ['name' => 'D1', 'url' => '/C1'],
                ['name' => 'D2', 'url' => '/C2'],
            ],
        ]
    ]
];
return ['two_level' => $twoLevel, 'more_level' => $moreLevel];