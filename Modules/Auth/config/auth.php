<?php

return [
    'providers' => [
        'users' => [
            'model' => env('AUTH_MODEL', Modules\Auth\Models\User::class),
        ],
    ],
];
