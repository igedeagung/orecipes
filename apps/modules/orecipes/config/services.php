<?php

use Orecipes\Application\ShowRecipe\ShowRecipeService;
use Orecipes\Application\ShowRecipeById\ShowRecipeByIdService;
use Orecipes\Application\ValidityAddRecipe\ValidityAddRecipeService;
use Orecipes\Application\AddRecipe\AddRecipeService;
use Orecipes\Application\AddLike\AddLikeService;
use Orecipes\Application\Unlike\UnlikeService;
use Orecipes\Application\EditRecipe\EditRecipeService;
use Orecipes\Application\DeleteRecipe\DeleteRecipeService;
use Orecipes\Application\SearchRecipe\SearchRecipeService;
use Orecipes\Application\Register\RegisterService;
use Orecipes\Application\Login\LoginService;
use Orecipes\Application\GetUserById\GetUserByIdService;
use Orecipes\Application\EditProfil\EditProfilService;
use Phalcon\Mvc\View;
use Orecipes\Infrastructure\Persistence\SqlRecipeRepository;
use Orecipes\Infrastructure\Persistence\SqlUserRepository;
use Orecipes\Infrastructure\Persistence\SqlLikeRepository;

$di['voltServiceMail'] = function($view) use ($di) {

    $config = $di->get('config');

    $volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di);
    if (!is_dir($config->mail->cacheDir)) {
        mkdir($config->mail->cacheDir);
    }

    $compileAlways = $config->mode == 'DEVELOPMENT' ? true : false;

    $volt->setOptions(array(
        "compiledPath" => $config->mail->cacheDir,
        "compiledExtension" => ".compiled",
        "compileAlways" => $compileAlways
    ));
    return $volt;
};

$di['view'] = function () {
    $view = new View();
    $view->setViewsDir(__DIR__ . '/../views/');

    $view->registerEngines(
        [
            ".volt" => "voltService",
        ]
    );

    return $view;
};

$di['db'] = function () use ($di) {

    $config = $di->get('config');

    $dbAdapter = $config->database->adapter;

    return new $dbAdapter([
        "host" => $config->database->host,
        "username" => $config->database->username,
        "password" => $config->database->password,
        "dbname" => $config->database->dbname
    ]);
};


// $di->set('swiftMailerTransport', function ()  use ($di) {
//     $config = $di->get('config');
//     $transport = (new Swift_SmtpTransport($config->mail->smtp->server, $config->mail->smtp->port))
//         ->setUsername($config->mail->smtp->username)
//         ->setPassword($config->mail->smtp->password);

//     return $transport;
// });

// $di->set('swiftMailer', function () use ($di) {
//     $mailer = new Swift_Mailer($di->get('swiftMailerTransport'));

//     return new SwiftMailer($mailer);
// });

$di->set('recipeRepository', function() use ($di) {
    return new SqlRecipeRepository($di->get('db'));
});

$di->set('userRepository', function() use ($di) {
    return new SqlUserRepository($di->get('db'));
});

$di->set('likeRepository', function() use ($di) {
    return new SqlLikeRepository($di->get('db'));
});

$di->set('showRecipeService', function () use ($di) {
   return new ShowRecipeService($di->get('recipeRepository'));
});

$di->set('validityAddRecipeService', function () use ($di) {
    return new ValidityAddRecipeService($di->get('userRepository'));
 });

$di->set('addRecipeService', function () use ($di) {
    return new AddRecipeService($di->get('recipeRepository'));
 });

$di->set('addLikeService', function () use ($di) {
    return new AddLikeService($di->get('likeRepository'), $di->get('userRepository'));
 });

$di->set('unlikeService', function () use ($di) {
    return new UnlikeService($di->get('likeRepository'), $di->get('userRepository'));
 });

 $di->set('showRecipeByIdService', function () use ($di) {
    return new ShowRecipeByIdService($di->get('recipeRepository'));
});

$di->set('registerService', function () use ($di) {
    return new RegisterService($di->get('userRepository'));
 });

 $di->set('loginService', function () use ($di) {
    return new LoginService($di->get('userRepository'));
 });

 $di->set('getUserByIdService', function () use ($di) {
    return new GetUserByIdService($di->get('userRepository'));
 });

 $di->set('editProfilService', function () use ($di) {
    return new EditProfilService($di->get('userRepository'));
 });

 $di->set('editRecipeService', function () use ($di) {
    return new EditRecipeService($di->get('recipeRepository'));
 });

 $di->set('deleteRecipeService', function () use ($di) {
    return new DeleteRecipeService($di->get('recipeRepository'));
 });

 $di->set('searchRecipeService', function () use ($di) {
    return new SearchRecipeService($di->get('recipeRepository'));
 });