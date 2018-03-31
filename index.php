<?php
	//入口文件
	define("SITE_URL","http://localhost:8080/CarRental");
	//加载自动加载文件
	require 'Load.php';
	spl_autoload_register('Load::autoLoad');

	
	if(!isset($_GET['c'])||!isset($_GET['m'])){
		
		$run =new app\Controller\Index();
		$run->index();
	}else{
			if(strpos($_GET['c'],'.php')){
				$_GET['c']=substr($_GET['c'],0,strpos($_GET['c'],'.php'));
			}
			$controller="app\\Controller\\".$_GET['c'];
			$run=new $controller();
			$method=$_GET['m'];
			$run->$method();
		//var_dump($_GET);
		
		
	}




