<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	echo "OK";
	
	$sql = new Guincho\DB\Sql();

	$result = $sql->select("SELECT * FROM tb_acesapreendidos");

	echo json_encode($result);


});

$app->run();

 ?>