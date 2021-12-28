<?php

namespace Application\Services;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

class Doctrine {
    public $em = null;

    public function __construct(array $connectionOptions)
    {
        $paths = [
            rtrim(__DIR__ . "/../Repositories"),
            rtrim(__DIR__ . "/../Entities"),
        ];

        $idDebMode = true;

        $config = Setup::createAnnotationMetadataConfiguration($paths, $idDebMode, null, null, false);
        $this->em = EntityManager::create($connectionOptions, $config);
    }
}