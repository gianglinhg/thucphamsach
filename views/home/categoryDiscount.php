<div class="discont-area">
    <div class="grid_columns category-discount">
        <div class="category-discount__title">
            <div class="box">
                <!-- <img src="https://bizweb.dktcdn.net/thumb/large/100/431/449/products/sp6-2.jpg?v=1625548896893" alt=""> -->
                🔥
                <h4>ƯU ĐÃI TRONG TUẦN</h4>
            </div>
        </div>
        <div class="category-discount__slide">
            <div class="swiper mySwipera discount__slide">
                <div class="swiper-wrapper">
                    <!-- Phần render ra danh sách sản ph -->
                    <?php
                    foreach ($discountList as $item) {
                        $statusDiscount=$item['product_discount']==0? "no":"";
                        echo '
                            <div class="swiper-slide">
                            <div class="product-cart">
                                <a href="?page=detail&id=' . $item['id'] . '">
                                    <div class="cart-img">
                                        <img src="./admin/upload/' . $item['image'] . '" alt="">
                                    </div>
                                    <div class="cart-txt">
                                        <span class="product-name">' . $item['name'] . '</span>
                                        <div class="price">
                                            <span class="price-new">' . formatMoney($item['price_output']-
                                                                                ($item['price_output']*$item['product_discount']/100)) . '</span>
                                            <span class="price-old '.$statusDiscount.'">' . formatMoney($item['price_output']) . '</span>
                                        </div>
                                    </div>
                                    <div class="discount">' . $item['product_discount'] . '%</div>
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
            </div>
        </div>
    </div>
    <script script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var discountSlide = new Swiper(".discount__slide", {
            slidesPerView: 1,
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
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 10,
                },
            },
        });
    </script>


</div>