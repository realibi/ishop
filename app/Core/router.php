<?php
 //header("Access-Control-Allow-Origin: *");

use Controllers\LoginController;
use Core\Helpers;
use Core\RenderEngine;
use Klein\Klein;
use Klein\Request;
use Klein\Response;
use Models\Auth;
use Models\Password;
use Models\Tables\Users;

$router = new Klein();

$router->get("/?", function () {
    return "Index page";
});

$router->with("/admin", function () use ($router) {

    $router->get("/?", function (Request $request, Response $response) {
        return $response->redirect(Helpers::url("admin", "dashboard"))->send();
    });

    $router->get("/dashboard/?", function (Request $request, Response $response) {

        //Auth::middleware($response);

        $controller = new \Controllers\DashboardController();

        return $controller->showPage();
    });

    $router->get("/dashboard/categories", function () {

        //Auth::middleware($response);

        $controller = new \Controllers\DashboardController();

        return $controller->getCategories();
    });

    $router->get("/dashboard/categories/delete/[:id]" , function (Request $request, Response $response) {

        //Auth::middleware($response);

        $controller = new \Controllers\DashboardController();

        return $controller->deleteCategory($request->id);
    });

    $router->get("/dashboard/categories/create/[:categoryName]" , function (Request $request, Response $response) {

        //Auth::middleware($response);

        $controller = new \Controllers\DashboardController();

        return $controller->createCategory($request->categoryName);
    });

    $router->get("/dashboard/items/delete/[:id]" , function (Request $request, Response $response) {

        //Auth::middleware($response);

        $controller = new \Controllers\DashboardController();

        return $controller->deleteItem($request->id);
    });

    $router->get("/dashboard/items", function () {

        //Auth::middleware($response);

        $controller = new \Controllers\DashboardController();

        return $controller->getItems();
    });

    $router->get("/logout/?", function (Request $request, Response $response) {

        Auth::logout();

        return $response->redirect(Helpers::url("login"))->send();

    });


});

$router->dispatch();