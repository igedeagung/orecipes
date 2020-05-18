<?php

namespace Orecipes;

use Phalcon\Di\DiInterface;
use Phalcon\Loader;
use Phalcon\Mvc\ModuleDefinitionInterface;

class Module implements ModuleDefinitionInterface
{
    public function registerAutoloaders(DiInterface $di = null)
    {
        $loader = new Loader();

        $loader->registerNamespaces([

            'Orecipes\Core\Domain\Event' => __DIR__ . '/Core/Domain/Event',
            'Orecipes\Core\Domain\Model' => __DIR__ . '/Core/Domain/Model',
            'Orecipes\Core\Domain\Repository' => __DIR__ . '/Core/Domain/Repository',
            'Orecipes\Core\Domain\Service' => __DIR__ . '/Core/Domain/Service',

            'Orecipes\Core\Application\Service' => __DIR__ . '/Core/Application/Service',
            'Orecipes\Core\Application\EventSubscriber' => __DIR__ . '/Core/Application/EventSubscriber',

            'Orecipes\Infrastructure\Persistence' => __DIR__ . '/Core/Infrastructure/Persistence',

            'Orecipes\Presentation\Web\Controller' => __DIR__ . '/Presentation/Web/Controller',
            'Orecipes\Presentation\Web\Validator' => __DIR__ . '/Presentation/Web/Validator',
            'Orecipes\Presentation\Api\Controller' => __DIR__ . '/Presentation/Api/Controller',
            
        ]);

        $loader->register();
    }

    public function registerServices(DiInterface $di = null)
    {
        $moduleConfig = require __DIR__ . '/config/config.php';

        $di->get('config')->merge($moduleConfig);

        include_once __DIR__ . '/config/services.php';
    }
}