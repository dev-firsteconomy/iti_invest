<?php session_start();
include('includes/config.php');
$location = array();
$html = "";
$zone = $_REQUEST['zone'];

if(!empty($zone))
{
$sql_state = "SELECT distinct `state` as `state` FROM `branch_locator` where `zone` = '".$zone."' GROUP BY  `state` ORDER BY state";

$result_state = mysqli_query($db,$sql_state);


while($row_state = mysqli_fetch_array($result_state)){

    $rows_state[] = $row_state;

}

 foreach($rows_state as $k=>$v)
 {
 	$val = preg_replace("|\s|","_",$v['state']);
 	$html .= "<option value=".$val.">".$v['state']."</option>";
 }

 echo $html;
}



?>
