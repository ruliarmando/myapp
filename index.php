<?php
define('BASEPATH', __DIR__);

if(!session_id()) @session_start();

require 'lib/altorouter.php';
require 'lib/savant3.php';
require 'lib/idiorm.php';
require 'lib/gump.php';
require 'conf/db.php';
$routeCollections = require 'conf/route.php';

$GLOBALS['cfg'] = require 'conf/app.php';

$GLOBALS['router'] = new AltoRouter($routeCollections, dirname($_SERVER['SCRIPT_NAME']));

$matchRoute = $GLOBALS['router']->match();

if($matchRoute['target'] !== NULL){
    list($moduleName, $controllerName, $actionName) = explode(':', $matchRoute['target']);
    $_GET = $matchRoute['params'];
    unset($matchRoute['params']);
    require 'common/function/template.php';
    require "module/{$moduleName}/{$controllerName}/{$actionName}.php";
}else{
	require 'common/template/404.php';
}