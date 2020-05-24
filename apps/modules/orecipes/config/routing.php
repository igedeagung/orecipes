<?php

$namespace = 'Orecipes\Presentation\Controllers\Web';
$module = 'orecipes';

$router->addGet('/orecipes/register', [
    'namespace' => $namespace,
    'module' => $module,
    'controller' => 'register',
    'action' => 'index'
]);

$router->addPost('/orecipes/register', [
    'namespace' => $namespace,
    'module' => $module,
    'controller' => 'register',
    'action' => 'submit'
]);

$router->addGet('/orecipes/recipe', [
    'namespace' => $namespace,
    'module' => $module,
    'controller' => 'recipe',
    'action' => 'index'
]);

$router->addPost('/orecipes/login', [
    'namespace' => $namespace,
    'module' => $module,
    'controller' => 'login',
    'action' => 'submit'
]);

$router->addGet('/orecipes/logout', [
    'namespace' => $namespace,
    'module' => $module,
    'controller' => 'login',
    'action' => 'logout'
]);

return $router;
