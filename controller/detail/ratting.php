<?php
  include '../../core/db.php';
  require '../../model/baseModel.php';
  $app = new BaseModel();

  $userId=$_POST['userId']??"";
  $productId=$_POST['productId']??"";
  $rate=$_POST['valueRate']??"";
  $reason=$_POST['reasonRate']??"";

  if($userId!=""&&$productId!=""&&$rate!=""){
      $isCheckRated=$app->getOne('product_rate',[
                                                  'product_id'=>$productId,
                                                  'user_id'=>$userId
                                                ]);
        if($isCheckRated==[]){
              $app->create('product_rate',[
                                            'rate'=>$rate,
                                            'reason'=>$reason,
                                            'user_id'=>$userId,
                                            'product_id'=>$productId
                                            ]);
        }
        else{
            $app->update('product_rate',[
                                            'rate'=>$rate,
                                            'reason'=>$reason
                                        ],
                                        [
                                            'user_id'=>$userId,
                                            'product_id'=>$productId
                                        ]);
        }
    
  }
  else{
      'chưa đủ điều kiện dánh giá';
  }

?>