
<?php
//    require './model/baseModel.php';
   $app= new BaseModel();
   $orderCode=$_GET['order']??"";
   $order=$app->getOne('orders',['user_id'=>$userId,'code'=>$orderCode]);
   print_r($order);
   $orderDetail=$app->get('order_detail',['order_code'=>$orderCode]);
   include './views/success/index.php';

?>