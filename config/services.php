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
    'facebook' => [
        'client_id' => '449241629037574', //Facebook API
        'client_secret' => '075e7a81581807cf227d2f41735b1b92', //Facebook Secret
        'redirect' => 'https://wikipoli.gq/login/facebook/callback',
    ],
    'twitter' => [
        'client_id' => 'Kipb8tBSBuXNZXCDbqNU5RIcz',
        'client_secret' => 'Oq7HKW88pI6mJU2iQvu1SWy1W3Ju25V7oELpFZrD0xxtIx28Hz',
        'redirect' => 'https://wikipoli.gq/login/twitter/callback',
    ],
    'google' => [
        'client_id' => '376829724031-kvnboddib34glrdkcp2rogegl3vlacuk.apps.googleusercontent.com',
        'client_secret' => 'R2_6zANHz2IxQ5D_lwcjxHUR',
        'redirect' => 'https://wikipoli.gq/login/google/callback',
    ]
];
