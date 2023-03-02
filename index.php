<?php

$routes = array(
    '/compte' => 'CompteController@dispatch',
    '/inscription' => 'SignupController@dispatch',
    '/activate' => 'CompteController@dispatch',
    '/reset' => 'CompteController@dispatch',
    '/reset_account' => 'CompteController@dispatch',
    '/connexion' => 'LoginController@dispatch',
    '/disconnect' => 'LoginController@disconnect',
    '/team' => 'TeamController@dispatch',
    '/dashboard' => 'AdminController@dispatch',
    '/projet' => 'AdminController@dispatch',
    '/validate' => 'AdminController@dispatch',
    '/resultats' => 'HomeController@resultats',
    '/' => 'HomeController@dispatch',
);

$requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$controller = null;
$action = null;

foreach ($routes as $route => $handler) {
    $pattern = '#^' . str_replace(['{id}'], ['([0-9]+)'], $route) . '$#';
    if (preg_match($pattern, $requestPath, $matches)) {
        $handlerParts = explode('@', $handler);
        $controller = $handlerParts[0];
        $action = $handlerParts[1];
        break;
    }
}

if ($controller !== null && $action !== null) {
    require_once 'controllers/' . $controller . '.php';
    $controllerInstance = new $controller();
    call_user_func_array([$controllerInstance, $action], $matches);
} else {
    // handle 404 error
    require_once 'controllers/HomeController.php';
    call_user_func_array([new HomeController(), 'notFound'], []);
}


?>
