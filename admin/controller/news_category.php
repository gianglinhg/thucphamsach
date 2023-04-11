
<?php
include_once 'model/news.php';
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
    $category = getAllCategorieNews(); //get data from catalog table
    include 'view/category_news/index.php';
    break;
  case 'selectAll':
    $category = getAllCategorieNews(); //get data from catalog table
    $selectAll = true;
    include 'view/category_news/index.php';
    break;


  case 'addnews':
    include 'view/category_news/addnews.php';
    break;
  case 'edit':
    $id = $_GET['id'];

    $edit = getCateNewsByID($id);
    include 'view/category_news/editnews.php';
    break;

  case 'insert':

    if (isset($_POST['btn'])) {
      $id = $_POST['id'];
      $nameNews = $_POST['nameNews'];
      $sql = "insert into category_news(id_news,title) values ('$id','$nameNews')";
      execute($sql);
      $messge = 'Thêm mới thành công';
    }


    include 'view/category_news/addnews.php';

    break;

  case 'update':
    //lay data tu date_create_from_format
   
      $id = $_POST['id'];
      $nameNews = $_POST['name'];
     updateCategoryNews($id,$nameNews);
      $messge = 'Cập nhật thành công';
      header('location: index.php?page=news_category');
    
  break;

    //lay data tu date_create_from_format

  case 'delete':
    //lay data tu date_create_from_format

    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      deleteCateNews($id);
      $messge = 'Update thành công!!';
    } else {
      $chonX = $_POST['chonX'];
      for ($i = 0; $i < count($chonX); $i++) {
        deleteCateNews($chonX[$i]);
      }
    }

    header('location:index.php?page=news_category');
    ob_end_flush();


    break;


    break;
  default:
    // code...
    break;
}
?>
