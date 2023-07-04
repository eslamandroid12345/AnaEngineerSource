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
        'scheme' => 'https',
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
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => 'http://anaengineer.com/login/google/callback'
    ],
    'facebook' => [
        'client_id' => env('FACEBOOK_CLIENT_ID'), //USE FROM FACEBOOK DEVELOPER ACCOUNT
        'client_secret' => env('FACEBOOK_CLIENT_SECRET'), //USE FROM FACEBOOK DEVELOPER ACCOUNT
        'redirect' => 'http://localhost/eng-2/AnaEngineerSource/public/login/facebook/callback'
//        'redirect' => 'https://phplaravel-910914-3380797.cloudwaysapps.com/login/facebook/callback'
    ],

];
