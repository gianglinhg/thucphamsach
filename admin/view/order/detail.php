

      <div class="card mt-3">
       
        <div class="card-body">
           <form action="index.php?page=order&act=update_status" method="post" enctype="multipart/form-data">
    
      <h5 style="margin:30px 0 30px 0; font-size:30px; font-weight:bold;">CHI TIẾT ĐƠN HÀNG</h5>
     
     <div class="form-group">
       <input type="hidden" name="orders_id" value="<?php echo $order[0]['orders_id'] ?>">
     </div>
     
      <div class="form-group"style="">
        <label for="">Mã đơn hàng</label>
     <input type="text" readonly name="id" id="id" class="form-control" placeholder="Mã đơn hàng" value="<?php echo $order[0]['id']; ?>" style="border:none;background:none;width:100%;">
     
      
     
      
     
      </div>
     
      <div class="form-group">
        <label for="">Tên người đặt</label><br>
      <input type="text" readonly name="fullname" class="form-control" placeholder="Tên người đặt" value="<?php echo $order[0]['fullname']; ?>" style="border:none;background:none;width:100%;">
      </div>
      <div class="form-group">
        <label for="">Số điện thoại</label><br>
      <input type="text" readonly name="phone" class="form-control" placeholder="Số điện thoại" value="<?php echo $order[0]['phone']; ?>" style="border:none;background:none;width:100%;">
      </div>
      <div class="form-group">
        <label for="">Địa chỉ</label><br>
      <input type="text" readonly name="address" class="form-control" placeholder="Địa chỉ" value="<?php echo $order[0]['address']; ?>" style="border:none;background:none;width:100%;">
      </div>
      <div class="form-group" style="display: flex;">
        
      
     
      
      </div>
       
        <h5 style="margin: 20px 0; font-size:25px;">Đơn hàng</h5>
      <div class="table-responsive">
                        <table class="table table-hover  table-borderless">
                            <thead>
                                <tr>
                                    
                                       <th>Hình sản phẩm</th>
                                        <th> Tên sản phẩm</th>
                                        <th>Giá tiền</th>
                                     
                                        <th>Số  lượng đặt</th>
                                      
                                      
                                      
                                       
                                </tr>
                            </thead>
                            <tbody>
                           <?php
                          
                           ?>
                            

                            </tbody>
                          <?php 
                          $totalMoney = 0;
                          $totalQty = 0;
                          foreach ($order as $row){?>
                            <tr>
                                <td><img src="upload/<?=$row['product_img']; ?>" alt="" width="100px" height="100px"></td>
                                <td><?=$row['product_name']; ?></td>
                                <td><?=$row['price']; ?></td>
                               
                                <td><?=$row['qty_order']; ?></td>
                               
                            </tr>
                            <?php 
                            $totalMoney += $row['price']*$row['qty_order'];
                            $totalQty += $row['qty_order'];

                        
                          } ?>
                        </table>
                        <div class="total">
                          <label for="">Tổng tiền:<?php echo $totalMoney; ?></label>
                          <h5></h5>
                        </div>
                        <div class="form-select">
        <label for="">Trạng thái đơn hàng</label><br>
        <input type="radio" name="status" value="0" <?php if($order[0]['stat']==0){echo "checked";} ?>> Chưa xử lý
        <input type="radio" name="status" value="1" <?php if($order[0]['stat']==1){echo "checked";} ?>> Đã xử lý
        <input type="radio" name="status" value="2" <?php if($order[0]['stat']==2){echo "checked";} ?>> Đã giao hàng
        <input type="radio" name="status" value="3" <?php if($order[0]['stat']==3){echo "checked";} ?>> Đã hủy
     
        </div>

        <button type="submit" class="btn btn-primary" name="btn" onclick="return confirm('Bạn có chắc chắn muốn cập nhật không?')">Cập nhật</button> 
       
      </div>
     
   
        </form>
     
      <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
      <script>
        CKEDITOR.replace( 'mota' );
      </script>
    