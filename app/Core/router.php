<?php

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

        return $controller->show();
    });

    $router->get("/logout/?", function (Request $request, Response $response) {

        Auth::logout();

        return $response->redirect(Helpers::url("login"))->send();

    });


});

$router->dispatch();