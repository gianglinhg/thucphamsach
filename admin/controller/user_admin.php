<?php

include 'model/database_admin.php';
$act='index';
if(isset($_GET['act'])){
  $act=$_GET['act'];
}
$messge='';
switch ($act) {
    case 'index':
    $selectAll=false;
    $products=getAllUser();
    include 'view/user_admin/index.php';
    break;
    case 'selectAll':
    $products=getAllUser();
    $selectAll=true;
    include 'view/user_admin/index.php';
    break;
    case 'addnew':
    include 'view/user_admin/addnew.php';
    break;
    case 'edit':
    $id=$_GET['id'];
    $edit=getUserByID($id);
    include 'view/user_admin/edit.php';
    break;
    case 'insert':
      if(isset($_POST['btn'])){
      $id=$_POST['id'];
      $fullname=$_POST['fullname'];
      $file_name = $_FILES['img']['name'];
      $target_dir = "upload/";
      $target_file = $target_dir . basename($_FILES["img"]["name"]);
      if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["img"]["name"]) . " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
        $error=array();
        if(empty($_POST['name'])){
          $error['name']='Vui lòng nhập tên đăng nhập';
        }elseif(checkUserName($_POST['name'])==true){
          $error['name']='Tên đăng nhập đã tồn tại';
        }
        else{
          $username=$_POST['name'];
        }
        
        if(empty($_POST['password'])){
          $error['password']='Vui lòng nhập mật khẩu';
        }
        
        elseif(empty($_POST['repassword'])){
          $error['repassword']='Vui lòng nhập lại mật khẩu';
        }
        // kiểm tra mật khẩu có đúng định dạng hay không
       elseif(!preg_match('/^[a-zA-Z0-9]{6,32}$/',$_POST['repassword'])){
          $error['repassword']='Mật khẩu phải có độ dài từ 6-32 ký tự';
        }
        // kiểm tra mật khẩu có giống nhau hay không
        elseif($_POST['password']!=$_POST['repassword']){
          $error['repassword']='Mật khẩu không giống nhau';
        }
        else{
          $pass=$_POST['password'];
        }
      
        
        if(!$error){
         
        addNewUser($id,$username,$pass,$fullname,$file_name);
        
         
          
        }
       
    }
    include 'view/user_admin/addnew.php';
break;
case 'update':

  if(isset($_POST['btn'])){
    $id=$_POST['id'];
  $name=$_POST['fullname'];
  $level=$_POST['level'];
  $file=$_FILES['img']['name'];
  $file_name=$file;
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["img"]["name"]);
  if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
      echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
  } else {
      echo "Sorry, there was an error uploading your file.";
  }
    $error=array();
    if(empty($_POST['username'])){
      $error['username']='Vui lòng nhập tên đăng nhập';
    }
    else{
      $username=$_POST['username'];
    }
    
   
  
    
    if(!$error){
     
      editUser($id,$name,$file_name,$username,$level);
     
     }
    
}
header('location:index.php?page=user_admin&act=edit&id='.$id);
break;
















case 'delete':
    //lay data tu date_create_from_format

   
    if(isset($_GET['id']))
    {
      // nếu tài khoản đang đăng nhập bị xoá thì chuyển về trang đăng nhập
      if($_GET['id']==$_SESSION['login_id']){
        unset($_SESSION['login_id']);
        unset($_SESSION['login_user']);
        deleteUser($_GET['id']);
      
      }
      else{
        $id=$_GET['id'];
        deleteUser($id);
        header('location:index.php?page=user_admin');
      }
    }
    else {
      $chonX=$_POST['chonX'];
      for($i=0;$i<count($chonX);$i++){
        deleteUser($chonX[$i]);
        
      }
     


    }   
    header('location:index.php?page=user_admin');
    ob_end_flush();


    break;
  default:
    // code...
    break;
}
?>