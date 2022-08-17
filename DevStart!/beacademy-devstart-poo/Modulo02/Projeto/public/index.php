<?php

    include "../vendor/autoload.php";

    use App\controller\IndexController;
    use App\controller\CategoryController;
    use App\controller\ProductController;
    use App\controller\ErrorController;

    $url = explode("?", $_SERVER["REQUEST_URI"])[0];

    function createRoute(string $controllerName, string $methodName)
    {
        return [
            "controller" => $controllerName,
            "method" => $methodName
        ];
    }

    $routes = [
        "/" => createRoute(IndexController::class, "IndexAction"),

        "/login" => createRoute(IndexController::class, "logInAction"),
        "/logout" => createRoute(IndexController::class, "logOutAction"),

        "/produtos/listar" => createRoute(ProductController::class, "listAction"), 
        "/produtos/novo" => createRoute(ProductController::class, "addAction"), 
        "/produtos/editar" => createRoute(ProductController::class, "editAction"), 
        "/produtos/remover" => createRoute(ProductController::class, "delAction"), 

        "/categorias/listar" => createRoute(CategoryController::class, "listAction"), 
        "/categorias/novo" => createRoute(CategoryController::class, "addAction"), 
        "/categorias/editar" => createRoute(CategoryController::class, "editAction"), 
        "/categorias/remover" => createRoute(CategoryController::class, "delAction"), 

    ];
    
    if(false === isset($routes[$url])){

        (new ErrorController())->notfoundAction();
        exit;

    }

    $controllerName = $routes[$url]["controller"];
    $methodName = $routes[$url]["method"];

    (new $controllerName())->$methodName();

