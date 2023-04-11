<?php
//    require './model/baseModel.php';
   $productPage= new BaseModel();
   $product_id=$_GET['id']??"";
   $action=$_GET['action']??"";
   $url='?page=detail&id='.$product_id;
   if($product_id==""){
      header('Location: ?page=home');
   }
   else{
      $product=$productPage->getOne('products',['id'=>$product_id]);
      $sameCategory =$productPage->get('products',['category_id'=>$product['category_id']]);
      $evaluateList=$productPage->get('product_rate',['product_id'=>$product_id]);
     
      $evaluateTotal=0;
      $evaluateCenter=0;
      $myEvaluatePoint=0;
      $myEvaluateReason="";
      if( $evaluateList!=[]){
         foreach ($evaluateList as $item) {
            $evaluateTotal+=$item['rate'];
         }
         $evaluateCenter=$evaluateTotal/count($evaluateList);
         
      }
      if($userStatus=='active'){
         $myEvaluate=$productPage->getOne('product_rate',[
                                                         'user_id'=>$user['user_id'],
                                                         'product_id'=>$product_id
                                                      ]);
         if($myEvaluate!=[]){
             $myEvaluatePoint=$myEvaluate['rate'];
             $myEvaluateReason=$myEvaluate['reason'];
         }
         
      }
      $seenProduct=[];
      if(isset($_COOKIE["seenProduct"])){
         $json=$_COOKIE["seenProduct"];
         $seenProduct=json_decode($json,true);
      }
      $seenProduct[]=[
         'product_id'=>$product_id
      ];
      // setcookie('seenProduct',json_encode($seenProduct),time()+3*24*60*60,'/');
      
   }
   include './views/detail/index.php';
   
?>