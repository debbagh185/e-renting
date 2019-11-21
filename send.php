<?php session_start(); ?>

<?php

    include("config.php");

    $pseudo=$_GET['name'];

    $test="SELECT group_id as g, password as p FROM Groupe WHERE pseudo='$pseudo' ";

    $rt=oci_parse($con,$test);
    oci_execute($rt);

    	while(( $row=oci_fetch_assoc($rt) ) != false ){
    		$id=$row['G'];
            $pass=$row['P'];
    	}
    

        $sql="SELECT email as E FROM Student WHERE group_id='$id' ";

        $result=oci_parse($con,$sql);
        oci_execute($result);

            $msg="Username: ".$pseudo." Password: ".$pass;
          while(( $roww=oci_fetch_assoc($result) ) != false){
                $email=$roww['E'];
                mail($email,"ESTE Renting: Your login group informations",$msg);
        }
        echo "The login informations are sent to all members of this group! <a href='login-group.html'><b>Login?</b></a>";
    
    
    oci_close($con);

?>