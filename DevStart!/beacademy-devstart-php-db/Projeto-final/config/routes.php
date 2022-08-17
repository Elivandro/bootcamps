<?php

    use App\controller\IndexController;
    use App\controller\AccountController;
    use App\controller\CategoryController;
    use App\controller\ProductController;


    function createRoute(string $controllerName, string $methodName)
    {
        return [
            "controller" => $controllerName,
            "method" => $methodName
        ];
    }

    $routes = [
        "/" => createRoute(IndexController::class, "IndexAction"),

        "/login" => createRoute(AccountController::class, "logInAction"),
        "/logout" => createRoute(AccountController::class, "logOutAction"),
        "/cadastrar" => createRoute(AccountController::class, "createAccountAction"),

        "/produtos/listar" => createRoute(ProductController::class, "listAction"), 
        "/produtos/novo" => createRoute(ProductController::class, "addAction"), 
        "/produtos/editar" => createRoute(ProductController::class, "editAction"), 
        "/produtos/remover" => createRoute(ProductController::class, "delAction"), 
        "/produtos/relatorio" => createRoute(ProductController::class, "reportAction"), 

        "/categorias/listar" => createRoute(CategoryController::class, "listAction"), 
        "/categorias/novo" => createRoute(CategoryController::class, "addAction"), 
        "/categorias/editar" => createRoute(CategoryController::class, "editAction"), 
        "/categorias/remover" => createRoute(CategoryController::class, "delAction"), 

    ];

    return $routes;