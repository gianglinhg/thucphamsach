<?php
session_start();
$orderCode = rand(1000, 9999);
$numberPhone = substr($_POST['phone'] ?? "", 1);;
$_SESSION['authenticationOrder'] = $orderCode;

require_once '../../vendor/autoload.php';

use Twilio\Rest\Client;

$sid = "AC78a670b0a71308abafb49b9748256141";
$token = "042289cf9622db5a15aed4d9c9d037d1";
$twilio = new Client($sid, $token);

// $verification  = $twilio->verify->v2->services("VA1ae1bc455e391aee7d6d6004e815836a")
//                                                   ->verifications
//                                                   ->create("+84386352313", "sms");


//  print($verification);
// $twilio->messages->create(
//   '+84386352313',
//   [
//       'from' => '+17579792734',
//       'body' => 'Mã xác minh của bạn là :'.$orderCode
//   ]
// );
echo $orderCode;
