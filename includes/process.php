<?php 

include('config.php');

var_dump($_FILE);die;

if(!empty($_REQUEST))
{

 if(!empty($_REQUEST['name']))
 {	
   $name = $_REQUEST['name'];
 }  
 else{
 	$name = "";
 }

 if(!empty($_REQUEST['phone']))
 {	
   $mobile = $_REQUEST['phone'];
 }  
 else{
 	$mobile = "";
 }

 if(!empty($_REQUEST['email']))
 {	
   $email = $_REQUEST['email'];
 }  
 else{
 	$email = "";
 }

if(!empty($_REQUEST['post']))
 {	
   $post = $_REQUEST['post'];
 }  
 else{
 	$post = "";
 }







$arrayData = array('name'=>$name,'mobile'=>$mobile,'email'=>$email,'project'=>$project,'message'=>$message,'status'=>$status,'source'=>$source,'agnet'=>$agent,'campaign'=>$campaign);

if(!empty($arrayData)){ 
 
     $sql = "INSERT INTO `contact_form` (`name`, `email`, `mobile`,`source`, `success`, `unique_id`,`type`) VALUES ('".$name."', '".$email."', '".$mobile."','".$source."' ,'".$success."', '".$unique_id."','".$type."')";
       
       if(mysqli_query($bd,$sql))
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
    }	
    else{
        echo 0;
    }
}
?>