<?php 
 session_start();
 require_once('linkclass.php');
 $s= new mylink;
 
 if(isset($_POST['url'])){
	  $url = $_POST['url'];
	  if($code = $s->makecode($url))
	  {
		  	$_SESSION['resulte']="your new link is <a href=\"http://127.0.0.1/link/{$code}\">http://127.0.0.1/link/{$code}</a>";
		  
		  }
		else{
				$_SESSION['resulte']="there is problem";
			}
	 }
	 header('Location:index.php');
?>
