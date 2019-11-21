<?php
session_start();
?>
<?php

  function insert_image($con,$img , $maxid){
    
    $req2 = "INSERT INTO image 
    VALUES ('', '$img','$maxid')"; 

    $result2= oci_parse($con,$req2);
    oci_execute($result2);
    }


    include("config.php");


    $h=new House();


    $h->id_owner=$_SESSION['owner-id'];
    $h->category=$_POST['category-app'];
    $h->title=$_POST['title'];
    $_SESSION['title']=$h->title;
    $h->describe=$_POST['Addescribe'];
    $h->price=$_POST['price'];

    function check_upload($img_name){

    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES[$img_name]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES[$img_name]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    } 
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES[$img_name]["size"] > 500000000 ) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }


    return $uploadOk;

}
    // Check if $uploadOk is set to 0 by an error
    if (!check_upload("input-upload-img1") && !check_upload("input-upload-img2") && !check_upload("input-upload-img3") && !check_upload("input-upload-img4") && !check_upload("input-upload-img5") ) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {

        if (move_uploaded_file($_FILES["input-upload-img1"]["tmp_name"],"images/" . basename($_FILES["input-upload-img1"]["name"])) &&
            move_uploaded_file($_FILES["input-upload-img2"]["tmp_name"],"images/" . basename($_FILES["input-upload-img2"]["name"])) &&
            move_uploaded_file($_FILES["input-upload-img3"]["tmp_name"],"images/" . basename($_FILES["input-upload-img3"]["name"])) &&
            move_uploaded_file($_FILES["input-upload-img4"]["tmp_name"], "images/" . basename($_FILES["input-upload-img4"]["name"])) &&
            move_uploaded_file($_FILES["input-upload-img5"]["tmp_name"], "images/" . basename($_FILES["input-upload-img5"]["name"])) ) {

            echo "The file ". basename( $_FILES["input-upload-img4"]["name"]). " has been uploaded.";


            $date = new DateTime();
            $j=$date->format('D, M Y - H:i');
            
            $image1=basename($_FILES["input-upload-img1"]["name"]);
            $image2=basename($_FILES["input-upload-img2"]["name"]);
            $image3=basename($_FILES["input-upload-img3"]["name"]);
            $image4=basename($_FILES["input-upload-img4"]["name"]);
            $image5=basename($_FILES["input-upload-img5"]["name"]);

        
            $house="INSERT INTO house
                    VALUES ('', '$h->category', '$h->title','$j', '$h->describe', '$h->price' , '$h->id_owner', 0)";
        
            
            $result=oci_parse($con,$house);
        
            $r=oci_execute($result);
            if(!$r){
            }
            else{

            $req1 = "SELECT MAX(id_house) as max FROM house WHERE id_owner='$h->id_owner'";
            $result1=oci_parse($con,$req1);
            oci_execute($result1);
        
            while(($row= oci_fetch_assoc($result1)) != false){
                if(!empty($row['MAX'])){
                    $maxid = $row['MAX'];
                }
            }
            
            insert_image($con,$image1,$maxid);
            insert_image($con,$image2,$maxid);
            insert_image($con,$image3,$maxid);
            insert_image($con,$image4,$maxid);
            insert_image($con,$image5,$maxid);
            
            header('Location: posting-success.php');
        }
           
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

   
  
    
    

 
    oci_close($con);

    


?>