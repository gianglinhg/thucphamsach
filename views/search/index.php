<section class="info-page">
      <h2>Trang tìm kiếm sản phẩm</h2>
      <p><a href="/">Trang chủ</a><span>/</span> <span class="current-page"><?php echo $phpSearch?></span></p>
</section>
<div class="grid_columns search-page">
    <h3>tìm thấy <strong><?php echo count($result)?></strong> kết quả cho <strong>" <?php echo $phpSearch?> "</strong></h3>
    <div class="search_list">
        <?php
            if($result!=[]){
                foreach ($result as $item) {
                    $statusDiscount=$item['product_discount']==0? "no":"";
                    $statusPriceOld=$item['product_discount']==0? "no":"";
                    echo '
                            <div class="product-cart">
                            <a href="?page=detail&id=' . $item['id'] . '">
                                <div class="cart-img">
                                    <img src="./admin/upload/' . $item['image'] . '" alt="">
                                </div>
                                <div class="cart-txt">
                                    <span class="product-name">' . $item['name'] . '</span>
                                    <div class="price">
                                    <span class="price-new">' . formatMoney($item['price_output']-
                                                                           ($item['price_output']*$item['product_discount']/100)).'
                                    </span>
                                    <span class="price-old '.$statusDiscount.'">' . formatMoney($item['price_output']) . '</span>
                                    </div>
                                </div>
                                <div class="discount '.$statusPriceOld.'">'.$item['product_discount'].'</div>
                            </a>
                            <div class="option">
                                <div class="setLikeList" onclick="addToFavorite('.$item['id'].','.$userId.')" ><i class="bx bx-heart"></i></div>
                                <div class="setAddingCart"><i class="bx bxs-cart"></i></i></div>
                            </div>
                        </div>
                        ';
                }
            }
        ?>
    </div>
</div>

                          