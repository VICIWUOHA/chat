<?php

use App\User;

return [
    'model' => User::class,
    'table' => 'oauth_identities',
    'providers' => [
        'facebook' => [
            'client_id' => '532377383958818',
            'client_secret' => '37810466336a799f19a46d7350976566',
            'redirect_uri' => 'http://localhost:8000/facebook/redirect',
        ],
        'google' => [
            'client_id' => '
            183489039152-bpg45oggaqbhccklnkv305m2msi1f9ut.apps.googleusercontent.com',
            'client_secret' => 'F5naBp7jzN0o1pW9lEmz54eO',
            'redirect_uri' => 'http://localhost:8000/google/redirect',
        ],
        // 'github' => [
        //     'client_id' => '12345678',
        //     'client_secret' => 'y0ur53cr374ppk3y',
        //     'redirect_uri' => 'https://example.com/your/github/redirect',
        //     'scope' => [],
        // ],
        // 'linkedin' => [
        //     'client_id' => '12345678',
        //     'client_secret' => 'y0ur53cr374ppk3y',
        //     'redirect_uri' => 'https://example.com/your/linkedin/redirect',
        //     'scope' => [],
        // ],
        // 'instagram' => [
        //     'client_id' => '12345678',
        //     'client_secret' => 'y0ur53cr374ppk3y',
        //     'redirect_uri' => 'https://example.com/your/instagram/redirect',
        //     'scope' => [],
        // ],
        // 'soundcloud' => [
        //     'client_id' => '12345678',
        //     'client_secret' => 'y0ur53cr374ppk3y',
        //     'redirect_uri' => 'https://example.com/your/soundcloud/redirect',
        //     'scope' => [],
        // ],
    ],
];
