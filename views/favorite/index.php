<section class="info-page">
    <h2>Sản Phẩm yêu thích</h2>
    <p><a href="/">Trang chủ</a><span>/</span> <span class="current-page">Sản phẩm yêu thích</span></p>
</section>
<div class="grid_columns">
    <?php
    if ($favorites == []) {
        echo "<div class='mesage-emty'>Không có sản phẩm trong danh mục này</div>";
    }
    ?>
</div>
<div class="grid_columns favorite-page">
    <?php
    foreach ($favorites as $item) {
        $statusDiscount = $item['product_discount'] == 0 ? "no" : "";
        echo '
                <div class="product-cart">
                    <a href="?page=detail&id=' . $item['id'] . '">
                        <div class="cart-img">
                        <img src="./admin/upload/' . $item['image'] . '" alt="">
                        </div>
                        <div class="cart-txt">
                        <span class="product-name">' . $item['name'] . '</span>
                        <div class="price">
                            <span class="price-new">' . formatMoney($item['price_output'] -
            ($item['price_output'] * $item['product_discount'] / 100)) . '</span>
                            <span class="price-old ' . $statusDiscount . '">' . formatMoney($item['price_output']) . '</span>
                        </div>
                        </div>
                        <div class="discount ' . $statusDiscount . '" >' . $item['product_discount'] . '%</div>
                    </a>
                    <div class="option">
                        <div class="setLikeList"><i class="bx bx-heart"></i></div>
                        <div class="setAddingCart"><i class="bx bxs-cart"></i></i></div>
                    </div>
                </div>
                    ';
    }
    ?>
</div>