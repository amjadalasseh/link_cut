<?php 
require_once('linkclass.php');
if(isset($_GET['code'])){
	$s = new mylink;
	$code = $_GET['code'];
	
	if($url = $s->getlink($code)){
		 header('Location:{$url}');
			die();
		}
	}
	
 header('Location:index.php');
?>