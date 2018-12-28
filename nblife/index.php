<?php
session_start();
require_once('inc/global.php');    
require_once('inc/rb.php');    
require_once('inc/Db.php');    

/*
    $controller = "pages";
	$action = "index";
    if(isset($_GET[0]))
    {
    	$controller = $_GET[0];
	}
    if(isset($_GET[1]))
    {
    	$action = $_GET[1];
	}
*/
	
	$controller = "pages";
	$action = "index";
	
	if (isset($_GET['controller']))
	{ 
		$controller =$_GET['controller']; 
	}
	if (isset($_GET['action']))
	{ 
		$action =$_GET['action']; 
	}


  require_once('views/layout.php');

?>