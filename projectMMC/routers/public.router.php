<?php

	$app->get('/', function () use ($app) {
	    $app->render('public/index.php');
	});

	$app->get('/about', function () use ($app) {
	    $app->render('public/about.php');
	});

	$app->get('/prosedur', function () use ($app) {
	    $app->render('public/prosedur.php');
	});
		

?>
