<?php

    require_once __DIR__ . "/../vendor/autoload.php";

    require_once '../app/controller/MainController.php';

    $router = new AltoRouter();

    $router->setBasePath($_SERVER['BASE_URI']);

    $router->map( 
        'GET', 
        '/', 
        [
            'method' => 'home',
            'controller' => 'MainController'
        ],
        'homepage-accueil'
    );

    $match = $router->match();

    if($match === false){
        $mainController = new MainController;
        $mainController->error404();
        exit;
    }

    if($match !== false){

        $contentToUse = $match['target'];

        $methodToUse = $contentToUse['method'];
        $controllerToUse = $contentToUse['controller'];

        $controller = new $controllerToUse();
        $controller->$methodToUse();

    }



