
<?php

include_once 'model/comments_products.php';

$act='index';
if(isset($_GET['act'])){
  $act=$_GET['act'];
}
$messge='';
switch ($act) {
  case 'index':
    $selectAll=false;

   $name=name_sp();
    $products=getAllComments(0);//get data from catalog table
    include 'view/comments_products/index.php';
    break;
  case 'selectAll':
    $products=getAllProducts();//get data from catalog table
    $selectAll=true;
    include 'view/comment_products/index.php';
    break;


  case 'addnew':
    include 'view/comment_products/addnew.php';
    break;
  case 'edit':
    $id=$_GET['id'];
    
    $edit=getProductByID($id);
    include 'view/comment_products/edit.php';
    break;
 
case 'insert':

  if(isset($_POST['btn'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $slug=$_POST['slug'];
    $mota=$_POST['mota'];
    $cate_id=$_POST['category_id'];
    $file_name=$_FILES['img']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
   
      addNewProducts($id,$name,$file_name,$price,$cate_id,$slug,$mota);
      
      $messge='Thêm mới thành công';
   
   }
include 'view/products/addnew.php';

  break;


    
    
  case 'update':
    //lay data tu date_create_from_format
    if(isset($_POST['btn'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $file=$_FILES['img']['name'];
    $file_name=$file;
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
  
      updateProducts($id,$name,$file_name,$price);
      
      $messge='Thêm mới thành công';
  }
    
    break;
  case 'delete':
    //lay data tu date_create_from_format
   
    if(isset($_GET['id']))
    {
      $id=$_GET['id'];
      deleteProducts($id);
      $messge='Update thành công!!';
    }
    else {
      $chonX=$_POST['chonX'];
      for($i=0;$i<count($chonX);$i++){
        deleteProducts($chonX[$i]);
        
      }
     


    }   
    header('location:index.php?page=products');
    ob_end_flush();


    break;
  default:
    // code...
    break;
}
?>
