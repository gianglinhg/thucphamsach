<?php
session_start();
include '../../core/db.php';
require '../../model/baseModel.php';
$app = new BaseModel();
$authenticationOrder = $_SESSION['authenticationOrder'];

$tokenUser = $_COOKIE['tokenUserFarm'] ?? "";
$tokenUser != "" ? $user = $app->getOne('users', ['token' => $tokenUser]) : $user = '';
$user != "" ? $userId = $user['user_id'] : $userId = "";

$cartFarmApp=[];
if (isset($_COOKIE["cartFarmApp"])) {
    $json = $_COOKIE["cartFarmApp"];
    $cartFarmApp = json_decode($json, true);
}


$name =       clean($_POST['name'] ?? "");
$email =      clean($_POST['email'] ?? "");
$address =    clean($_POST['address'] ?? "");
$phone =      clean($_POST['phone'] ?? "");
$orderCode =  clean($_POST['orderCode'] ?? "");
$note =       clean($_POST['note'] ?? "");
$total =      clean($_POST['total'] ?? "");

if ($orderCode == "") {
    echo "Vui lòng nhập mã xác nhận";
} else {
    if ($orderCode == $authenticationOrder) {
        $app->create('orders', [
            'code' => $orderCode,
            'fullname' => $name,
            'phone' => $phone,
            'address' => $address,
            'user_id' => $userId,
            'note'     => $note, 
            'total'     => $total 
        ]);
        $order = $app->getOne('orders', ['code' => $orderCode]);
        $orderId = $order['id'];
        $products=$app->get('products');
        foreach ($products as $product) {
            foreach ($cartFarmApp as $cart) {
                if ($product['id'] == $cart['product_id'] && $cart['num'] > 0) {
                    $unit_price = $product['price_output']-($product['price_output']*$product['product_discount']/100);
                    $app->create('order_detail',[
                        'product_id' => $product['id'],
                        'product_image' => $product['image'],
                        'product_name' => $product['name'],
                        'order_id'  => $orderId,
                        'order_code'  => $orderCode,
                        'amount'       => $cart['num'],
                        'unit_price'     => $unit_price
                    ]);
                    $app->update('products',['sales'=>+$cart['num']],['id'=>$product['id']]);
                   
                }
            }
        }
        setcookie('cartFarmApp',json_encode($cartFarmApp),time()+0,'/');
        echo 202;
        
    } else {
        echo "mã xác nhận không chính xác";
    }
}
