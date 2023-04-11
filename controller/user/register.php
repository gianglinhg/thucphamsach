

<?php
  include '../../core/db.php';
  require '../../model/baseModel.php';
  $app = new BaseModel();

  $email=    clean($_POST['email'])??"";
  $name=     clean($_POST['name'])??"";
  $password= clean($_POST['password'])??"";
  $address=  clean($_POST['address'])??"";
  $phone=    clean($_POST['phone'])??"";

if(filter_var($email,FILTER_VALIDATE_EMAIL)){
$chekMail= $app->getOne('users',['email'=>$email]);
$checkPhone= $app->getOne('users',['phone'=>$phone]);
 if($chekMail==[]){
   if($checkPhone==[]){
     $pwSecurity=$app->getPwdSecurity($password);
     $a=$app->create('users',[
                           'user_name'=>$name,
                           'email'=>$email,
                           'phone'=>$phone,
                           'address'=>$address,
                           'password'=>$pwSecurity
                           ]);
       echo $a;
   }
   else{
     echo "số điện thoại đã được đăng ký vui lòng đăng ki bằng số điện thoại khác";
   }
 }
 else{
     echo "email đã tồn tại vui lòng đăng kí bằng email khác";
 }

}
else{
      echo "Email đăng ký chưa đúng định dạng";
}
  
?>