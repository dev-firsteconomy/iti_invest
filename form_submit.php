<?php 
    include('includes/config.php');
    error_reporting(E_ALL);
    if(!empty($_POST['name'])){
        $name = $_POST['name'];
    } 
    else{
        $name = '';
    } 
    if(!empty($_POST['name'])){
        $name = $_POST['name'];
    } 
    else{
        $name = '';
    } 
    if(!empty($_POST['email'])){
        $email = $_POST['email'];
    } 
    else{
        $email = '';
    } 
    if(!empty($_POST['mobile'])){
        $mobile = $_POST['mobile'];
    } 
    else{
        $mobile = '';
    } 
    if(!empty($_POST['city'])){
        $city = $_POST['city'];
    } 
    else{
        $city = '';
    } 
    if(!empty($_POST['state'])){
        $state = $_POST['state'];
    } 
    else{
        $state = '';
    } 
    if(!empty($_POST['description'])){
        $description = $_POST['description'];
    } 
    else{
        $description = '';
    } 
    if(!empty($_POST['description'])){
        $description = $_POST['description'];
    } 
    else{
        $description = '';
    } 
    if(!empty($_POST['description'])){
        $description = $_POST['description'];
    } 
    else{
        $description = '';
    } 

        $subject = "Contact Us Form";
        $body = "Form Details are: <br><br>
        Name: ".$_POST['name']."<br>
        Email: ".$_POST['email']."<br>
        Contact: ".$_POST['mobile']."<br>
        City: ".$_POST['city']."<br>
        State: ".$_POST['state']."<br>
        Description: ".$_POST['description']."<br>
        Company Name: ".$_POST['company_name']."<br>
        Organisation: ".$_POST['organisation']."<br>";
        
       
        $body .="<br>Thank you.";
        $sender_email = "feplmailer@firsteconomy.com";
        $sender_password = "f3e6f3e6";
        $reciever ="ankita@firsteconomy.com";
        $date = date('Y-m-d H:i:s');
        $sql = "INSERT INTO `contact_form` (`name`,`email`,`phone`,`city`,`state`,`message`,`company`,`organisation`) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['mobile']."','".$_POST['city']."','".$_POST['state']."','".$_POST['description']."','".$_POST['company_name']."','".$_POST['organisation']."')";

       // var_dump($sql);die;
        if(mysqli_query($db, $sql)) { 

        //send_mail($reciever,$subject,$body,$sender_email,$sender_password);
        echo 1;
        }
        else
        {
            echo 0;
        }
   
   

    function send_mail($reciever,$subject,$body,$sender_email,$sender_password)
    {
        include_once('PHPMailerAutoload.php');
        $mail = new PHPMailer(true);
        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->IsHTML(true); //
        $mail->SMTPAuth = true; // enable SMTP authentication
        $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
        $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
        $mail->Port = 465; // set the SMTP port for the GMAIL server
        $mail->SetFrom('feplmailer@firsteconomy.com');
        $mail->Username = $sender_email; // GMAIL username
        $mail->Password = $sender_password; // GMAIL password
        // $mail->AddAddress('nirmeet@firsteconomy.com');
        $mail->AddAddress($reciever);
        $mail->Subject = $subject;
        $mail->Body = $body;
        try{ 
            $mail->Send();
                    //New register
        } catch(Exception $e){ 
          		var_dump($e);
        }
    }



 ?>
