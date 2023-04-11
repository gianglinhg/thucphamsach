    <section class="info-page">
      <h2>Tất cả sản phẩm</h2>
      <p><a href="/">Trang chủ</a><span>/</span> <span class="current-page">Tất cả sản phẩm</span></p>
    </section>
    <div class="grid_columns">
      <main>
        <div class="product__page">
          <div class="product__categorys l-3">
            <div class="product__categorys--category">
              <h3 class="title">DANH MỤC SẢN PHẨM</h3>
              <div class="category--menu side-menu">
                <?php
                     foreach ($category as $item ) {
                         echo '
                              <div class="category--menu__links link">
                                <a href="?page=product&category='.$item['id_cate'].'" class="category--menu__link">'.$item['title'].'</a>
                              </div>
                              ';
                     }
                ?>
              </div>
            </div>
            <div class="product__categorys--filter">
              <h3 class="title">DANH MỤC SẢN PHẨM</h3>
              <div class="filter--items side-menu">
                <a class="filter__title link">
                  <h3>Giá sản phẩm</h3>
                  <div class="dropdown_button"></div>
                </a>
                <a class="filter--item link" href="">
                  <input type="checkbox" class="checkbox" name="" id="" />Giá
                  dưới 100.000đ
                </a>
                <a class="filter--item link" href="">
                  <input type="checkbox" class="checkbox" name="sort-price" id="" />100.000đ - 200.000đ
                </a>
                <a class="filter--item link" href="">
                  <input type="checkbox" class="checkbox" name="sort-price" id="" />200.000đ - 300.000đ
                </a>
                <a class="filter--item link" href="">
                  <input type="checkbox" class="checkbox" name="sort-price" id="" />300.000đ - 500.000đ
                </a>
              </div>
            </div>
          </div>
          <div class="product__menu l-9">
            <div class="product__menu--sort">
              <p><i class="bx bx-sort-a-z"></i>Xếp theo</p>
              <a href="<?php echo $url.'&sortName=asc' ?>"><input type="radio" name="sort" id="" />Tên A-Z</a>
              <a href="<?php echo $url.'&sortName=desc' ?>"><input type="radio" name="sort" id="" />Tên Z-A</a>
              <a href="<?php echo $url.'&sortPrice=asc' ?>"><input type="radio" name="sort" id="" />Giá thấp đến cao</a>
              <a href="<?php echo $url.'&sortPrice=desc' ?>"><input type="radio" name="sort" id="" />Giá cao đến thấp</a>
            </div>
            <!-- PHẦN HIỂN THỊ THÔNG BÁO KHI KHÔNG CÓ SẢN PHẨM -->
                 <?php
                    if($products==[]){
                      echo"<div class='mesage-emty'>Không có sản phẩm trong danh mục này</div>";
                    }
                 ?>
            <!-- PHẦN HIỂN THỊ THÔNG BÁO KHI KHÔNG CÓ SẢN PHẨM -->
            <div class="product__menu--items">
              <!--  Phần render danh sách sản phẩm -->
              <?php
                  foreach ($products as $item) {
                    $statusDiscount=$item['product_discount']==0? "no":"";
                    echo '
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
                    ';

                  }
              ?>
            </div>
            <div class="pagination">
                <?php 
                    // echo '<a class="pagination-item" href="'.$url.'&p='.($curentP-1).'">Previous</a>';
                    // $isFist = $isLast = false;
                    // $avaliblepage = [1, $curentP - 1, $curentP, $curentP + 1, $numberP];
                    // for ($i = 1; $i <= $numberP; $i++) {
                    //     if (!in_array($i, $avaliblepage)) {
                    //         if (!$isFist && $curentP > 3) {
                    //             echo ' <a class="pagination-item" href="#">...</a>';
                    //             $isFist = true;
                    //         }
                    //         if (!$isLast && $i > ($curentP + 1)) {
                    //             echo ' <a class="pagination-item" href="#">...</a>';
                    //             $isLast = true;
                    //         }
                    //         continue;
                    //     }
                    //     if ($i == $curentP) {
                    //         echo ' <a class="pagination-item active" href="#">' . $i . '</a>';
                    //     } else {
                    //         echo ' <a class="pagination-item" href="'.$url.'&p='.$i.'">' . $i . '</a>';
                    //     }
                    // }
                    // echo '<a class="pagination-item" href="'.$url.'&p='.($curentP+1).'">Next</a>';
                    panigation($numberP,$curentP,$url)

                ?>
                
            </div>
          </div>
        </div>
      </main>
    </div>