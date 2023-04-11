<div class="user-page__order">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Đơn hàng</th>
                <th>Ngày</th>
                <th>Địa chỉ</th>
                <th>Giá trị đơn hàng</th>
                <th>TT thanh toán</th>
                <th>TT vận chuyển</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              foreach ($myOrderList as $item) {
                  echo '
                     <tr>
                         <th><a href="?page=user&userpage=order&orderid='.$item['code'].'">#'.$item['code'].'</a></th>
                         <td>'.date("d-m-Y", strtotime($item['createdAt'])).'</td>
                         <td>'.$item['address'].'</td>
                         <td class="price">'.formatMoney($item['total']).'</td>
                         <td>@mdo</td>
                         <td>@mdo</td>
                     </tr>
                  ';
                  
              }

            ?>
          
        </tbody>
    </table>
</div>