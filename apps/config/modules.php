<?php

return array(
    'orecipes' => [
        'namespace' => 'Orecipes',
        'webControllerNamespace' => 'Orecipes\Presentation\Controllers\Web',
        'apiControllerNamespace' => 'Orecipes\Presentation\Controllers\Api',
        'className' => 'Orecipes\Module',
        'path' => APP_PATH . '/modules/orecipes/Module.php',
        'userDefinedRouting' => true,
        'defaultRouting' => true,
        'defaultController' => 'orecipes',
        'defaultAction' => 'index',
    ],

);