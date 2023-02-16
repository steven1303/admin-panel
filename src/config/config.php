<?php

return [
    'settings' => [
        // rules value = (0 = without role, 1 = single role, 2 = multi roles)
        'roles' => 0
    ],
    'status' => [
        'admin' => [
            1 => 'Enabled',
            2 => 'Disabled',
        ]
    ],
    'validations' => [
        'admins' => [
            'username'=> ['required', 'unique:admins,username'],
            'email'=> ['required', 'unique:admins,email'],
            'alias' => ['required'],
        ]
    ]
];