<div class="index_product">
    <form action="index.php?page=products&act=delete" method="post">
        <div class="" id="product_form">
            <div class="card table-card">
                <div class="card-header">
                    <h5>QUẢN LÍ SẢN PHẨM</h5>
                    <!-- <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="feather icon-maximize full-card"></i></li>
                            <li><i class="feather icon-minus minimize-card"></i></li>
                            <li><i class="feather icon-trash-2 close-card"></i></li>
                        </ul>
                    </div> -->
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
                                    <th> Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Giá</th>
                                    <th>Danh mục</th>
                                    <th>Ngày cập nhật</th>
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
                      <td>'.$product['name'].'</td>
                      <td>'.'<img src="upload/'.$product['image'].'" width="100px" height="100px style="border-radius:100%"">'.'</td>
                      <td>'.$product['price_output'].'</td>
                      <td>'.$product['title'].'</td>
                      <td>'.date("d-m-Y", strtotime($product['createdAt'])).'</td>

                
                   
                    
                  
                      
                      <td>
                        <a href="index.php?page=products&act=delete&id='.$product['id'].'" class="btn-a btn-warning" onclick="return confirm(\'Bạn có chắc chắn muốn xóa không?\')">Delete</a>
                        <a href="index.php?page=products&act=edit&id='.$product['id'].'" class="btn-a btn-info">Sửa</a>
                      </td>
                    </tr>
                    ';
                  }
                 ?>
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example" style="margin:50px 350px;  width:30%; ">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link"
                                        href="index.php?page=products&pageNum=1">Frist</a></li>
                                <?php 
                                    $pageSize = 4;
                                    $starRow = 0;
                                    $pageNum = 1;
                                    $offset = 7;
                                    $curentPage=$_GET['pageNum']??1;
                                    $from = $pageNum - $offset; if($from<1) $from = 1;
                                    $to = $pageNum + $offset; 
                                for ($i=$from;$i<=$to;$i++){
                                    if($curentPage==$i){
                                        echo '<li class="page-item" ><a  class="page-link active"
                                        href="index.php?page=products&pageNum='.$i.'"> '.$i.'</a></li>';
                                    }
                                    else{
                                        echo '<li class="page-item" ><a class="page-link"
                                        href="index.php?page=products&pageNum='.$i.'">'.$i.'</a></li>';
                                    }
                                }
                                    ?>
                                
                                
                                <li class="page-item"><a class="page-link"
                                        href="index.php?page=products&pageNum= <?php echo $so?>">last</a></li>
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
</script>