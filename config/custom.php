<?php

return [
    'aws_bucket_url' => env('AWS_BUCKET_URL'),
    'setting' => [
        'max_login_fails' => 5,
        'failed_login_retry_minutes' => 15,
    ],
    'basic_auth' => [
        'username' => env('WEB_BASIC_AUTH_USERNAME', 'root'),
        'password' => env('WEB_BASIC_AUTH_PASSWORD', 'toor'),
    ],
];
