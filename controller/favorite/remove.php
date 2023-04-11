<?php
   include '../../core/db.php';
   require '../../model/baseModel.php';
   $app = new BaseModel();

   $userId=$_POST['userId']??"";
   $productId=$_POST['productId']??"";
   if($userId!=""&&$productId!=""){
     $foverite=[];
     $foverite=$app->getOne('favorite',[
                                        'user_id'=>$userId,
                                        'product_id'=>$productId
                                      ]);
    if($foverite==[]){
         
    }
    else{
      $app->deleteOne('favorite',[
                               'user_id'=>$userId,
                               'product_id'=>$productId
                                ]);
    }
    
   }
   
   
?>