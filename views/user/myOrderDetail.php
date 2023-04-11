<div class="user-page__head">
    <h5>Chi tiết đơn hàng</h5>
</div>

<div class="myOrderDetail">
    <div class="order-status">
        <div class="order-status__payment">
             <span>Trạng thái thanh toán</span>
             <strong class="status"> Chưa thanh toán</strong>
        </div>
        <div class="order-status__trans">
             <span>Trạng thái vận chuyển</span>
             <strong class="status"> 
                 <?php 
                    if($myOrder["stat"]==0){
                        echo "chưa vận chuyển";
                    }
                    elseif($myOrder["stat"]==1){
                        echo "đang vận chuyển";
                    }
                    elseif($myOrder["stat"]==2){
                        echo "đã vận chuyển";
                    }
                    elseif($myOrder["stat"]==3){
                        echo "vận chuyển thất bại";
                    }

                 ?>
             </strong>
        </div>
    </div>
    <!-- DANH SÁCH SẢN PHẨM TRONG HÓA ĐƠN -->
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 order-info  customer">
            <div class="order-box">
               <h6 class="title">ĐỊA CHỈ GIAO HÀNG</h6>
               <div class="order-box__info">
                   <p class="name"><?= $myOrder['fullname']?></p>
                   <p class="address">Địa chỉ: <?= $myOrder['address']?></p>
                   <p class="phone">Số điện thoại: <?= $myOrder['phone']?></p>
               </div>
           </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 order-info customer">
            <div class="order-box">
               <h6 class="title">THANH TOÁN</h6>
               <div class="order-box__info">
                   <div class="payment"> Thanh toán khi giao hàng (cod)</div>
               </div>
           </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 order-info customer">
            <div class="order-box">
               <h6 class="title">GHI CHÚ</h6>
               <div class="order-box__info">
                   <div class="note"> <?php echo $myOrder['note']==""? 'không có ghi chú': $myOrder['note']?></div>
               </div>
           </div>
        </div>
        
    </div>
    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Đơn giá </th>
                <th>số lượng </th>
                <th>Tổng</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            $total=0;
                foreach ($orderDetail as $item) {
                    $total+=$item['unit_price']*$item['amount'];
                    echo '<tr>
                            <th>
                                <div class=" column_product">
                                    <a href="?page=detail&id='.$item['product_id'].'" class="image" >
                                        <img src="./admin/upload/'.$item['product_image'].'" alt="">
                                    </a>
                                    <div class="text">
                                        <p>'.$item['product_name'].'</p>
                                        <p class="price">'.formatMoney($item['unit_price']) .'</p>
                                    </div>
                                </div>
                            </th>
                            <td>'.formatMoney($item['unit_price']) .'</td>
                            <td>'.$item['amount'].'</td>
                            <td>'.formatMoney($item['unit_price']*$item['amount']) .'</td>
                        </tr>';

                }
            ?>
        </tbody>
    </table>
    <table class="table table-bordered ">
        <tbody>
            <tr>
                <td>Khuyến mãi</td>
                <td class="price">0</td>
            </tr>
            <tr>
                <td>Phí vận chuyển</td>
                <td class="price"><?= formatMoney($myOrder['transport_fee']) ?></td>
            </tr>
            <tr>
                <td>tổng</td>
                <td class="price total"><?= formatMoney($total+$myOrder['transport_fee']) ?></td>
            </tr>
        </tbody>
    </table>

</div>