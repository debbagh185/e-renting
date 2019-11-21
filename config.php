<?php

	$con=oci_connect("este_renting","este_renting","localhost/xe");

	if(!$con){
		$e = oci_error();  
        trigger_error(htmlentities($e['message']), E_USER_ERROR);
	}
	
	   class House
		    {

		        public $id_house,$id_owner,$category,$title,$time,$describe,$img1;
		        
		    }
		
		
		
?>