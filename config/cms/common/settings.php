<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Settings
    |--------------------------------------------------------------------------
    |
    | These values are used throughout the application. Change these settings
    | as you desire. Feel free to add your own settings too!
    |
    */

    // Is app an intranet app?
    'is_intranet' => false,

    // Is app under development?
    'under_development' => true,

    // Supported languages (for ML use.)
    'app_locales' => [
        'fr' => 'fr',
        'nl' => 'nl',
    ],

    // I.P. adresses that are whitelisted.
    'developers_ip' => [
        '127.0.0.1', // Localhost,
        '84.84.78.91', // Michiel's IP
    ],

];
