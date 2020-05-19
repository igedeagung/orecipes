<?php

$namespace = 'Idy\Idea\Presentation\Controllers\Web';
$module = 'idea';

$router->addGet('/idea/add', [
    'namespace' => $namespace,
    'module' => $module,
    'controller' => 'idea',
    'action' => 'addPage'
]);

$router->addPost('/idea/add', [
    'namespace' => $namespace,
    'module' => $module,
    'controller' => 'idea',
    'action' => 'add'
]);

$router->addPost('/idea/vote', [
    'namespace' => $namespace,
    'module' => $module,
    'controller' => 'idea',
    'action' => 'vote'
]);

$router->addPost('/idea/rate', [
    'namespace' => $namespace,
    'module' => $module,
    'controller' => 'idea',
    'action' => 'rate'
]);

$router->addGet('/idea/register', [
    'namespace' => $namespace,
    'module' => $module,
    'controller' => 'user',
    'action' => 'registerPage'
]);

$router->addPost('/idea/register', [
    'namespace' => $namespace,
    'module' => $module,
    'controller' => 'user',
    'action' => 'register'
]);

return $router;
