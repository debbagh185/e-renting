<?php
    
    require("Db/config.php");

    $sql0= "SELECT COUNT(id_owner) as ctr FROM owner";

    $result0=oci_parse($con,$sql0);

    oci_execute($result0);


        while(($row = oci_fetch_assoc($result0)) != false){
            $c0=$row['CTR'];
        }

    $sql1= "SELECT COUNT(group_id) as ctr FROM groupe";

    $result1=oci_parse($con,$sql1);

    oci_execute($result1);


        while(($row = oci_fetch_assoc($result1)) != false){
            $c1=$row['CTR'];
        }

    $sql2= "SELECT COUNT(id_house) as ctr FROM house WHERE flag=1";

    $result2=oci_parse($con,$sql2);
 
    oci_execute($result2);


        while(($row = oci_fetch_assoc($result2)) != false){
            $c2=$row['CTR'];
        }


   

        oci_close($con);


?>

