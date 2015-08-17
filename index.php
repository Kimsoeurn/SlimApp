<?php 
require 'vendor/autoload.php';
$app = new Slim\Slim();
$app->get('/', function (){
	$user = new User();
});
$app->get('/login', function () use ($app){
	$app->render('login.php');
});
$app->run();
 ?>