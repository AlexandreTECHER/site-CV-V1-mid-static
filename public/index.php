<?php

require_once __DIR__ . "/../vendor/autoload.php";

require_once '../app/controller/MainController.php';

$router = new AltoRouter();

$router->setBasePath($_SERVER['BASE_URI']);

session_start();

$router->map(
    'GET',
    '/',
    [
        'method' => 'home',
        'controller' => 'MainController'
    ],
    'homepage-accueil'
);

$router->map(
    'POST',
    '/',
    [
        'method' => 'contactPostMobile',
        'controller' => 'MainController'
    ],
    'homepage-accueil-post'
);

$router->map(
    'GET',
    '/experience',
    [
        'method' => 'experience',
        'controller' => 'MainController'
    ],
    'experience-page'
);

$router->map(
    'GET',
    '/portfolio',
    [
        'method' => 'portfolio',
        'controller' => 'MainController'
    ],
    'portfolio-page'
);

$router->map(
    'GET',
    '/diplome',
    [
        'method' => 'diplome',
        'controller' => 'MainController'
    ],
    'diplome-page'
);

$router->map(
    'GET',
    '/contact',
    [
        'method' => 'contact',
        'controller' => 'MainController'
    ],
    'contact-page'
);
$router->map(
    'POST',
    '/contact',
    [
        'method' => 'contactPost',
        'controller' => 'MainController'
    ],
    'contact-page-post'
);
$match = $router->match();

if ($match === false) {
    $mainController = new MainController;
    $mainController->error404();
    exit;
}

if ($match !== false) {

    $contentToUse = $match['target'];

    $methodToUse = $contentToUse['method'];
    $controllerToUse = $contentToUse['controller'];

    $controller = new $controllerToUse();
    $controller->$methodToUse();
}
