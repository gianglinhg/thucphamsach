

<?php

include_once 'model/products.php';

$act='index';
if(isset($_GET['act'])){
  $act=$_GET['act'];
}
$messge='';
switch ($act) {
  case 'index':
    $selectAll=false;
    $products=getAllProducts();//get data from catalog table
    include 'view/products/index.php';
    break;
  case 'selectAll':
    $products=getAllProducts();//get data from catalog table
    $selectAll=true;
    include 'view/products/index.php';
    break;


  case 'addnew':
    include 'view/products/addnew.php';
    break;
  case 'edit':
    $id=$_GET['id'];
    
    $edit=getProductByID($id);
    include 'view/products/edit.php';
    break;
 
case 'insert':
 
  if(isset($_SERVER['REQUEST_METHOD'])=='POST'){
    $id=$_POST['id'];
    
    $error=array();
    $cate_id=$_POST['category_id'];
    $file_name=$_FILES['img']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
      echo "The file " . basename($_FILES["img"]["name"]) . " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
    if(empty($_POST['name'])){
     $error['name']='Vui lòng nhập tên sản phẩm';
     
    }elseif(strlen($_POST['name'])<3){
      $error['name']='Tên sản phẩm phải lớn hơn 3 ký tự';
    }
    elseif(checkProductName($_POST['name'])==true){
      $error['name']='Tên sản phẩm đã tồn tại';
    }else{
      $name=$_POST['name'];
    }
    if(empty($_POST['price'])){
      $error['price']='Vui lòng nhập giá sản phẩm';
      
    }else{
      $price=$_POST['price'];
    }
    if(empty($_POST['slug'])){
      $error['slug']='Vui lòng nhập slug';
    }else{
      $slug=$_POST['slug'];
    }
    if(empty($_POST['mota'])){
      $error['mota']='Vui lòng nhập mô tả';
    }else{
      $mota=$_POST['mota'];
    }
    // kiểm tra ngày tháng
    if(empty($_POST['date'])){
      $error['date']='Vui lòng nhập ngày đăng';
    }else{
      $date=date('Y-m-d',strtotime($_POST['date']));
    }
    if(!$error){
      addNewProducts($id,$name,$file_name,$price,$cate_id,$slug,$mota,$date);
      $messge='Thêm mới thành công';
    }
  }
  include 'view/products/addnew.php';
  break;
  case 'update':
    //lay data tu date_create_from_format
    if(isset($_POST['btn'])){
    $error=array();
    $id=$_POST['id'];
    $sale=$_POST['sale'];
    $cate_id=$_POST['category_id'];
  
    // nếu tên sản phẩm để trống thì sẽ trở ve
  $name=$_POST['name'];
  // kiểm tra tên sản phẩm có rỗng hay không
  if(empty($_POST['name'])){
    $error['name']='Vui lòng nhập tên sản phẩm';
  }else{
    $name=$_POST['name'];
  }
  // kiểm tra giá sản phẩm có rỗng hay không
  if(empty($_POST['price'])){
    $error['price']='Vui lòng nhập giá sản phẩm';
  }else{
    $price=$_POST['price'];
  }
  if(empty($_POST['mota'])){
    $error['mota']='Vui lòng nhập mô tả';
  }
  else{
    $mota=$_POST['mota'];
  }
  
    $date=date('Y-m-d');
    $file=$_FILES['img']['name'];
    $file_name=$file;
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
  if(!$error){
      updateProducts($id,$name,$file_name,$price,$sale,$mota,$date,$cate_id);
      
      $messge='Thêm mới thành công';
  }
  }
   header('location:index.php?page=products&act=edit&id='.$id);
    
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
