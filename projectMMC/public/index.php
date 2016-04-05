<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

include "config.php";

require_once '../vendor/autoload.php';

// Prepare app
$app = new \Slim\Slim(array(
    'templates.path' => '../templates',
));

// Define database connection
ActiveRecord\Config::initialize(function($cfg) {
    global $db;
    $cfg->set_model_directory('../models');
    $cfg->set_connections(array(
        'development' => $db['driver'] . '://' . $db['user'] . ':' . $db['pass'] . '@' . $db['host'] . '/' . $db['name'],
    ));
});

// Call all file in file routers
$routers = glob('../routers/*.router.php');
    foreach ($routers as $router) {
        require $router;
    }

// Run app
$app->run();
