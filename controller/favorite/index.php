
<?php
//    require './model/baseModel.php';
   $app= new BaseModel();
   
   if($userStatus=="active"){
      $favorites=$app->getFavorite($user['user_id']);
      include './views/favorite/index.php';

   }
   else{
      include './views/login/index.php';
   }

?>