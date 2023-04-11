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
         $a =$app->create('favorite',[
                               'user_id'=>$userId,
                               'product_id'=>$productId
                                ]);
        echo 1;
    }
    else{
        $a =$app->deleteOne('favorite',[
            'user_id'=>$userId,
            'product_id'=>$productId
             ]);
        echo 0;
    }
    
   }

?>