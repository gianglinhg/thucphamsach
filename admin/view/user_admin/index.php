<div class="index_product">
    <form action="index.php?page=user_admin&act=delete" method="post" >
        <div class="" id="product_form" >
            <div class="card table-card">
                <div class="card-header">
                    <h5>QUẢN LÍ ADMIN</h5>
                    <!-- <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="feather icon-maximize full-card"></i></li>
                            <li><i class="feather icon-minus minimize-card"></i></li>
                            <li><i class="feather icon-trash-2 close-card"></i></li>
                        </ul>
                    </div> -->
                </div>
                <div class="card-block" >
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
                                    <th> Mã tài khoản</th>
                                    <th>Tên tài khoản</th>
                                    <th>Hình nhân viên</th>

                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                  foreach ($products as $product) {
                    echo '
                    <tr>
                      <th scope="row"><input type="checkbox" id="chonX" name="chonX[]" value="'.$product['id'].'" '.($selectAll==true? "checked":"").'></th>
                      <td>'.$product['id'].'</td>
                      <td>'.$product['username'].'</td>
                      <td>'.'<img src="upload/'.$product['ava'].'" width="100px" height="100px style="border-radius:100%"">'.'</td>
         
                      <td>
                        <a href="index.php?page=user_admin&act=delete&id='.$product['id'].'" class="btn-a btn-warning" onclick="return confirm(\'Bạn có chắc chắn muốn xóa không?\')">Delete</a>
                        <a href="index.php?page=user_admin&act=edit&id='.$product['id'].'" class="btn-a btn-info">Sửa</a>
                      </td>
                    </tr>
                    ';
                  }
                 ?>
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example" style="margin:50px 480px;  width:30%; ">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link"
                                        href="index.php?page=user_admin&pageNum=1">Frist</a></li>
                                <?php 
                                    $pageSize = 4;
                                    $starRow = 0;
                                    $pageNum = 1;
                                    $offset = 1;
                                    $from = $pageNum - $offset; if($from<1) $from = 1;
                                    $to = $pageNum + $offset; 
                                for ($i=$from;$i<=$to;$i++){?>
                                <li class="page-item"><a class="page-link"
                                        href="index.php?page=user_admin&pageNum=<?php echo $i?>"><?php echo $i ?></a></li>
                                <?php }?>
                                <li class="page-item"><a class="page-link"
                                        href="index.php?page=user_admin&pageNum= <?php echo $so?>">last</a></li>
                            </ul>
                        </nav>
                        <div class="card-footera">
                            <a href="index.php?page=user_admin&act=selectAll" class="btn btn-info">Chọn tất cả</a>

                            <a href="index.php?page=products" class="btn btn-info">Bỏ chọn</a>
                            <button type="submit" class="btn btn-info"
                                onclick="return confirm('Bạn có chắc chắn muốn xóa  danh mục đã chọn không?')">Delete</button>



                            <a href="index.php?page=user_admin&act=addnew" class="btn btn-info">Thêm mới</a>
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
</script>