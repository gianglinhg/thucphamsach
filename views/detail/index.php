<section class="info-page">
    <h2><?= $product['name'] ?></h2>
    <p><a href="">Trang chủ</a><span>/</span> <span class="current-page">Chi tiết sản phẩm</span>/ <span class="current-page"><?= $product['name'] ?></span></p>
</section>
<section class="info-product">
    <div class="grid_columns product">
        <div class="product-image" style="position: relative;">
            <div class="setLikeList" onclick="addToFavorite(<?php echo $product['id']?>,<?php echo $userId?>)" ><i class='bx bx-heart'></i></div>
            <div class="swiper mySwiper2 product ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./admin/upload/<?= $product['image'] ?>" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/431/449/products/sp6-2.jpg" />
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

        </div>
        <div class="product-detail">
            <?php $isPriceDiscount =
                                    $product['price_output']
                                   - ($product['price_output']
                                   * $product['product_discount']
                                  / 100);
            $isSaveMoney =  $product['price_output'] - $isPriceDiscount
            ?>

            <h2 class="name"> <?= $product['name'] ?> </h2>
            <div class="">
                <span class=" price price-new"><?= formatMoney($isPriceDiscount) ?></span>
                <span class="price price-old <?php $isSaveMoney == 0 ? printf('o') : '' ?>">
                      <?= formatMoney($product['price_output']) ?> 
                </span>
                <p class='save-line <?php $isSaveMoney == 0 ? printf('o') : '' ?>'> 
                         Tiết kiệm :<span class="price price-save "><?= formatMoney($isSaveMoney) ?>
                         </span> so với thị trường
                </p>
            </div>
            <!-- PHẦN ĐÁNH GIÁ SẢN PHẨM -->
            <?php
            include './views/detail/ratting.php';
            ?>
            <!-- PHẦN ĐÁNH GIÁ SẢN PHẨM -->
            <p class="inrtro-txt">
                <?= $product['summary'] ?>
            </p>
            <div class="weight">
                <label for="">Trọng lượng</label>
                <button id="weight-1" class="btn active" value="0.5">500g</button>
                <button id="weight-1" class="btn active" value="1">1kg</button>
            </div>
            <form id="form-add" method="post" action="./controller/detail/add.php">
                <label for="">Số Lượng</label>
                <div class="form-group">
                    <div class="form-amount">
                        <input type="text" hidden name="productId" value="<?php echo $product_id ?>">
                        <div class="btn btn-amount desc"><i class='bx bx-minus'></i></div>
                        <input class="input-amount" type="number" name="amount" value="1" disabled>
                        <div class="btn btn-amount add"><i class='bx bx-plus'></i></div>
                    </div>
                    <div class=" btn primary btnOrder-now">Mua Ngay</div>
                </div>
                <button type="submit" class="btn primary btn-addToCart">Thêm Vào Giỏ Hàng</button>
            </form>
        </div>
        <div class="product-certification">
            <div class="certification-icon">
                <img src="https://bizweb.dktcdn.net/100/431/449/themes/834425/assets/service_1.png" alt="">
            </div>
            <div class="certification-txt">100% tự Nhiên</div>
            <div class="certification-icon">
                <img src="https://bizweb.dktcdn.net/100/431/449/themes/834425/assets/service_2.png" alt="">
            </div>
            <div class="certification-txt">Chứng Nhận ATTP</div>
            <div class="certification-icon">
                <img src="https://bizweb.dktcdn.net/100/431/449/themes/834425/assets/service_3.png" alt="">
            </div>
            <div class="certification-txt">Luôn Luôn Tươi mới</div>
            <div class="certification-icon">
                <img src="https://bizweb.dktcdn.net/100/431/449/themes/834425/assets/service_1.png" alt="">
            </div>
            <div class="certification-txt">An toàn sức khỏe</div>
        </div>
    </div>
</section>

<!-- Xử lí Phần giới thiệu thông tin  và chính sách sản phẩm -->
<section class="tab-info-more">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs detail ">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#intro-product">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="grid_columns">
        <div class="tab-content detail">
            <div class="tab-pane container active" id="intro-product">
                <p>
                    <?= $product['content'] ?>
                </p>
            </div>
            <div class="tab-pane container fade" id="menu1">...</div>
            <div class="tab-pane container fade" id="menu2">...</div>
        </div>
    </div>
</section>
<div class="app-title">
    <a href="">Sản phẩm liên quan</a>
</div>
<section class="product-same">
    <div class="grid_columns listProduct-same">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper " id="listProduct-same">
                <?php
                foreach ($sameCategory as $item) {
                    $statusDiscount = $item['product_discount'] == 0 ? "no" : "";
                    $statusPriceOld = $item['product_discount'] == 0 ? "no" : "";
                    echo '
                        <div class="swiper-slide">
                            <div class="product-cart">
                                <a href="?page=detail&id=' . $item['id'] . '">
                                    <div class="cart-img">
                                        <img src="./admin/upload/' . $item['image'] . '"
                                            alt="">
                                    </div>
                                    <div class="cart-txt">
                                        <span class="product-name">' . $item['name'] . '</span>
                                        <div class="price">
                                            <span class="price-new">' . formatMoney($item['price_output'] -
                                                                                   ($item['price_output'] * $item['product_discount'] / 100)) . '</span>
                                            <span class="price-old ' . $statusPriceOld . '">' . formatMoney($item['price_output']) . '</span>
                                        </div>
                                    </div>
                                    <div class="discount ' . $statusDiscount . '" >' . $item['product_discount'] . '%</div>
                                </a>
                                <div class="option">
                                    <div class="setLikeList" onclick="addToFavorite('.$item['id'].','.$userId.')"><i class="bx bx-heart"></i></div>
                                    <div class="setAddingCart"><i class="bx bxs-cart"></i></i></div>
                                </div>
                            </div>
                        </div>';
                }
                ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>
<!-- Phần Hiển thị danh sách đã xem  -->
<div class="app-title">
    <a href="">Sản phẩm đã xem</a>
</div>
<section class="product-watched">
    <div class="grid_columns listProduct-same">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper " id="listProduct-watched">
                <div class="swiper-slide">
                    <!-- thẻ product -->
                    <div class="product-cart">
                        <a href="">
                            <div class="cart-img">
                                <img src="" alt="">
                            </div>
                            <div class="cart-txt">
                                <span class="product-name">Trái cam mật</span>
                                <div class="price">
                                    <span class="price-new">40000</span>
                                    <span class="price-old">50000</span>
                                </div>
                            </div>
                            <div class="discount">20%</div>
                        </a>
                        <div class="option">
                            <div class="setLikeList"><i class='bx bx-heart'></i></div>
                            <div class="setAddingCart"><i class='bx bxs-cart'></i></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>
<script>
    const formAdd = document.querySelector('#form-add')
    const productId = document.querySelector('[name=productId]').value
    const amount = formAdd.querySelector('.input-amount')
    const btnAdd = formAdd.querySelector('.btn-amount.add')
    const btnDesc = formAdd.querySelector('.btn-amount.desc')

    const btnOrderNow = formAdd.querySelector('.btnOrder-now')
    btnAdd.onclick = () => {
        amount.value++
    }
    btnDesc.onclick = () => {
        amount.value--
        if (amount.value < 0) {
            amount.value = 0
        }
    }

    
    formAdd.onsubmit = (e) => {
        e.preventDefault()
        addToCart(productId,amount.value)
        location.href = '?page=cart'
    }
    btnOrderNow.onclick = () => {
        addToCart(productId,amount.value)
        location.href = '?page=order'
    }
</script>