<?php
	session_start();
	date_default_timezone_set('America/Sao_Paulo');
	$autoload = function($class){
	$class = str_replace('\\', '/', $class); //pra funcionar no linux		
		include('classes/'.$class.'.php');
	};

	spl_autoload_register($autoload);
	
	define('INCLUDE_PATH','http://localhost/medilab/');		

	//Conectar com banco de dados!
	define('HOST','localhost');
	define('USER','root'); //root
	define('PASSWORD','');
	define('DATABASE','u609173674_medilab');

?>