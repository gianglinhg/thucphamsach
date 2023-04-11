<div class="index_product">
    <form action="index.php?page=order&act=delete" method="post">
        <div class="" id="product_form">
            <div class="card table-card">

                <div class="card-header">
                    <h5>QUẢN LÍ ĐƠN HÀNG</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="feather icon-maximize full-card"></i></li>
                            <li><i class="feather icon-minus minimize-card"></i></li>
                            <li><i class="feather icon-trash-2 close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-hover  table-borderless">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="chk-option">
                                            <div class="checkbox-fade fade-in-primary">
                                                <label class="check-task">
                                                    <input type="checkbox" value="">
                                                    <span class="cr">
                                                        <i class="cr-icon feather icon-check txt-default"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    <th> Mã đơn hàng</th>
                                    <th>Tên người đặt</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>

                                    <th>Trạng thái đơn hàng</th>
                                    <th>Quản lý đơn hàng</th>



                                </tr>
                            </thead>
                            <tbody>
                                <?php
                if($messge!=''){
                echo '  <div class="alert alert-success" role="alert">
                    '.$messge.'
                  </div>';
              }
            ?>
                                <?php
                  foreach ($order as $ord) {?>

                                <tr>
                                    <th scope="row"><input type="checkbox" id="chonX" name="chonX[]"
                                            value="<?php echo $ord['id_order'] ?>"
                                            <?php echo $selectAll==true? "checked":""?>></th>
                                    <td><?php echo $ord['id'] ?></td>
                                    <td><?php echo $ord['fullname'] ?></td>
                                    <td><?php echo $ord['phone'] ?></td>
                                    <td><?php echo $ord['address'] ?></td>
                                    <?php if($ord['stat']==0){
                        $ord['stat']='Chưa xử lý';
                      }elseif($ord['stat']==1){
                        $ord['stat']='Đã xử lý';
                      }elseif($ord['stat']==2){
                        $ord['stat']='Đã giao hàng';
                      }elseif($ord['stat']==3){
                        $ord['stat']='Đã hủy';
                      }
                      ?>
                                    <td><?php echo $ord['stat'] ?></td>
                                    <td class="status">
                                        <a href="index.php?page=order&act=detail&id=<?php echo $ord['id'] ?>"
                                            class="btn-a btn-info">Chi tiết</a>
                                    </td>


                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example" style="margin:50px auto;  width:30%; ">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link"
                                        href="index.php?page=products_category&pageNum=1">Frist</a></li>
                                <?php 
                                    $pageSize = 4;
                                    $starRow = 0;
                                    $pageNum = 1;
                                    $offset = 4;
                                    $from = $pageNum - $offset; if($from<1) $from = 1;
                                    $to = $pageNum + $offset; 
                                for ($i=$from;$i<=$to;$i++){?>
                                <li class="page-item"><a class="page-link"
                                        href="index.php?page=products_category&pageNum=<?php echo $i?>"><?php echo $i ?></a></li>
                                <?php }?>
                                <li class="page-item"><a class="page-link"
                                        href="index.php?page=products_category&pageNum= <?php echo $so?>">last</a></li>
                            </ul>
                        </nav>
                        <div class="card-footera">
                            <a href="index.php?page=products&act=selectAll" class="btn btn-info">Chọn tất cả</a>

                            <a href="index.php?page=products" class="btn btn-info">Bỏ chọn</a>
                            <button type="submit" class="btn btn-info"
                                onclick="return confirm('Bạn có chắc chắn muốn xóa  danh mục đã chọn không?')">Delete</button>



                            <a href="index.php?page=products&act=addnew" class="btn btn-info">Thêm mới</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </form>
</div>
<script>
function selectAll() {
    var allCheckBox = document.querySelectorAll('#chonX');
    allCheckBox.forEach(checkbox => {
        checkbox.checked = true;
    });
    return false;
}

// hiện thị trạng thái đã xác nhận
</script>
<script>
if ($ord['status'] == 1) {
    document.getElementById("status").innerHTML = "Đã xác nhận";
    document.getElementById("status").className = "btn btn-success";
}
</script>