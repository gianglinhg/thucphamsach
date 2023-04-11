    <section class="info-page">
      <h2>Tất cả sản phẩm</h2>
      <p><a href="/">Trang chủ</a><span>/</span> <span class="current-page">Tất cả sản phẩm</span></p>
    </section>
      <main>
        <div class="cart">
          <h1>Giỏ hàng <span>(n sản phẩm)</span></h1>
          <div class="items">
              <!-- PHẦN HIỂN THỊ THÔNG BÁO KHI KHÔNG CÓ SẢN PHẨM -->
              <?php
                    if($smallCartList==[]){
                      echo"<div class='mesage-emty'>Không có sản phẩm trong danh mục này</div>";
                    }
                 ?>
            <!-- PHẦN HIỂN THỊ THÔNG BÁO KHI KHÔNG CÓ SẢN PHẨM -->
              <?php
              $total=0;
              foreach ($smallCartList as $item) {
                    $num=0; 
                    for ($i=0; $i < count($cartFarmApp) ; $i++) { 
                        if($cartFarmApp[$i]['product_id']==$item['id'])
                        $num=$cartFarmApp[$i]['num'];
                      }
                    if($num>0){
                      $discount=$item['product_discount'];
                      $productPrice=$item['price_output'];
                      $curentprice=($productPrice-($productPrice*$discount/100));
                      $total+=$num*$curentprice;
                       echo '
                            <div class="item">
                            <img class="item__image l-3" src="./admin/upload/'.$item['image'].'" alt="" />
                            <div class="item__info l-9">
                                <div class="item__info--description">
                                <a href="" class="name">'.$item['name'].'</a>
                                <p class="brand">Thương hiệu: Đang cập nhật</p>
                                <p class="delete">
                                    <a href="">Xóa</a>
                                </p>
                                </div>
                                <div class="item__info--price price">
                                '.formatMoney($curentprice).'
                                </div>
                                <div class="item__info--quantity">
                                <input
                                    onclick="cartActionLess('.$item['id'].',-1)"
                                    class="action-button minus"
                                    type="button"
                                    value="-"
                                    id="moins"
                                    onclick="minus()"
                                />
                                <input
                                    class="output"
                                    type="text"
                                    size="25"
                                    value="'.$num.'"
                                    id="count"
                                />
                                <input
                                    onclick="cartActionPlus('.$item['id'].',1)"
                                    class="action-button minus"
                                    type="button"
                                    value="+"
                                    id="plus"
                                    onclick="plus()"
                                />
                                </div>
                            </div>
                      </div>
                    
                    ';
                    }
                  # code...
              }
              ?>
            
          </div>
          <div class="total">
            <div class="l-6">
              <a href="" class="return-button">Tiếp tục mua hàng</a>
            </div>
            <div class="l-6">
              <div class="fee">
                
              </div>
              <div class="fee">
                <p class="total-info-price">
                  <span>Thành tiền</span>
                  <strong class="total-price">
                    <?php echo formatMoney($total)  ?> <span class="underline">đ</span></strong
                  >
                </p>
              </div>
              <a class="purchase-button" href="?page=order">THANH TOÁN NGAY</a>
            </div>
          </div>
        </div>
      </main>

<script>
 const cartActionPlus=($productId,amount)=>{
    addToCart($productId,amount)
    location.reload()
  }
  const cartActionLess=($productId,amount)=>{
    addToCart($productId,amount)
    location.reload()
  }
</script>