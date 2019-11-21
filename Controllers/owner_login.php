

<?php
session_start();
?>

<?php

	require("../Db/config.php");


	$email=$_GET['email'];
	$pass=$_GET['pass'];

	$sql="SELECT id_owner as id, nom as n, prenom as p, phone as ph, bio as b, email as em FROM owner WHERE email='$email' AND password='$pass' " ;

	$st = oci_parse($con,$sql);
    oci_execute($st);
	

		while(($row=oci_fetch_assoc($st)) != false ){

				if(!empty($row['ID'])){

			$_SESSION['owner-id']=$row['ID'];
			$_SESSION['owner-name']=$row['N'];
            $_SESSION['owner-prenom']=$row['P'];
            $_SESSION['owner-phone']=$row['PH'];
            $_SESSION['owner-bio']=$row['B'];
            $_SESSION['owner-email']=$row['EM']; 

            header('Location: post-ads.php');
	        }
	        	else{
				
				header('Location: login-owner.html');
			}
			 
		}
                 
            

	



	oci_close($con);
	


?>