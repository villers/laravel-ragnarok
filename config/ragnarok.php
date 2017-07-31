<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Server ip
    |--------------------------------------------------------------------------
    |
    | This value is the ip of ragnarok emulator.
    */

    'server_ip' => env('RAGNAROK_SERVER_IP', '127.0.0.1'),

    /*
    |--------------------------------------------------------------------------
    | Server Login Port
    |--------------------------------------------------------------------------
    |
    | This value is the login port of ragnarok.
    */

    'server_login_port' => env('RAGNAROK_SERVER_LOGIN_PORT', '6900'),

    /*
    |--------------------------------------------------------------------------
    | Server Char Port
    |--------------------------------------------------------------------------
    |
    | This value is the char port of ragnarok.
    */

    'server_char_port' => env('RAGNAROK_SERVER_CHAR_PORT', '6121'),

    /*
    |--------------------------------------------------------------------------
    | Server Map Port
    |--------------------------------------------------------------------------
    |
    | This value is the map port of ragnarok.
    */

    'server_map_port' => env('RAGNAROK_SERVER_MAP_PORT', '5121'),

    /*
    |--------------------------------------------------------------------------
    | Server Number Add Cashpoint
    |--------------------------------------------------------------------------
    |
    | This value is the number of increments of the account's cashpoints.
    */

    'server_nb_add_cashpoint' => env('RAGNAROK_SERVER_NB_ADD_CASHPOINT', '500'),

    /*
    |--------------------------------------------------------------------------
    | Starpass configuration
    |--------------------------------------------------------------------------
    |
    | This value is the number idp and idd of starpass
    */

    'starpass_idp' => env('RAGNAROK_STARPASS_IDP', '142078'),
    'starpass_idd' => env('RAGNAROK_STARPASS_IDD', '225986'),

];
