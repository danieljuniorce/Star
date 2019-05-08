
<?php

return [
    /*
    |--------------------------------------------------------------------------
    |   State the developtment
    |--------------------------------------------------------------------------
    */
    "state" => env("APP_ENV", "production"),
    /*
    |--------------------------------------------------------------------------
    |   Connection with database
    |--------------------------------------------------------------------------
    | In production trade var $_ENV
    |
    */
    "dbconfig" => [
        "driver" => env("driver", $_ENV['DB_DRIVER']),
        "host" => env("host", $_ENV['DB_HOST']),
        "database" => env("database", $_ENV['DB_NAME']),
        "username" => env("username", $_ENV['DB_USER']),
        "password" => env("password", $_ENV['DB_PASSWORD'])
    ],

    /*
    |--------------------------------------------------------------------------
    |   Active debug in project
    |--------------------------------------------------------------------------
    */
    "debug" => "on", //or "Off"

    /*
    |--------------------------------------------------------------------------
    |   Select time zone in locale
    |--------------------------------------------------------------------------
    */
    "time_zone" => "America/Sao_Paulo",

    /*
    |--------------------------------------------------------------------------
    |   Select time zone in locale
    |--------------------------------------------------------------------------
    */
    "language" => "pt-br"
];