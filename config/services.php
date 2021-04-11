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

        'client_id' => '1003086656502-pbekfjbk6956t3qre5ek2ouo734ciod0.apps.googleusercontent.com',

        'client_secret' => 'Box1e8lTqInl0Rlh_ojc4deX',

        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',

    ],

    'facebook' => [
        'client_id' => '1154527908301900',
        'client_secret' => '980b8d8b2bb0fc98387bd70828246a83',
        'redirect' => 'http://127.0.0.1:8000/callback/facebook',
    ],

];
