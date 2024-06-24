<?php
require_once 'core/Controller.php';
require_once 'core/Database.php';


$url = isset($_GET['url']) ? explode('/', rtrim($_GET['url'], '/')) : [];
$controllerName = $url[0] ?? 'home';
$methodName = $url[1] ?? 'index';

$params = array_slice($url, 2);

$controllerPath = 'controllers/' . ucfirst($controllerName) . 'Controller.php';
if (file_exists($controllerPath)) {
    require_once $controllerPath;
    $controllerClass = ucfirst($controllerName) . 'Controller';
    $controller = new $controllerClass();
    if (method_exists($controller, $methodName)) {
        call_user_func_array([$controller, $methodName], $params);
    } else {
        echo 'Method not found';
    }
} else {
    //  show 404 page
    $controller = new Controller();
    $controller->view('404');

}

