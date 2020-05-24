<?php

namespace Orecipes;

use Phalcon\DiInterface;
use Phalcon\Loader;
use Phalcon\Mvc\ModuleDefinitionInterface;

class Module implements ModuleDefinitionInterface
{
    public function registerAutoloaders(DiInterface $di = null)
    {
        $loader = new Loader();

        $loader->registerNamespaces([
            'Orecipes\Domain\Model' => __DIR__ . '/domain/model',
            'Orecipes\Domain\Repository' => __DIR__ . '/domain/repository',
            'Orecipes\Domain\Transport' => __DIR__ . '/domain/transport',
            'Orecipes\Domain\Exception' => __DIR__ . '/domain/exception',
            'Orecipes\Infrastructure\Persistence' => __DIR__ . '/infrastructure/persistence',
            'Orecipes\Infrastructure\Transport' => __DIR__ . '/infrastructure/transport',
            'Orecipes\Application' => __DIR__ . '/application',
            'Orecipes\Presentation\Controllers\Web' => __DIR__ . '/presentation/controllers/web',
            'Orecipes\Presentation\Controllers\Api' => __DIR__ . '/presentation/controllers/api',
            'Orecipes\Presentation\Controllers\Validators' => __DIR__ . '/presentation/controllers/validators',
        ]);

        $loader->register();
    }

    public function registerServices(DiInterface $di = null)
    {
        $moduleConfig = require __DIR__ . '/config/config.php';

        $di->get('config')->merge($moduleConfig);

        include_once __DIR__ . '/config/services.php';
        // include_once  __DIR__ . '/config/register-events.php';
    }

}