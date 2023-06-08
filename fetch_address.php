<?php session_start();
include('includes/config.php');
$location = array();
$html = "";
$city = $_REQUEST['city'];

if(!empty($city))
{
$sql_address = "select `id` ,`address`,`lat`,`long` from branch_locator where `state` = '".$city."'";

$result_address = mysqli_query($db,$sql_address);


while($row_address = mysqli_fetch_array($result_address)){

    $rows_address[] = $row_address;

}

 foreach($rows_address as $k=>$v)
 {

 	$html .= '<div class="col-md-6 col-sm-12 col-xs-12">
							<div style="text-transform: capitalize;" class="addr_cmp active main" addr="'.$v['address'].'" lat="'.$v['lat'].'" lng="'.$v['long'].'" state="'.$city.'" id="content_'.$v['id'].'">
								'.ucwords(strtolower($v['address'])).'
							</div>
						</div>';
 }

 echo $html;
}



?>
