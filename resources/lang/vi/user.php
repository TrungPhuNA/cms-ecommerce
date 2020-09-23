<?php
return [
    'top'         => [
        'update_info' => [
            'name'  => 'Thông tin',
            'title' => 'Cập nhật thông tin'
        ],
        'transaction' => [
            'name'  => 'Đơn hàng',
            'title' => 'Danh sách đơn hàng'
        ],
        'payment_card' => [
            'name'  => 'Liên kết',
            'title' => 'Liên kết ngân hàng'
        ],
    ],
    'update_info' => [
        'title_update_info' => 'Cập nhật thông tin',
        'form'              => [
            'label' => [
                'name'  => 'Họ tên',
                'phone' => 'Số điện thoại',
                'email' => 'Email',
            ]
        ]
    ],
    'transaction' => [
        'title' => 'Danh sách đơn hàng',
    ],
    'payment_card' => [
        'title' => 'Thông tin thanh toán',
        'form'              => [
            'label' => [
                'bank'  => 'Tên ngân hàng',
                'branch' => 'Chi nhánh',
                'account_holder' => 'Chủ tài khoản',
                'stk' => 'Số tài khoản',
            ]
        ]
    ],
];
