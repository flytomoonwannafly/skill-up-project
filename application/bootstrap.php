<?php
session_start();
require_once('vendor/autoload.php');
$route = new \Application\Core\Route();
$route->start();