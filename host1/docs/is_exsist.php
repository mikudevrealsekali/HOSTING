<?php
header('Content-type: application/json');
header('Access-Control-Allow-Headers:*');
header('Access-Control-Allow-Origin:*');
require('../config.php');
$url = 'https://api.cloudflare.com/client/v4/zones/'.$zone_id.'/dns_records?type=A&match=all';

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer $storeidd",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);

$c = json_decode($resp,true);


$data = [
    'is_exsist' => 'no'
    ];

foreach($c['result'] as $p){
    if($p['name'] == $_GET['domain']){
        $data['is_exsist'] = 'yes';
    }
}


print_r(json_encode($data, JSON_PRETTY_PRINT));

?>

