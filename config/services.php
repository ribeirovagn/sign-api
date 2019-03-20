<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],


    // CRYPTOCURRENCIES
    'bitcoin' => [
        'key' => env('BITCOIN_SIGN_KEY'),
        'reedemScript' => env('BITCOIN_SIGN_REDEEM'),
    ],

    'bitcoin_cash' => [
        'key' => env('BITCOIN_CASH_SIGN_KEY'),
        'reedemScript' => env('BITCOIN_CASH_SIGN_REDEEM'),
    ],

    'zcash' => [
        'key' => env('ZCASH_SIGN_KEY'),
        'reedemScript' => env('ZCASH_SIGN_REDEEM'),
    ],


    'dash' => [
        'key' => env('DASH_SIGN_KEY'),
        'reedemScript' => env('DASH_SIGN_REDEEM'),
    ]
];
