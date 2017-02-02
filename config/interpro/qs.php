<?php

return [

    'static_all_site' => [
        'string' => ['phone'],
        'text'   => ['metrik_script', 'metrik_noscript']
    ],

    'offer' => [
        'string' => ['offer_case_title1', 'offer_case_title2'],
        'text' => ['offer_about', 'offer_case_desc1', 'offer_case_desc2']
    ],

    'quick_start' => [
        'image' => ['for_example'],
        'text' => ['example'],
        'groups' => [
            'text_left' => [
                'string' => ['adv_title'],
                'text' => ['descr'],
            ],
            'on_check' => [
                'image' => ['icon'],
                'text' => ['descr'],
            ],
        ]
    ],

    'clients_block' => [
        'groups' => [
            'clients' => [
                'image' => ['client_logo'],
                'string' => ['descr'],
            ],
        ]
    ],

    'all_inclusive' => [
        'groups' => [
            'advantages' => [
                'string' => ['adv_title'],
                'text' => ['descr'],
            ],
        ]
    ],

    'in_cost' => [
        'groups' => [
            'works' => [
                'image' => ['work'],
                'string' => ['work_title'],
                'text' => ['descr'],
            ],
        ]
    ],

    'shops' => [
        'text' => ['descr'],
        'groups' => [
            'shops_variant' => [
                'image' => ['figure'],
                'string' => ['cost_with', 'cost_without', 'special_condition', 'spec_cond_color'],
                'text' => ['descr'],
            ],
        ]
    ],
];
