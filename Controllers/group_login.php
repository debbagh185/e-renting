<?php
session_start();
?>
<?php

	require("../Db/config.php");


	$pseudo=$_GET['pseudo'];
	$pass=$_GET['pass'];

	$sql="SELECT pseudo, password FROM groupe WHERE pseudo='$pseudo' AND password='$pass' " ;

	$st = oci_parse($con,$sql);
    oci_execute($st);

	if(oci_fetch_all($st, $res) == 1)
		{

			 $_SESSION['user-group']=$pseudo;
                 
             header('Location: category.php');
		}else{
			header('Location: login-group.html');
		}



		oci_close($con);
	


?>