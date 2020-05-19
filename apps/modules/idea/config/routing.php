<?php

$namespace = 'Idy\Idea\Presentation\Controllers\Web';
$module = 'idea';

$router->addGet('/idea/register', [
    'namespace' => $namespace,
    'module' => $module,
    'controller' => 'register',
    'action' => 'index'
]);

$router->addPost('/idea/register', [
    'namespace' => $namespace,
    'module' => $module,
    'controller' => 'register',
    'action' => 'submit'
]);

$router->addGet('/idea/post', [
    'namespace' => $namespace,
    'module' => $module,
    'controller' => 'post',
    'action' => 'index'
]);

$router->addPost('/idea/login', [
    'namespace' => $namespace,
    'module' => $module,
    'controller' => 'login',
    'action' => 'submit'
]);

$router->addGet('/idea/logout', [
    'namespace' => $namespace,
    'module' => $module,
    'controller' => 'login',
    'action' => 'logout'
]);

return $router;
