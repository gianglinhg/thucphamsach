
<?php
include_once 'model/order.php';
include_once 'model/users.php';
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
    $order = getAllOrder(); //get data from catalog table
    include 'view/order/index.php';
    break;
  case 'selectAll':
    $category = getAllCategories(); //get data from catalog table
    $selectAll = true;
    include 'view/category_products/index.php';
    break;


  




  case 'detail':
    $id = $_GET['id'];
    $conn=new mysqli('localhost','root','','farmapp3');
    
     $order=mysqli_query( $conn,"select orders.id as orders_id,orders.fullname,orders.stat,orders.address,orders.phone,order_detail.id,order_detail.product_id,order_detail.total as price_order,order_detail.amount as qty_order,order_detail.id as detail_id,
     products.name as product_name,products.price_output as price,products.image as product_img
     from orders
     INNER JOIN order_detail ON orders.id = order_detail.order_id
     INNER JOIN products ON products.id = order_detail.product_id
    
     where orders.id='$id'");
     $order=mysqli_fetch_all($order,MYSQLI_ASSOC);
    include 'view/order/detail.php';
    break;
  case 'update_status':
   // cập nhật trạng thái đơn hàng
   if (isset($_POST['btn'])) {
    $id = $_POST['orders_id'];
    $status = $_POST['status'];
    updateOrder($id,$status);
    // hiện thị trạng thái đã xác nhận

    $messge = 'Update thành công!!';
  }
 header('location:index.php?page=order');

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
    header('location:index.php?page=order');
    ob_end_flush();


    break;










  default:
    // code...
    break;
}
?>