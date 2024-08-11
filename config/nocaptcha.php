<?php

return [

    /*
    |--------------------------------------------------------------------------
    | API keys
    |--------------------------------------------------------------------------
    |
    | Set the API keys.
    |
    */
    'sitekey' => env('RECAPTCHA_V3_SITEKEY', ''),
    'secret' => env('RECAPTCHA_V3_SECRET', ''),
    /*
    |--------------------------------------------------------------------------
    | Options
    |--------------------------------------------------------------------------
    |
    | Various optional settings of the package.
    |
    */
    'options' => [
        'timeout' => 5,
    'threshold' => 0.5,
    'score' => true,
    ],

];
