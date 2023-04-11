
<?php
//    require './model/baseModel.php';
   $app= new BaseModel();
   
   if($userStatus=="active"){
      $myOrderList=$app->get('orders',['user_id'=>$user['user_id']],['createdAt'=>'desc']);
      $orderCode=$_GET['orderid']??"";
       $orderDetail=[];
      if($orderCode!=""){
         $myOrder=$app->getOne('orders',['code'=>$orderCode]);
         $orderDetail=$app->get('order_detail',['order_code'=>$orderCode]);
      }
      $userPage=$_GET['userpage']??"index" ;
      include './views/user/index.php';
   }
   else{
      include './views/login/index.php';
   }
   

?>