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

    'airport' => [
        'airport_id' => env('AIRPORT_ID', 935),
    ],
    'categories' => [
        'hotels_slug' => 'hotels',
        'restaurants_slugs' => 'restaurants',
        'parking_slug' => 'parking',
        'car_rental_slug' => 'car-truck-rental',
        'bus_station_slug' => 'bus-stations',
        'shipping_slug' => 'shipping',
        'taxis_slug' => 'taxis',
        'train_stations_slug' => 'train-stations',
        'lounges_slug' => 'lounges'
    ],
    'google' => [
        'api_key' => env('GOOGLE_API_KEY'),
    ],
    'flights' => [
        'airlabs_api' => env('AIRLABS_API'),
    ],
    'appUrl' => [
        'baseUrl' => env('APP_URL'),
    ]

];
