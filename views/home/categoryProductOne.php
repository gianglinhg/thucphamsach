<div class="section-category grid_columns ">
    <div class="category__selection">
        <!-- Lựa chọn danh mục -->
        <div class="shop-all traicay">
            <div class="shop-all-max">
                <div class="shop-box">
                    <h2>
                        <a href="">Sản phẩm mới</a> 
                    </h2>
                    <div class="shop">
                        <div class="shop-selection">
                            <ul>
                                <li><a href="#"><span class="icon"><i class='bx bx-radio-circle'></i></span><span class="text-span">Trái cây</span></a></li>
                                <li><a href="#"><span class="icon"><i class='bx bx-radio-circle'></i></span><span class="text-span">Thịt tươi</span></a></li>
                                <li><a href="#"><span class="icon"><i class='bx bx-radio-circle'></i></span><span class="text-span">Hải sản</span> </a></li>
                                <li><a href="#"><span class="icon"><i class='bx bx-radio-circle'></i></span><span class="text-span">Rau củ</span> </a></li>
                                <li><a href="#"><span class="icon"><i class='bx bx-radio-circle'></i></span><span class="text-span">Thực phẩm khô</span> </a></li>
                            </ul>
                        </div>
                        <div class="shop-shopping">
                            <a href="" title="Mua sắm nào">Mua sắm ngay bây giờ!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="swiper category__slide">
        <div class="swiper-wrapper">
            <!-- Phần render ra danh sách sản ph -->
                <?php
                     foreach ($latestProduct as $item) {
                        $statusDiscount=$item['product_discount']==0? "no":"";
                        echo '
                        <div class="swiper-slide">
                            <div class="product-cart">
                            <a href="?page=detail&id='.$item['id'].'">
                                <div class="cart-img">
                                <img src="./admin/upload/'.$item['image'].'" alt="">
                                </div>
                                <div class="cart-txt">
                                <span class="product-name">'.$item['name'].'</span>
                                <div class="price">
                                <span class="price-new">' . formatMoney($item['price_output']-
                                                                        ($item['price_output']*$item['product_discount']/100)) . '</span>
                                                    <span class="price-old '.$statusDiscount.'">' . formatMoney($item['price_output']) . '</span>
                                </div>
                                </div>
                                <div class="discount '.$statusDiscount.'" >'.$item['product_discount'].'%</div>
                            </a>
                            <div class="option">
                                <div class="setLikeList" onclick="addToFavorite('.$item['id'].','.$userId.')"><i class="bx bx-heart"></i></div>
                                <div class="setAddingCart"><i class="bx bxs-cart"></i></i></div>
                            </div>
                            </div>
                        </div>
                        '; 
                     }
                ?>
            </div>
        </div>
    </div>
</div>
<script script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".category__slide", {
        slidesPerView: 2,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
        },
    });
</script>