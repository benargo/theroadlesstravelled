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

    'battlenet' => [
        'client_id' => env('BATTLENET_KEY'),
        'client_secret' => env('BATTLENET_SECRET'),
        'redirect' => env('BATTLENET_REDIRECT_URI'),
    ],

    'discord' => [
        'client_id' => env('DISCORD_GUILDBOT_KEY'),
        'client_secret' => env('DISCORD_GUILDBOT_SECRET'),
        'redirect' => env('DISCORD_GUILDBOT_REDIRECT_URI'),
    ],

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
