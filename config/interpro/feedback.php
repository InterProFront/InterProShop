<?php

return [
    'sys' => [
        //Всегда существует блок feedback в котором пробудлированы поля
        //from, host, port, encryption, mailto
        //если они не заполнены с админки, то смотрятся здесь в конфиге
        //если и тут нет, то все что возможно берется из конфига laravel MAIL_в формате ПОЛЕ
        'from'       => env('MAIL_FROM'),
        'host'       => env('MAIL_HOST', 'smtp.mailgun.org'),
        'port'       => env('MAIL_PORT', 587),
        'encryption' => env('MAIL_ENCRYPTION', 'tls'),
        'to'         => env('MAIL_TO'),
        'password'   => env('MAIL_PASSWORD')
    ],
    'feedback' => [
        //Предпоследнее место где формы смотрят: from, host, port, encryption, password, to
        //Здесь можно настроить конфиг из админки
        //доп. поля формате qs конфига
        'string' => ['descr1', 'descr2'],
        'int' => ['number1', 'number2']
    ],
    'mailfromac' => [
        //Подчинен блоку feedback
        //Группа автоподстановки по домену почты отправителя from значений host, port и encryption отправителя
    ],
    'forms' => [
        //Блоки форм
        //предопределенные поля: from, subject, host, port, encryption, password, to
        'ask' => [
            'form_fields' => [
                'string' => ['ask_mail','ask_name','ask_phone'],
                'text'   => ['ask_meeting']
            ]
        ],
        'discuss' => [
            'form_fields' => [
                'string' => ['discuss_mail','discuss_name','discuss_phone','discuss_service'],
                'text'   => ['discuss_meeting']
            ]
        ]
    ]
];
