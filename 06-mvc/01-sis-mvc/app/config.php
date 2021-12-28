<?php

use Blog\Interfaces\IArticle;
use Blog\Persistences\InMemoryArticle;

use function DI\create;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

return [
    IArticle::class => create(InMemoryArticle::class),
    Environment::class => function() {
        $loader = new FilesystemLoader(__DIR__ . "/../src/Blog/Views");
        return new Environment($loader);
    },
];