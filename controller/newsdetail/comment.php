<?php
   include '../../core/db.php';
   require '../../model/baseModel.php';
   $app = new BaseModel();

   $userId=$_POST['userId']??"";
   $newsId=$_POST['newsId']??"";
   $content=$_POST['contentComment']??"";
   if($userId!=""&&$newsId!=""&&$content!=""){
     $app->create('comments',[
                               'user_id'=>$userId,
                               'news_id'=>$newsId,
                               'content'=>$content
    ]);
   }
   
   
?>