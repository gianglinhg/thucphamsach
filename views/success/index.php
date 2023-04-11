<div class="thankyou-page">
       <div class="grid_columns">
            <div class="logo">
                <img src="https://bizweb.dktcdn.net/100/431/449/themes/834425/assets/logo.png?1642042407923" alt="">
            </div>
            <div class="container">
               <div class="thankyou-area">
                   <div class="icon"><i class='bx bx-check'></i></div>
                   <div class="text">
                       <h3>Cảm ơn ban đã đặt hàng </h3>
                       <p>Một e mail xác nhận đã được gửi tới <span class="confirm-email"> dat@gmail.com</span></p>
                       <p>vui lòng kiểm tra email của bạn</p>
                   </div>
               </div>
               <div class="confirm-orderList">
                   <h4>Đơn hàng <span class="id-order">#<?php echo $orderCode?></span> (<span class="count-sp"><?php echo count($orderDetail)?></span>)</h4>
                <ul class="order-list">
                    <?php
                    $total=0;
                        foreach ($orderDetail as $item) {
                            $total+=$item['unit_price']*$item['amount'];
                           echo '<div class="order-item">
                                    <div class="order-item_img">
                                        <img src="./admin/upload/'.$item['product_image'].'" alt="">
                                        <span>1</span>
                                    </div>
                                    <div class="order-item_txt">
                                        <div>
                                            <p class="name">'.$item['product_name'].'</p>
                                            <span class="weight">1kg</span>
                                        </div>
                                        <div class="price">'.formatMoney($item['unit_price']).'</div>
                                    </div>
                                </div>';

                        }
                    ?>
                    
                </ul>
                <div class="orderSumary">
                    <div class="orderSumary-line tmp-fee">
                        <span class="text" >Tạm tính</span>
                        <span class="price" ><?php echo formatMoney($total)?></span>
                    </div>
                    <div class="orderSumary-line ship-fee">
                        <span class="text" >phí ship</span>
                        <span class="price" ><?php echo formatMoney($order['transport_fee'])?></span>
                    </div>
                    <div class="orderSumary-line total">
                        <span class="text" >Tổng cộng</span>
                        <span class="price" ><?php echo formatMoney($total+$order['transport_fee'])?></span>
                    </div>
                </div>
               </div>
               <div class="confirm-info">
                   <div class="confirm-line">
                       <h3>Thông tin mua hàng</h3>
                       <p class="name"><?php echo $order['fullname']?></p>
                       <p class="email"><?php echo $order['phone']?></p>
                   </div>
                    <div class="confirm-line">
                       <h3>Đia chỉ giao hàng</h3>
                       <p class="name"><?php echo $order['address']?></p>
                       <p class="email"><?php echo $order['phone']?></p>
                   </div>
                    <div class="confirm-line">
                       <h3>phương thức giao dịch</h3>
                       <p class="email">Thanh toán khi nhận hàng</p>
                   </div>
                    <div class="confirm-line">
                       <h3>Phương thức vận chuyển</h3>
                       <p class="name">Giao Tận nơi</p>
                   </div>
               </div>
            </div>
            <div class="black-area">
                <a href="?page=home"><button class="btn-main">Quay lại trang mua hàng </button></a>
                <i class='bx bx-printer' ></i>
            </div>
       </div>
    </div>