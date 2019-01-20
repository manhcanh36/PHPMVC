<?php
    echo __FILE__ .'<br><br>';

    echo dirname(__FILE__).'<br>';

    $site_path = dirname(__FILE__);
    define('SITE_PATH',$site_path);
    define('IS_ADMIN',0);
    define('APP_PATH',SITE_PATH.'/app');
    define('CONTROLLER_PATH',SITE_PATH.'/app/controllers');
    define('MODEL_PATH',SITE_PATH.'/app/models');
    define('VIEW_PATH',SITE_PATH.'/app/views');
    define('CORE_PATH',SITE_PATH.'/core');
    define('DB_PATH',SITE_PATH.'/core/database');
    define('HELPER_PATH',SITE_PATH.'/core/helper');
    define('URL','http://localhost:8080/phpmvc1/phpmvc/');
    define('URL_ASSETS',URL.'assets/');

    echo '<br> SITE_PATH: '. SITE_PATH;
    echo '<br> IS_ADMIN: '. IS_ADMIN;
    echo '<br> APP_PATH: '. APP_PATH;
    echo '<br> CONTROLLERS_PATH: '. CONTROLLER_PATH;
    echo '<br> MODEL_PATH: '. MODEL_PATH;
    echo '<br> VIEW_PATH: '. VIEW_PATH;
    echo '<br> CORE_PATH: '. CORE_PATH;
    echo '<br> DB_PATH: '. DB_PATH;
    echo '<br> HELPER_PATH: '. HELPER_PATH;
    echo '<br> URL: '. URL;
    echo '<br> URL_ASSETS: '. URL_ASSETS;

    $controller = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : 'index';
    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'index';
    $controller = strtolower($controller);
    $action = strtolower($action);
    $controllerClass = $controller.'Controller';
    $actionName = $action.'Action';
    $index_controller_path = CONTROLLER_PATH.'/indexController.php';
    require $index_controller_path;
    $controller = new indexController();
    $controller->indexAction();