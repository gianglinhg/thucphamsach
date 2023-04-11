<section class="info-page">
    <h2>Tất cả sản phẩm</h2>
    <p><a href="/">Trang chủ</a><span>/</span> <span class="current-page">Tất cả sản phẩm</span></p>
</section>
<div class="grid_columns  user-page">
    <div class="user-page__left">
        <div class="user-page__head">
            <h5>TRANG TAI KHOẢN</h5>
            <strong> xin chào bạn !</strong>
        </div>
        <div class="user-page__category">
            <div class="user-page__category--item">
                <a href="?page=user">Trang tin tài khoản</a>
            </div>
            <div class="user-page__category--item">
                <a href="?page=user&userpage=order">Đơn hàng của bạn</a>
            </div>
            <div class="user-page__category--item">
                <a href="?page=user&userpage=changepassword">Đổi mật khẩu </a>
            </div>
            <div class="user-page__category--item">
                <a href="?page=user&userpage=address">Sổ địa chỉ</a>
            </div>
            <div class="user-page__category--item">
                <a href="">Đăng xuất</a>
            </div>

        </div>
    </div>
    <div class="user-page__right">
        <?php
        //   include './views/user/myOrderDetail.php';
        switch ($userPage) {
           case 'index':
              include './views/user/myInfo.php';
              break;
           case 'order':
            $orderCode==""?include './views/user/myOrder.php':include './views/user/myOrderDetail.php';
            
              break;
           case 'changepassword':
              include './views/user/updatePass.php';
              break;  
           case 'address':
            include './views/user/updateInfo.php';
              break;    
           default:
              # code...
              break;
        }
        ?>
    </div>

</div>