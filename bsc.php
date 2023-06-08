
<?php
echo "ddddddd";

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
return _$REQUEST['bdc'];

// dd($bsedata);
?>
