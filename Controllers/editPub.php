
<?php
	
	require("../Db/config.php");

    $id=$_GET['id_pub'];
    $category=$_GET['c'];
    $title=$_GET['t'];
    $describe=$_GET['d'];
    $price=$_GET['p'];

    $sql="UPDATE house SET category='$category', title='$title', describe='$describe', price=$price WHERE id_house=$id " ;

    $result=oci_parse($con,$sql);

    oci_execute($result);

    oci_close($con);

?>