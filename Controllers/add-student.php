<?php session_start(); ?>

<?php

    include("../Db/config.php");

    $nom=$_GET['lname'];
    $prenom=$_GET['fname'];
    $email=$_GET['email'];
    $phone=$_GET['phone'];
    $bio=$_GET['bio'];
    $pass=$_GET['pass'];

    $requete="INSERT INTO users VALUES('','$nom','$prenom','$phone','$bio','$email','$pass','student',0)";

    $rt1=oci_parse($con,$requete);

    oci_execute($rt1);

    echo '1';

    
    oci_close($con);

?>