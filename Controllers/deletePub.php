<?php
	
	require("../Db/config.php");

    $id=$_GET['id_h'];

    $sql1="SELECT nom_image as img FROM image WHERE id_house=$id" ;

    $result1=oci_parse($con,$sql1);

    oci_execute($result1);

    while(( $row=oci_fetch_assoc($result1)) != false){

        unlink('images/'.$row['IMG']);

    } 

    $sql0="DELETE FROM image WHERE id_house=$id" ;

    $result0=oci_parse($con,$sql0);

    oci_execute($result0);

    $sql="DELETE FROM house WHERE id_house=$id" ;

    $result=oci_parse($con,$sql);

    oci_execute($result);

    oci_close($con);

?>