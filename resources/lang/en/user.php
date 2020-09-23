<?php
return [
    'top' => [
        'update_info' => [
            'name' => 'Info',
            'title' => 'Update Info'
        ],
        'transaction' => [
            'name'  => 'Transaction',
            'title' => 'List transaction'
        ],
        'payment_card' => [
            'name'  => 'Payment link',
            'title' => 'Payment link'
        ],
    ],
    'update_info' => [
        'title_update_info' => 'Update information',
        'form'              => [
            'label' => [
                'name'  => 'Name',
                'phone' => 'Phone',
                'email' => 'Email',
            ]
        ]
    ],
    'transaction' => [
        'title' => 'List of orders',
    ],
    'payment_card' => [
        'title' => 'Billing Information',
        'form'              => [
            'label' => [
                'bank'  => 'Bank name',
                'branch' => 'Branch',
                'account_holder' => 'Account holder',
                'stk' => 'Account number',
            ]
        ]
    ],
];
