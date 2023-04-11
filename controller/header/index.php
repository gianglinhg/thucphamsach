
<?php
   $app= new BaseModel();
   $category=$home->get('category');
   $token=$_COOKIE['tokenUserFarm']??"";
   $userStatus="";
   $cartStatus='active';
   $userId="";
   $Countfavorite=0;
   $user=[];
   if($token!=""){
       $user=$app->getOne('users',['token'=>$token]);
       if($user!=[]){
          $userStatus="active";
          $userId=$user['user_id']??"";
          $userFavorite=$app->get('favorite',['user_id'=>$user['user_id']]);
          $Countfavorite=count($userFavorite);
       }
   }
?>