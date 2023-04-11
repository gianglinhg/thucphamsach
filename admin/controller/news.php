
<?php

include_once 'model/news.php';

$act = 'index';
if (isset($_GET['act'])) {
  $act = $_GET['act'];
}
$messge = '';
switch ($act) {
  case 'index':
    $selectAll = false;
    $news = getAllNews(); //get data from catalog table
    include 'view/news/index.php';
    break;
  case 'selectAll':
    $news = getAllNews(); //get data from catalog table
    $selectAll = true;
    include 'view/news/index.php';
    break;


  case 'addnews':
    if(empty($_POST['date'])){
      $error['date']='Vui lòng nhập ngày đăng';
    }else{
      $date=date('Y-m-d',strtotime($_POST['date']));
    }
    if(!$error){
      addNewNews($id,$nameNews,$file_name,$cate_id,$mota,$date);
      $messge='Thêm mới thành công';
    }
    include 'view/news/addnews.php';
    break;
  case 'edit':
    $id = $_GET['id'];

    $edit = getNewByID($id);
    include 'view/news/editnews.php';
    break;

  case 'insert':

    if (isset($_POST['btn'])) {
      $error=array();
      $id = $_POST['id'];
      if (empty($_POST['nameNews'])) {
        $error['nameNews'] = 'Vui lòng nhập tiêu đề';
      } else {
        $nameNews = $_POST['nameNews'];
      }
    
      if (empty($_POST['mota'])) {
        $error['mota'] = 'Vui lòng nhập nội dung';
      } else {
        $mota = $_POST['mota'];
      }
    
      $cate_id = $_POST['category_id'];
      $file_name = $_FILES['img']['name'];
      $target_dir = "upload/";
      $target_file = $target_dir . basename($_FILES["img"]["name"]);
      if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["img"]["name"]) . " has been uploaded.";
      } 
      if(!$error){
      addNewNews($id, $nameNews, $file_name, $cate_id, $mota);
      $messge = 'Thêm mới thành công';
    }
  }
    include 'view/news/addnews.php';

    break;




  case 'update':
    //lay data tu date_create_from_format
    if (isset($_POST['btn'])) {
      $id = $_POST['id'];
      $nameNews = $_POST['nameNews'];
      $cate = $_POST['category_id'];

      $mota = $_POST['mota'];

      $file_name = $_FILES['img']['name'];
      $target_dir = "upload/";
      $target_file = $target_dir . basename($_FILES["img"]["name"]);
      if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["img"]["name"]) . " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }





      updateNews($id, $nameNews, $file_name, $cate, $mota);
      

      $messge = 'Update thành công!!';
    }
    header('location:index.php?page=news');
    break;
  case 'delete':
    //lay data tu date_create_from_format

    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      deleteNews($id);
      $messge = 'Update thành công!!';
    } else {
      $chonX = $_POST['chonX'];
      for ($i = 0; $i < count($chonX); $i++) {
        deleteNews($chonX[$i]);
      }
    }
    header('location:index.php?page=news');
    ob_end_flush();


    break;
  default:
    // code...
    break;
}
?>
