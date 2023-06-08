<?php session_start();
date_default_timezone_set('Asia/Kolkata');
include_once('config.php');
include_once('PHPMailerAutoload.php');

// child name
if( isset($_POST['child_name']) && !empty($_POST['child_name']))
{
    $child_name = $_POST['child_name'];
}
else
{
    $child_name = '';
}

// parant name
if( isset($_POST['parent_name']) && !empty($_POST['parent_name']))
{
    $parent_name = $_POST['parent_name'];
}
else
{
    $parent_name = '';
}

//email
if( isset($_POST['email']) && !empty($_POST['email']))
{
    $email = $_POST['email'];
}
else
{
    $email = '';
}

//mobile
if( isset($_POST['mobile']) && !empty($_POST['mobile']))
{
    $mobile = $_POST['mobile'];
}
else
{
    $mobile = '';
}

//DOB
if( isset($_POST['dob']) && !empty($_POST['dob']))
{
    $dob = $_POST['dob'];
}
else
{
    $dob = '';
}


//board
if( isset($_POST['board']) && !empty($_POST['board']))
{
    $board = $_POST['board'];
}
else
{
    $board = '';
}

//gender
if( isset($_POST['gender']) && !empty($_POST['gender']))
{
    $gender = $_POST['gender'];
}
else
{
    $gender = '';
}

//school
if( isset($_POST['school']) && !empty($_POST['school']))
{
    $school = $_POST['school'];
}
else
{
    $school = '';
}

if( isset($_POST['pincode']) && !empty($_POST['pincode']))
{
    $pincode = $_POST['pincode'];
}
else
{
    $pincode = '';
}

if( isset($_POST['brochure']) && !empty($_POST['brochure']))
{
    $brochure = $_POST['brochure'];
}
else
{
    $brochure = '';
}


$type = 'dsrv_landing';
// var_dump($pincode);die;

if(isset($_SESSION['id']))
{
    $id = $_SESSION['id'];
    $sql = "UPDATE `contact` SET `child_name` = '".$child_name."',`parent_name` = '".$parent_name."' , `email` = '".$email."' , `mobile` = '".$mobile."' , `dob` = '".$dob."', `gender` = '".$gender."' ,`school` = '".$school."' , `board` = '".$board."' , `pincode` = '".$pincode."' , `created_at` = NOW()  WHERE `id` = ".$id;
}
else
{
    $sql = "INSERT INTO `contact`(`child_name`,`parent_name` , `email` , `mobile` , `dob` , `board`, `gender`, `school`,`type`, `created_at` , `pincode` ) VALUES ( '".$child_name."' , '".$parent_name."', '".$email."' , '".$mobile."' ,  '".$dob."' ,  '".$board."' ,  '".$gender."' ,'".$school."' ,'".$type."' , NOW() , '".$pincode."' )";
}
  //var_dump($sql);die;

if(mysqli_query($db, $sql))
{

    $template_message="Dear Sir/Madam,<br><br>Enquiry with following details recieved:<br><br>
    Child Name: ".$child_name."<br>
    Parent Name: ".$parent_name."<br>
    Email: ".$email."<br>
    Mobile: ".$mobile."<br>
    Date Of Birth: ".$dob."<br>
    Pincode: ".$pincode."<br>
    Gender: ".$gender."<br>
    Board: ".$board."<br>
    School: ".$school."<br><br><br>
    Thank you.
     ";

    $sms_message = "Thank you for filling out the DSRIS eligibility form. We will get back to you shortly. Admission forms for 2019-20 are available at the school office";

    $ty_message = "<h4>Welcome to Dr. S. Radhakrishnan International School, Malad West. Thank you for showing interest in enrolling your child for our AS and A levels program. Admission forms are available at our school office from 9.30 am to 4 pm.</h4>";

    $mail = new PHPMailer(true);
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->IsHTML(true); //
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
    $mail->Port = 465; // set the SMTP port for the GMAIL server
    $mail->Username = "assist@firsteconomy.com"; // GMAIL username
    $mail->Password = "f3e6f3e6"; // GMAIL password
    // $mail->AddAddress('contactus@dsrvmalad.org');
    $mail->AddAddress('rahuljat@firsteconomy.com');
    $mail->SetFrom($email, $parent_name);
    $mail->Subject = "Eligibility Enquiry for Admissions";
    $mail->Body =$template_message;

    $mail_ty = new PHPMailer(true);
    $mail_ty->IsSMTP(); // telling the class to use SMTP
    $mail_ty->IsHTML(true); //
    $mail_ty->SMTPAuth = true; // enable SMTP authentication
    $mail_ty->SMTPSecure = "ssl"; // sets the prefix to the servier
    $mail_ty->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
    $mail_ty->Port = 465; // set the SMTP port for the GMAIL server
    $mail_ty->Username = "assist@firsteconomy.com"; // GMAIL username
    $mail_ty->Password = "f3e6f3e6"; // GMAIL password
    $mail_ty->AddAddress($email);
    // $mail_ty->AddAddress('amiti@firsteconomy.com');
    $mail_ty->SetFrom('contactus@dsrvmalad.org','DSRV West');
    $mail_ty->Subject = "Thank you for showing interest";
    $mail_ty->Body = $ty_message;
    $mail_ty->addAttachment('prospectus_2018-2019.pdf');
    try{
           // $mail->Send();
           // $mail_ty->Send();
           // send_sms($mobile,$sms_message);
            if($brochure=='brochure'){
              echo 2;
            }else{
              echo 1;
            }
        } catch(Exception $e){
            echo 0;
        }
}
else {
        echo 0;
}




function send_sms($number,$message)
{
    $mobileNumber = $number;
    $user = 'TRANSAC1';
    $key = 'cafbae387eXX';
    $message = urlencode ($message);
    $senderid = 'BCGADM';
    $accusage = 1;

    $url="pt.k9media.in/submitsms.jsp?user=".$user."&key=".$key."&mobile=".$number."&senderid=".$senderid."&accusage=".$accusage."&message=".$message."";
    // var_dump($url);die;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $curl_response = curl_exec($ch);
    curl_close($ch);

    if($curl_response)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}

?>
