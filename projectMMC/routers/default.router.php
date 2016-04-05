<?php
	
	$app->add(new \Slim\Middleware\SessionCookie(array(
	    'expires' => '20 minutes',
	    'path' => '/',
	    'domain' => null,
	    'secure' => false,
	    'httponly' => false,
	    'name' => 'slim_session',
	    'secret' => 'CHANGE_ME',
	    'cipher' => MCRYPT_RIJNDAEL_256,
	    'cipher_mode' => MCRYPT_MODE_CBC
	)));

	// Create monolog logger and store logger in container as singleton
	// (Singleton resources retrieve the same log resource definition each time)
	$app->container->singleton('log', function () {
	    $log = new \Monolog\Logger('slim-skeleton');
	    $log->pushHandler(new \Monolog\Handler\StreamHandler('../logs/app.log', \Monolog\Logger::DEBUG));
	    return $log;
	});

	// Prepare view
	$app->view(new \Slim\Views\Twig());
	$app->view->parserOptions = array(
	    'charset' => 'utf-8',
	    'cache' => realpath('../templates/cache'),
	    'auto_reload' => true,
	    'strict_variables' => false,
	    'autoescape' => true
	);
	$app->view->parserExtensions = array(new \Slim\Views\TwigExtension());