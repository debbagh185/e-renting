<?php session_start(); ?>

<?php

    include("../Db/config.php");

    $fname=$_GET['fname'];
    $lname=$_GET['lname'];
    $phone=$_GET['phone'];
    $bio=$_GET['bio'];
    $email=$_GET['email'];
    $pass=$_GET['pass'];


    $s="SELECT * FROM owner WHERE email='$email' ";

    $r=oci_parse($con,$s);
    oci_execute($r);
    $numrows = oci_fetch_all($r, $res);

    if($numrows==0){
        
    $req="INSERT INTO owner VALUES('','$lname','$fname','$phone','$bio','$email','$pass')";

    $j=oci_parse($con,$req);
    oci_execute($j);
    echo "1";
    }else {
        echo "0";
    }

    
    oci_close($con);

?>