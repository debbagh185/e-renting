

<?php
session_start();
?>

<?php

  require("config.php");

  $id=$_GET['id'];

  $sql="SELECT h.id_house as id_h, h.category as c, h.title as t
                          , h.time as tim , h.describe as d , h.price as p , h.id_owner as id_o
                          , i.nom_image as img1 FROM House h , image i 
                          WHERE i.id_house = h.id_house 
                          AND h.id_house='$id'
                          AND h.flag = 1
                          ";


  $result=oci_parse($con,$sql);
  oci_execute($result);

           $h=new House;
           $tab=array();
                           
           while(($row=oci_fetch_assoc($result) ) != false ){

            if(!empty($row['IMG1'])){

              $h->id_owner=$row['ID_O'];
              $h->category=$row['C'];
              $h->title=$row['T'];
              $h->describe=$row['D'];
              $h->price=$row['P'];

              array_push($tab,$row['IMG1']);

              }

            }

              $sql1="SELECT nom as n, prenom as p, phone as ph, bio as b, email as em FROM Owner WHERE id_owner='$h->id_owner' " ;

              $result1=oci_parse($con,$sql1);

              oci_execute($result1);

                
              while(($row1=oci_fetch_assoc($result1) ) != false){



              if(!empty($row1['N'])){

                $nom=$row1['N'];
                $prenom=$row1['P'];
                $phone=$row1['PH'];
                $bio=$row1['B'];
                $email=$row1['EM'];

              }
    
              }


 


        
              oci_close($con);


?>