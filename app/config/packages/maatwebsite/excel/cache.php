<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Enable/Disable cell caching
    |--------------------------------------------------------------------------
    */
    'enable'   => true,

    /*
    |--------------------------------------------------------------------------
    | Caching driver
    |--------------------------------------------------------------------------
    |
    | Set the caching driver
    |
    | Available methods:
    | memory|gzip|serialized|igbinary|discISAM|apc|memcache|temp|wincache|sqlite|sqlite3
    |
    */
    'driver'   => 'memory',

    /*
    |--------------------------------------------------------------------------
    | Cache settings
    |--------------------------------------------------------------------------
    */
    'settings' => array(

        'memoryCacheSize' => '32MB',
        'cacheTime'       => 600

    ),

    /*
    |--------------------------------------------------------------------------
    | Memcache settings
    |--------------------------------------------------------------------------
    */
    'memcache' => array(

        'host' => 'localhost',
        'port' => 11211,

    ),

    /*
    |--------------------------------------------------------------------------
    | Cache dir (for discISAM)
    |--------------------------------------------------------------------------
    */

    'dir'      => storage_path('cache')

);
