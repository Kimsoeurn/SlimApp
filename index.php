<?php 
require 'vendor/autoload.php';
class User 
{
	public function __construct()
	{
		var_dump(__CLASS__);
	}
}

$app = new Slim\Slim();
$app->get('/', function (){
	$user = new User();
});
$app->get('/login', function () use ($app){
	$app->render('login.php');
});
$app->run();
 ?>