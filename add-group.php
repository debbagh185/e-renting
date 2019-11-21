<?php session_start(); ?>

<?php

    include("config.php");

    $pseudo=$_GET['name'];
    $nbr=$_GET['nbr'];
    $pass=$_GET['pass'];

    $s="SELECT * FROM groupe WHERE pseudo='$pseudo' ";
    
    $st = oci_parse($con,$s);
    oci_execute($st);
    
    if(oci_num_rows($st) == 0){

    $req="INSERT INTO groupe VALUES('','$pseudo','$pass','$nbr')";

    $r=oci_parse($con,$req);
    oci_execute($r);
    echo "0";
    }else {
    	echo "1";
    }

    
    oci_close($con);

?>