<?php

  include_once 'model/info_admin.php';
 
  
  $act='index';
  if(isset($_GET['act'])){
    $act=$_GET['act'];
  }
    $messge='';
    switch ($act) {
        case 'index':
            $selectAll=false;
    
            include 'view/info_admin/index.php';
            break;
            case'edit':
            $id=$_GET['id'];
            $edit=getInfoByID($id);
            include 'view/info_admin/edit.php';
            break;
       case'update':
            if(isset($_SERVER['REQUEST_METHOD'])=='POST'){
            $id=$_POST['id'];
            $error=array();
            // cập nhật tên đăng nhập
           
            // cập nhật mật khẩu
            if(empty($_POST['password'])){
              $error['password']='Vui lòng nhập mật khẩu';
            }
            elseif(empty($_POST['repassword'])){
              $error['repassword']='Vui lòng nhập lại mật khẩu';
            }
            // kiểm tra mật khẩu có trùng khớp hay không
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
              changePass($id,$pass);
              // hiện thông báo alert
              echo '<script>alert("Cập nhật thành công")</script>';
             
            }
            
         
            }

            include 'view/info_admin/edit.php';
            break;
            case'delete':
              // tự xoá  tài khoản
              $id=$_GET['id'];
          
              // hiện thông báo alert
              echo '<script>alert("Xoá thành công")</script>';
              // chuyển về trang login
              header('location:index.php?mod=info_admin&act=index');
            
              break;
        default:
            # code...
            break;
    }
