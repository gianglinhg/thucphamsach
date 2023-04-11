<?php
include_once('model/home.php');
$act='index';
if(isset($_GET['act'])){
  $act=$_GET['act'];
}
switch ($act) {
  case 'index':
    
    include 'view/home/index.php';
    break;
case 'thongke':
    $count=count_all_products();
    include 'view/home/thongke.php';
    break;
  default:
    // code...
    break;
}
?>
