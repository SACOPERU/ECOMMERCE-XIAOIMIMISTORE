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

    'mercadopago' => [
        'key' => env('MP_PUBLIC_KEY'),
        'token' => env('MP_ACCESS_TOKEN'),
    ],

    'izipay' => [
        'url' => env('IZIPAY_URL'),
        'client_id' => env('IZIPAY_CLIENT_ID'),
        'client_secret' => env('IZIPAY_CLIENT_SECRET'),
        'public_key' => env('IZIPAY_PUBLIC_KEY'),
    ],

    'consulta_stock' => [
        'wsdl' => 'https://ws-erp.manager.cl/Flexline/Saco/Ws%20ConsultaStock/ConsultaStock.asmx?WSDL',
        'options' => [
            // Puedes agregar opciones específicas aquí si es necesario
        ],
    ],

];
