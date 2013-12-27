<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Database Query Logging
    |--------------------------------------------------------------------------
    |
    | By default, the SQL, bindings, and execution time are logged in an array
    | for you to review. They can be retrieved via the DB::profile() method.
    | However, in some situations, you may want to disable logging for
    | ultra high-volume database work. You can do so here.
    |
    */

    'profile' => true,

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection
    |--------------------------------------------------------------------------
    |
    | The name of your default database connection. This connection will used
    | as the default for all database operations unless a different name is
    | given when performing said operation. This connection name should be
    | listed in the array of connections below.
    |
    */

    'default' => '{{driver}}',

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | All of the database connections used by your application. Many of your
    | applications will no doubt only use one connection; however, you have
    | the freedom to specify as many connections as you can handle.
    |
    | All database work in Laravel is done through the PHP's PDO facilities,
    | so make sure you have the PDO drivers for your particlar database of
    | choice installed on your machine.
    |
    | Drivers: 'mysql', 'pgsql', 'sqlite'.
    |
    */

    'connections' => array(

        'sqlite' => array(
            'driver' => 'sqlite',
            'database' => '{{database}}',
            'prefix' => '{{prefix}}',
        ),

        'mysql' => array(
            'driver' => '{{driver}}',
            'host' => '{{host}}',
            'port' => '{{port}}',
            'database' => '{{database}}',
            'username' => '{{username}}',
            'password' => '{{password}}',
            'charset' => '{{charset}}',
            'prefix' => '{{prefix}}',
        ),

        'pgsql' => array(
            'driver' => 'pgsql',
            'host' => '{{host}}',
            'port' => '{{port}}',
            'database' => '{{database}}',
            'username' => '{{username}}',
            'password' => '{{password}}',
            'charset' => '{{charset}}',
            'prefix' => '{{prefix}}',
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store. However, it
    | provides a richer set of commands than a typical key-value store such as
    | APC or memcached. All the cool kids are using it.
    |
    | To get the scoop on Redis, check out: http://redis.io
    |
    */

    'redis' => array(

        'default' => array('host' => '127.0.0.1', 'port' => 6379),

    ),

);