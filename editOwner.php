<?php
	
	require("config.php");

    $id=$_GET['id_ow'];
    $prenom=$_GET['p'];
    $nom=$_GET['nom'];
    $phone=$_GET['phone'];
    $bio=$_GET['bio'];

    $sql="UPDATE owner SET nom='$nom', prenom='$prenom', phone=$phone, bio='$bio' WHERE id_owner=$id " ;

    $result=oci_parse($con,$sql);

    oci_execute($result);

    oci_close($con);

?>