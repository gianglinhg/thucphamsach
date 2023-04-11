<?php
ob_start();
?>

<?php
session_start();
$page = "";
if (isset($_GET['page']) == true) $page = trim(strip_tags($_GET['page']));
require_once "model/database.php";
?>
<?php
if (isset($_SESSION['login_user']) == false) {
    $_SESSION['thongbao'] = "Bạn chưa đăng nhập";
    header("location:model/admin_login.php");
    exit();
}
?>
<?php

?>
<!DOCTYPE html>
<!-- saved from url=(0056)https://colorlib.com//polygon/adminty/default/index.html -->
<html lang="en"
    class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>The Food</title>
    <link rel="shortcut icon" href="upload/logo.jpg">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleall.css">

    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">

    <link rel="icon" href="" type="image/x-icon">

    <link href="./Adminty - Premium Admin Template by Colorlib_files/css" rel="stylesheet">

    <link rel="stylesheet" type="text/css"
        href="./Adminty - Premium Admin Template by Colorlib_files/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="./Adminty - Premium Admin Template by Colorlib_files/feather.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="./Adminty - Premium Admin Template by Colorlib_files/style.css">
    <link rel="stylesheet" type="text/css"
        href="./Adminty - Premium Admin Template by Colorlib_files/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body themebg-pattern="pattern4">



    <div id="pcoded" class="pcoded iscollapsed" nav-type="st6" theme-layout="vertical" vertical-placement="left"
        vertical-layout="wide" pcoded-device-type="desktop" vertical-nav-type="expanded" vertical-effect="shrink"
        vnavigation-view="view1" fream-type="theme1" sidebar-img="false" sidebar-img-type="img1" layout-type="light">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header iscollapsed" header-theme="theme1"
                pcoded-header-position="fixed">
                <div class="navbar-wrapper">
                    <div class="navbar-logo" logo-theme="theme1">

                        <a href="index.php" class="text-white" style="display: flex;">
                            <i class="fa-solid fa-house-chimney-user" style="font-size: 20px; margin-top:10px"></i>
                            <p style="margin-top:10px; margin-left:20px;"> Chào
                                <?php echo $_SESSION['login_user']; ?>
                            </p>
                        </a>
                        <a href="index.php?page=logout">

                        </a>
                    </div>
                    <div class="navbar-container container-fluid">

                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa-solid fa-bell"></i>
                                        <span class="badge bg-c-pink">5</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius"
                                                    src="./Adminty - Premium Admin Template by Colorlib_files/avatar-4.jpg"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">



                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius"
                                                    src="./Adminty - Premium Admin Template by Colorlib_files/avatar-3.jpg"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius"
                                                    src="./Adminty - Premium Admin Template by Colorlib_files/avatar-4.jpg"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa-solid fa-message"></i>
                                        <span class="badge bg-c-green">3</span>
                                    </div>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">

                                        <span>
                                            <?php echo $_SESSION['login_user']; ?>
                                        </span>
                                        <a href="index.php?page=logout" class="dropdown-toggle"><i
                                                class="fa-solid fa-arrow-right-from-bracket"></i></a>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                        <div class="user-box">
                            <div class="chat-inner-header">
                                <div class="back_chatBox">
                                    <div class="right-icon-control">
                                        <input type="text" class="form-control  search-text" placeholder="Search Friend"
                                            id="search-friends">
                                        <div class="form-icon">
                                            <i class="icofont icofont-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slimScrollDiv"
                                style="position: relative; overflow: hidden; width: auto; height: 857px;">
                                <div class="main-friend-list" style="overflow: hidden; width: auto; height: 857px;">
                                    <div class="media userlist-box" data-id="1" data-status="online"
                                        data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                                        title="" data-original-title="Josephin Doe">
                                        <a class="media-left"
                                            href="https://colorlib.com//polygon/adminty/default/index.html#!">
                                            <img class="media-object img-radius img-radius"
                                                src="./Adminty - Premium Admin Template by Colorlib_files/avatar-3.jpg"
                                                alt="Generic placeholder image ">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Josephin Doe</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="2" data-status="online"
                                        data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title=""
                                        data-original-title="Lary Doe">
                                        <a class="media-left"
                                            href="https://colorlib.com//polygon/adminty/default/index.html#!">
                                            <img class="media-object img-radius"
                                                src="./Adminty - Premium Admin Template by Colorlib_files/avatar-2.jpg"
                                                alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Lary Doe</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="3" data-status="online"
                                        data-username="Alice" data-toggle="tooltip" data-placement="left" title=""
                                        data-original-title="Alice">
                                        <a class="media-left"
                                            href="https://colorlib.com//polygon/adminty/default/index.html#!">
                                            <img class="media-object img-radius"
                                                src="./Adminty - Premium Admin Template by Colorlib_files/avatar-4.jpg"
                                                alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Alice</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="4" data-status="online"
                                        data-username="Alia" data-toggle="tooltip" data-placement="left" title=""
                                        data-original-title="Alia">
                                        <a class="media-left"
                                            href="https://colorlib.com//polygon/adminty/default/index.html#!">
                                            <img class="media-object img-radius"
                                                src="./Adminty - Premium Admin Template by Colorlib_files/avatar-3.jpg"
                                                alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Alia</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="5" data-status="online"
                                        data-username="Suzen" data-toggle="tooltip" data-placement="left" title=""
                                        data-original-title="Suzen">
                                        <a class="media-left"
                                            href="https://colorlib.com//polygon/adminty/default/index.html#!">
                                            <img class="media-object img-radius"
                                                src="./Adminty - Premium Admin Template by Colorlib_files/avatar-2.jpg"
                                                alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Suzen</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slimScrollBar"
                                    style="background: rgb(27, 139, 249); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;">
                                </div>
                                <div class="slimScrollRail"
                                    style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="feather icon-chevron-left"></i> Josephin Doe
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="https://colorlib.com//polygon/adminty/default/index.html#!">
                        <img class="media-object img-radius img-radius m-t-5"
                            src="./Adminty - Premium Admin Template by Colorlib_files/avatar-3.jpg"
                            alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="https://colorlib.com//polygon/adminty/default/index.html#!">
                            <img class="media-object img-radius img-radius m-t-5"
                                src="./Adminty - Premium Admin Template by Colorlib_files/avatar-4.jpg"
                                alt="Generic placeholder image">
                        </a>
                    </div>
                </div>
                <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                        <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                        <div class="form-icon">
                            <i class="feather icon-navigation"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pcoded-main-container" style="margin-top:35px;">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar" navbar-theme="theme1" active-item-theme="theme1" sub-item-theme="theme2"
                        active-item-style="style0" pcoded-navbar-position="fixed">
                        <div class="pcoded-inner-navbar main-menu mCustomScrollbar _mCS_1"
                            style="height: calc(100% - 80px);">
                            <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical_horizontal mCSB_inside"
                                style="max-height: none;" tabindex="0">
                                <div id="mCSB_1_container_wrapper"
                                    class="mCSB_container_wrapper mCS_x_hidden mCS_no_scrollbar_x">
                                    <div id="mCSB_1_container" class="mCSB_container"
                                        style="position: relative; top: -10px; left: 0px; width: 100%;" dir="ltr">
                                        <div class="pcoded-navigatio-lavel" menu-title-theme="theme5"></div>

                                        <!-- <div class="pcoded-navigatio-lavel" menu-title-theme="theme5"></div> -->
                                        <div class="button_click">
                                            <div class="accordion_a">
                                                <i class="fa-brands fa-product-hunt"></i>
                                                Quản lý sản phẩm
                                            </div>
                                            <div class="panel">
                                                <ul class="navbar-nav ">
                                                    <li class="nav-item active">
                                                        <a class="nav-link" href="index.php?page=products_category">
                                                            <i class="fa-solid fa-list"></i>
                                                            Danh mục sản phẩm</a>
                                                    </li>

                                                    <li class="nav-item active">
                                                        <a class="nav-link" href="index.php?page=products">
                                                            <i class="fa-solid fa-clipboard-list"></i>
                                                            Sản phẩm</a>
                                                    </li>
                                                    <li class="nav-item active">
                                                        <a class="nav-link" href="index.php?page=comments_products">
                                                            <i class="fa-solid fa-comment"></i>
                                                            Bình luận</a>
                                                    </li>
                                                   
                                                    <li class="nav-item active">
                                                        <a class="nav-link" href="index.php?page=comments_products">
                                                        <i class="fa-solid fa-arrow-trend-up"></i>
                                                            Thống kê</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- <div class="pcoded-navigatio-lavel" menu-title-theme="theme5"></div> -->
                                        <div class="button_click">
                                            <div class="accordion_a">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                                Quản lý đơn hàng
                                            </div>
                                            <div class="panel">
                                                <ul class="navbar-nav ">
                                                    <li class="nav-item active">
                                                        <a class="nav-link" href="index.php?page=order">
                                                        <i class="fa-solid fa-folder-open"></i>    
                                                        Đơn hàng</a>
                                                    </li>



                                                </ul>
                                            </div>
                                        </div>
                                        <!-- <div class="pcoded-navigatio-lavel" menu-title-theme="theme5"></div> -->
                                        <div class="button_click">
                                            <div class="accordion_a">
                                                <i class="fa-solid fa-newspaper"></i>
                                                Quản lý tin tức
                                            </div>
                                            <div class="panel">
                                                <ul class="navbar-nav ">
                                                    <li class="nav-item active">
                                                        <a class="nav-link" href="index.php?page=news_category">
                                                        <i class="fa-solid fa-list-ul"></i>    
                                                        Danh mục tin tức</a>
                                                    </li>

                                                    <li class="nav-item active">
                                                        <a class="nav-link" href="index.php?page=news">
                                                            <i class="fa-regular fa-file-lines"></i>
                                                            Tin tức</a>
                                                    </li>
                                                    <li class="nav-item active">
                                                        <a class="nav-link" href="index.php?page=comments_products">
                                                            <i class="fa-solid fa-comment"></i>
                                                            Bình luận</a>
                                                    </li>
                                                    <!-- <li class="nav-item">
                                                            <a class="nav-link" href="index.php?page=logout">Đăng xuất</a>
                                                        </li> -->
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- <div class="pcoded-navigatio-lavel" menu-title-theme="theme5"></div> -->
                                      

                                        <div class="button_click">
                                            <div class="accordion_a">
                                                <i class="fa-solid fa-user-gear"></i>
                                                Quản lý tài khoản
                                            </div>
                                            <div class="panel">
                                                <ul class="navbar-nav ">
                                                    <li class="nav-item active">
                                                        <a class="nav-link" href="index.php?page=info_admin">
                                                        <i class="fas fa-tools"></i>    
    
                                                        Thiết lập tài khoản</a>
                                                    </li>
                                                    <?php if ($_SESSION['login_level'] == 'Admin') { ?>
                                                    <li class="nav-item active">
                                                        <a class="nav-link" href="index.php?page=user_admin"><i class="fas fa-user-shield"></i>Quản lý tài
                                                            khoản nhân viên </a>
                                                    </li>
                                                    <?php } ?>
                                                    <li class="nav-item active">
                                                        <a class="nav-link" href="index.php?page=users"><i class="fa-solid fa-person-military-pointing"></i>Quản
                                                            lý tài khoản khách hàng</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                       
                                        <a href="index.php?page=logout">Log out</a>
                                    </div>
                                </div>
                                <div id="mCSB_1_scrollbar_vertical"
                                    class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical"
                                    style="display: block;">
                                    <div class="mCSB_draggerContainer">
                                        <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                                            style="position: absolute; min-height: 30px; display: block; height: 249px; max-height: 798px; top: 3px;">
                                            <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                        </div>
                                        <div class="mCSB_draggerRail"></div>
                                    </div>
                                </div>
                                <div id="mCSB_1_scrollbar_horizontal"
                                    class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_horizontal"
                                    style="display: none;">
                                    <div class="mCSB_draggerContainer">
                                        <div id="mCSB_1_dragger_horizontal" class="mCSB_dragger"
                                            style="position: absolute; min-width: 30px; width: 0px; left: 0px;">
                                            <div class="mCSB_dragger_bar"></div>
                                        </div>
                                        <div class="mCSB_draggerRail"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class="pcoded-content">

                        <?php
                        $page = "";
                        if (isset($_GET['page']) == true) $page = trim(strip_tags($_GET['page']));
                        require_once "model/database.php";

                        switch ($page) {
                            case 'users':
                                require_once "controller/users.php";
                                break;
                            case 'order':
                                require_once "controller/order.php";
                                break;
                            case 'info_admin':
                                include "controller/info_admin.php";
                                break;
                            case 'user_admin':
                                include "controller/user_admin.php";
                                break;
                            case 'products_category':
                                include 'controller/products_category.php';
                                break;
                            case 'products':
                                include 'controller/products.php';
                                break;
                            case 'comments_products':
                                include 'controller/comments_products.php';
                                break;
                            case 'news_category':
                                include 'controller/news_category.php';
                                break;
                            case 'news':
                                include 'controller/news.php';
                                break;
                            case 'customer':
                                include 'controller/customer.php';
                                break;
                            case 'comment':
                                include 'controller/comment.php';
                                break;
                            case 'statistic':
                                include 'controller/statistic.php';
                                break;
                            case "logout";
                                unset($_SESSION['login_id']);
                                unset($_SESSION['login_user']);

                                echo "<script>alert('Đăng xuất thành công');</script>";
                                header("location:model/admin_login.php");
                                exit();
                                break;
                            default:
                                include 'view/home/index.php';
                                break;
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


    <script type="text/javascript" async=""
        src="./Adminty - Premium Admin Template by Colorlib_files/analytics.js.tải xuống"></script>
    <script type="text/javascript" src="./Adminty - Premium Admin Template by Colorlib_files/jquery.min.js.tải xuống">
    </script>
    <script type="text/javascript"
        src="./Adminty - Premium Admin Template by Colorlib_files/jquery-ui.min.js.tải xuống"></script>
    <script type="text/javascript" src="./Adminty - Premium Admin Template by Colorlib_files/popper.min.js.tải xuống">
    </script>
    <script type="text/javascript"
        src="./Adminty - Premium Admin Template by Colorlib_files/bootstrap.min.js.tải xuống"></script>

    <script type="text/javascript"
        src="./Adminty - Premium Admin Template by Colorlib_files/jquery.slimscroll.js.tải xuống"></script>

    <script type="text/javascript" src="./Adminty - Premium Admin Template by Colorlib_files/modernizr.js.tải xuống">
    </script>

    <script type="text/javascript" src="./Adminty - Premium Admin Template by Colorlib_files/Chart.js.tải xuống">
    </script>

    <script src="./Adminty - Premium Admin Template by Colorlib_files/amcharts.js.tải xuống" type="text/javascript">
    </script>
    <script src="./Adminty - Premium Admin Template by Colorlib_files/serial.js.tải xuống" type="text/javascript">
    </script>
    <script src="./Adminty - Premium Admin Template by Colorlib_files/light.js.tải xuống" type="text/javascript">
    </script>
    <script src="./Adminty - Premium Admin Template by Colorlib_files/jquery.mCustomScrollbar.concat.min.js.tải xuống"
        type="text/javascript"></script>
    <script type="text/javascript" src="./Adminty - Premium Admin Template by Colorlib_files/SmoothScroll.js.tải xuống">
    </script>
    <script src="./Adminty - Premium Admin Template by Colorlib_files/pcoded.min.js.tải xuống" type="text/javascript">
    </script>

    <script src="./Adminty - Premium Admin Template by Colorlib_files/vartical-layout.min.js.tải xuống"
        type="text/javascript"></script>
    <script type="text/javascript"
        src="./Adminty - Premium Admin Template by Colorlib_files/custom-dashboard.js.tải xuống"></script>
    <script type="text/javascript" src="./Adminty - Premium Admin Template by Colorlib_files/script.min.js.tải xuống">
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>
    <script async="" src="./Adminty - Premium Admin Template by Colorlib_files/js" type="text/javascript"></script>
    <script type="text/javascript">
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script src="js/index.js"></script>


</body>
<style id="igor_ext_nofollow">
a[rel~='nofollow'],
a[rel~='sponsored'],
a[rel~='ugc'] {
    outline: .14em dotted red !important;
    outline-offset: .2em;
}

a[rel~='nofollow'] img,
a[rel~='sponsored'] img,
a[rel~='ugc'] img {
    outline: 2px dotted red !important;
    outline-offset: .2em;
}
</style>

</html>
<script>
CKEDITOR.replace('mota');
</script>