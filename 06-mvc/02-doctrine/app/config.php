<?php

use Application\Services\Doctrine;

return [
    Doctrine::class => \DI\create(Doctrine::class)->constructor(\DI\get('db.connectionOptions')),

    'db.connectionOptions' => [
        "driver"        => "pdo_mysql",
        "host"          => "localhost",
        "user"          => "admin",
        "password"      => "0mEg4a9012_",
        "port"          => 3306,
        "dbname"        => "doctrinedb",
    ],
];
