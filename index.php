<?php

ob_start();// stockage dans mémoire tempon

$controller = !empty($_GET['controller']) ? $_GET['controller']: 'home';
$file_controller = $controller . 'Controller.php';

if(file_exists('controllers/' . $file_controller)) {
    require 'controllers/' . $controller . 'Controller.php';

    $action = !empty($_GET['action']) ? $_GET['action']: 'index';

    if(function_exists($action)) {
        $action();
    }
    else {
      echo 'action not exist';
    }

}
else {
    echo 'Controller ' . $controller . ' not exist.';
}

$body = ob_get_clean(); // recupère contenu tempon et le nettoie

require 'views/base.php';
