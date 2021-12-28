<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Application\Services\Doctrine;

return [
    Doctrine::class => \DI\create(Doctrine::class)->constructor(\DI\get('db.connectionOptions')),

	Environment::class => function(){
		$loader = new FilesystemLoader(__DIR__ . '/../src/Application/Views');

		$twig = new Environment($loader, [
			"debug" => true,
		]);

		$twig->addExtension(new \Twig\Extension\DebugExtension());

		return $twig;
	},

    'db.connectionOptions' => [
		"driver"        => "pdo_mysql",
		"host"          => "localhost",
		"user"          => "admin",
		"password"      => "0mEg4a9012_",
		"port"          => 3306,
		"dbname"        => "doctrinedb",
    ]
];
