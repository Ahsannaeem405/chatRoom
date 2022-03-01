<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    
    'google' => [
        'client_id' => '495871250616-rg38ul567u2r8gjofss4fjpmq1ll4uda.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'https://chatbti.herokuapp.com/public/auth/google/callback',
    ],
    'facebook' => [
        'client_id' => '269148538571749',
        'client_secret' => 'd349e04db705e11b0367ced9dbc7d57b',
        'redirect' => 'https://chatbti.herokuapp.com/public/auth/facebook/callback',
    ],

];
