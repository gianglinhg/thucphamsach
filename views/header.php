<?php
include './controller/cart/smallCart.php';
include './controller/header/index.php';

?>
<div class="cart-area active">
    <div class="layer"></div>
    <div class="cart-sideBar">
        <div class="cart-header">
            <span>Giỏ Hàng</span>
            <i class='bx bx-x cart-close'></i>
        </div>
        <ul class="cart-list">

            <?php
            $total = 0;
            foreach ($smallCartList as $item) {
                $num = 0;
                for ($i = 0; $i < count($cartFarmApp); $i++) {
                    if ($cartFarmApp[$i]['product_id'] == $item['id'])
                        $num = $cartFarmApp[$i]['num'];
                }
                $total += $num * $item['price_output'];
                echo '
                    <div class="cart-item">
                        <img src="./admin/upload/'.$item['image'].'" alt="">
                        <div class="info">
                            <div class="product-name">' . $item['name'] . '</div>
                            <div class="product-amount">Số lượng</div>
                            <div class="setting-amount">
                                <button class="btn" onclick="addToCart('.$item['id'].',-1)">-</button>
                                <input type="text" disabled value="' . $num . '">
                                <button class="btn" onclick="addToCart('.$item['id'].',1)">+</button>
                            </div>
                        </div>
                        <div class="price-remove">
                            <div class="price"> ' . formatMoney($item['price_output']) . '</div>
                            <div class="cart-item_remove">Xóa sản phẩm</div>
                        </div>
                    </div>
                ';
            }

            ?>
        </ul>
        <div class="cart-sumary">
            <div class="line">
                <span>Tổng tiền</span>
                <span class="price"><?php echo formatMoney($total) ?></span>
                <!-- <span class="cart-sumary price">10000</span> -->
            </div>
            <button class="btn btn-success">Thanh toán</button>
        </div>
    </div>
</div>
<header>

    <div class="grid_columns header">
        <div class="header-menu">
            <li class="header-menu_item">
                <a href="?page=home">Trang chủ</a>
            </li>
            <li class="header-menu_item">
                <a href="?page=intro">Giới thiệu</a>
            </li>
            <li class="header-menu_item category-product-list">
                <a href="?page=product">Sản Phẩm </a>
                <div class="list">
                    <?php
                        foreach ($category as $item) {
                            echo '
                             <div class="item">
                                <a href="?page=product&category='.$item['id_cate'].'">'.$item['title'].'</a>
                             </div>
                            ';
                        }
                    ?>
                </div>
            </li>
            <li class="header-menu_item">
                <a href="?page=news">Tin Tức</a>
            </li>
            <li class="header-menu_item">
                <a href="?page=contact">Liên Hệ</a>
            </li>
        </div>
        <a href="">
            <div class="header-logo">
                <img src="https://bizweb.dktcdn.net/100/431/449/themes/834425/assets/logo.png?1642042407923" alt="">
            </div>
        </a>
        <div class="group-acount">
            <a href="">
                <div class="header-logo-reponsive">
                    <img src="https://bizweb.dktcdn.net/100/431/449/themes/834425/assets/logo.png?1642042407923" alt="">
                </div>
            </a>
            <!-- PHẦN TÌM KIẾM -->
            <div class="search-area">
                <input type="text" name="searchInput" placeholder="tìm kiếm">
                <button class="btn-search">tìm</button>
                <div class="search-result">
                    <div class="search-items">
                        
                    </div>
                    <div class="search-more">xem thêm</div>
                </div>
            </div>
            <div class="group-acount__action">
                <a href="?page=favorite" class="like">
                    <i class='bx bx-heart'></i>
                    <span><?php echo $Countfavorite?></span>
                </a>
                <div class="cart-drop">
                    <i class='bx bxs-cart cart-open'></i>
                    <span><?php echo count($smallCartList) ?></span>
                </div>
                <div class="account <?php echo $userStatus ?> ">
                    <div class="user">
                        <i class='bx bx-user-circle'></i>
                    </div>
                    <div class="acount-action not-login">
                        <a href="?page=login" class="acount-action--item">
                            đăng nhập
                        </a>
                        <a href="?page=register" class="acount-action--item">
                            đăng kí
                        </a>
                    </div>
                    <div class="acount-action logged">
                        <a href="?page=user" class="acount-action--item">
                            <?php echo $user['user_name'] ?>
                        </a>
                        <a href="" class="acount-action--item">
                            đăng xuất
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>

</header>

<script>
     const searchResultList=document.querySelector('.search-items')
     const btnSearchMore=document.querySelector('.search-more')
     const searchInput=document.querySelector('[name=searchInput]')
     const searchResultBox=document.querySelector('.search-result')

     const rediect=()=>{
         location.href='?page=search&q='+searchInput.value
     }
     btnSearchMore.onclick=()=>{
         rediect()
     }

     searchInput.onkeyup=()=>{
         searchResultBox.classList.add('active')
         $.post('./controller/search/search.php',
         {
            q:searchInput.value
         },
         (data)=>{
            //  console.log(data)
               let result=JSON.parse(data)
               searchResultList.innerHTML= result.map(item=>{
                    return `
                       <a href="?page=detail&id=${item.id}" class="search-item">
                            <div class="search-item__image">
                                <img src="./admin/upload/${item.image}" alt="">
                            </div>
                            <div class="search-item__info">
                                <div class="search-item__info--name">${item.name}</div>
                                <div class="search-item__info--price price">${item.price_output}</div>
                            </div>
                        </a>
                    
                    `;
                }).join('')
             

         })
     }
     searchInput.onblur=()=>{
         setTimeout(()=>{
             searchResultBox.classList.remove('active')
             searchInput.value=""
         },300)
     }

    // 

</script>