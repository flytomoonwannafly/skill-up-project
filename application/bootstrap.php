<?php
session_start();
require_once('vendor/autoload.php');
define('ROOT', dirname(__FILE__));
$route = new \Application\Core\Route();
$route->start();