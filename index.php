<?php

session_start();

require_once("vendor/autoload.php");

use \Slim\Slim;

$app = new Slim();
$app->config('debug', true);

require_once("functions.php");

require_once("routes/site.php");
require_once("routes/admin.php");
require_once("routes/admin-users.php");
require_once("routes/admin-categories.php");
require_once("routes/admin-products.php");
require_once("routes/admin-orders.php");


$app->run();
