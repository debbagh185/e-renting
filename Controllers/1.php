<?php session_start(); ?>

<?php

    include("../Db/config.php");

    $nom=$_GET['lname_std'];
    $prenom=$_GET['fname_std'];
    $email=$_GET['email_std'];
    $pseudo=$_GET['grp_name'];
    $n=$_GET['nbr'];

    $test="SELECT group_id as g, nbr_std as n FROM Groupe WHERE pseudo='$pseudo' ";

    $rt=oci_parse($con,$test);
    oci_execute($rt);

    	while(($row = oci_fetch_assoc($rt)) != false){
    		$id=$row['G'];
    		$n=$row['N'];
    	}

    $requete="INSERT INTO Student VALUES('','$nom','$prenom','$email',$id)";

    $rt1=oci_parse($con,$requete);

    oci_execute($rt1);

    echo $n;

    
    oci_close($con);

?>