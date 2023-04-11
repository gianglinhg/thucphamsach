
<?php
    include '../../core/db.php';
    require '../../model/baseModel.php';
    $app = new BaseModel();
   $passOld= clean($_POST['passOld'])??"";
   $passNew= clean($_POST['passNew'])??"";
   $token=  clean($_POST['token'])??"";
   
   if($passNew!=""&&$token!=""&&$passOld!=""){
      $pwOldSecurity=$app->getPwdSecurity($passOld);
      $pwNewSecurity=$app->getPwdSecurity($passNew);
      $user=$app->getOne('users',['token'=>$token]);
      if($user['password']==$pwOldSecurity){
         $app->update('users',['password'=>$pwNewSecurity],['token'=>$token]);
         echo 202;
      }
      else{
          echo 'Mật khẩu không chính xác';
      }
   }
?>