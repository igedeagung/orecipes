<?php

$namespace = 'Orecipes\Presentation\Controllers\Web';
$module = 'orecipes';

$router->addPost('/orecipes/profil/register', [
    'namespace' => $namespace,
    'module' => $module,
    'controller' => 'profil',
    'action' => 'registerSubmit'
]);

$router->addPost('/orecipes/profil/login', [
    'namespace' => $namespace,
    'module' => $module,
    'controller' => 'profil',
    'action' => 'loginSubmit'
]);

$router->addGet('/orecipes/profil/logout', [
    'namespace' => $namespace,
    'module' => $module,
    'controller' => 'profil',
    'action' => 'logout'
]);

$router->addPost('/orecipes/profil/edit', [
    'namespace' => $namespace,
    'module' => $module,
    'controller' => 'profil',
    'action' => 'editSubmit'
]);

$router->addGet('/orecipes/recipe', [
    'namespace' => $namespace,
    'module' => $module,
    'controller' => 'recipe',
    'action' => 'index'
]);

return $router;
