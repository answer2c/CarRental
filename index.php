<?php
	//入口文件

	//加载自动加载文件
	require 'Load.php';
	spl_autoload_register('Load::autoLoad');

	
	if(!isset($_GET['c'])||!isset($_GET['c'])){
		$run =new app\Controller\Index();
		$run->index();
	}else{
			$controller="app\\Controller\\".$_GET['c'];
			$run=new $controller();
			$method=$_GET['m'];
			
			$run->$method();
			
		
		
	}




