<?php
session_start();
$page="";
if(isset($_GET['page'])==true) $page=trim(strip_tags($_GET['page']));
require_once "model/database.php";
?>
<?php 
if(isset($_SESSION['login_user'])==false)
{$_SESSION['thongbao']="Bạn chưa đăng nhập";
    
    exit();
}
?>