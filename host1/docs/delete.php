<?php
header('Access-Control-Allow-Headers:*');
header('Access-Control-Allow-Origin: https://for4.us');
header('Content-type: application/json');
require('../config.php');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.cloudflare.com/client/v4/zones/'.$zone_id.'/dns_records/'.$_GET['id']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');


$headers = array(
       "Authorization: Bearer $storeidd",
       "Content-Type: application/json",
    );
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
curl_close($ch);

$p = json_decode($result,true);
if($p['success']){
    $data = array(
        'success' => true
        );
}else{
    $data = array(
        'success' => false
        );
}
print_r(json_encode($p, JSON_PRETTY_PRINT));
