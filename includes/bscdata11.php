<?php

$html = '';
//$url = 'http://appfeeds.moneycontrol.com/jsonapi/market/indices&ind_id=9';
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);

//if(preg_match("||",$))
$about = json_decode($data, TRUE);
$bsedata=$about['indices'];

//$url = 'http://appfeeds.moneycontrol.com/jsonapi/market/indices&ind_id=4';
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);

//if(preg_match("||",$))
$about = json_decode($data, TRUE);
$bsesensex=$about['indices'];


if($bsedata['change']<0){
  $nifty_less = '<i class="fa fa-angle-double-down"> </i> ';
}else{
  $nifty_up = '<i class="fa fa-angle-double-up"> </i> ';
}

if($bsesensex['change']<0){
  $sensex_less = '<i class="fa fa-angle-double-down"> </i> ';
}else{
  $sensex_up = '<i class="fa fa-angle-double-up"> </i> ';
}

$html.= '<li><a href="">NIFTY: '.$bsedata['lastprice'];
$html.= $nifty_less;
$html.= $nifty_up;
$html.= abs($bsedata['change']);
$html.='('.$bsedata['percentchange'];
$html.="%)";

$html.= '<li><a href="">SENSEX: '.$bsesensex['lastprice'];
$html.= $sensex_less;
$html.= $sensex_up;
$html.= abs($bsesensex['change']);
$html.='('.$bsesensex['percentchange'];
$html.="%) ";
echo $html;

?>
