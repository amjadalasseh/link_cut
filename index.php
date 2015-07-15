<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" />
<title>Urls</title>
</head>

<body>
 <table width="100%" align="center">
 	<tr>
    	<td align="center">Get My New Link</td>
    </tr>
    <tr>
    	<td align="center">
        	<?php
				if(isset($_SESSION['resulte'])){
					echo "<p>{$_SESSION['resulte']}</p>";
					unset($_SESSION['resulte']);
					}
			?>
        </td>
    </tr>
    <tr>
    	<td align="center">
        	<form action="link.php" method="post">
            	<input type="url" name="url" placeholder="URL:"  />
                <input type="submit" value="Get Link" /> 
            </form>
        </td>
    </tr>
 </table>
</body>
</html>