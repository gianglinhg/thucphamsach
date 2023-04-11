
<?php
include_once 'model/products.php';
?>
<?php



$act = 'index';
if (isset($_GET['act'])) {
  $act = $_GET['act'];
}
$messge = '';
switch ($act) {
  case 'index':
    $selectAll = false;
    $category = getAllCategories(); //get data from catalog table
    include 'view/category_products/index.php';
    break;
  case 'selectAll':
    $category = getAllCategories(); //get data from catalog table
    $selectAll = true;
    include 'view/category_products/index.php';
    break;


  case 'addnew':
    include 'view/category_products/addnew.php';
    break;
  case 'edit':
    $id = $_GET['id'];

    $edit = getCatePro($id);
    include 'view/category_products/edit.php';
    break;

  case 'insert':

    if (isset($_POST['btn'])) {
      $id = $_POST['id'];
      $name = $_POST['name'];
      $file_name=$_FILES['img']['name'];
      $target_dir = "upload/";
      $target_file = $target_dir . basename($_FILES["img"]["name"]);
      if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
     
      $sql = "insert into category(id_cate,title,img) values ('$id','$name','$file_name')";
      execute($sql);
      $messge = 'Thêm mới thành công';
    }


    include 'view/category_products/addnew.php';

    break;




  case 'update':
    //lay data tu date_create_from_format
    if (isset($_POST['btn'])) {
      $id = $_POST['id'];
      $name = $_POST['name'];
      $file_name = $_FILES['img']['name'];
      $target_dir = "upload/";
      $target_file = $target_dir . basename($_FILES["img"]["name"]);
      if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["img"]["name"]) . " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
     updateCategory($id, $name, $file_name);
      

      $messge = 'Update thành công!!';
    }
    header('location:index.php?page=products_category');
    
    break;
  case 'delete':
    //lay data tu date_create_from_format

    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      deleteCate($id);
      $messge = 'Update thành công!!';
    } else {
      $chonX = $_POST['chonX'];
      for ($i = 0; $i < count($chonX); $i++) {
        deleteCate($chonX[$i]);
      }
    }
    header('location:index.php?page=products_category');
    ob_end_flush();


    break;
  default:
    // code...
    break;
}
?>
