<?php

include 'model/users.php';
$act='index';
if(isset($_GET['act'])){
  $act=$_GET['act'];
}
$messge='';
$messge='';
switch ($act) {
  case 'index':
    $selectAll=false;
    $products=getAllUsers();//get data from catalog table
    include 'view/users/index.php';
    break;
  case 'selectAll':
    $products=getAllUsers();//get data from catalog table
    $selectAll=true;
    include 'view/users/index.php';
    break;
    case 'delete':
        //lay data tu date_create_from_format
    
       
        if(isset($_GET['id']))
        {
          $id=$_GET['id'];
        
        
          deleteUser($id);
          $messge='Update thành công!!';
        }
        else {
          $chonX=$_POST['chonX'];
          for($i=0;$i<count($chonX);$i++){
            deleteUser($chonX[$i]);
            
          }
         
    
    
        }   
        header('location:index.php?page=users');
        ob_end_flush();
    
    
        break;
      default:
        // code...
        break;
    }
?>