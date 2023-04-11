<div class="index_product">
    <form action="index.php?page=news&act=delete" style="padding:0; width:100% !important" method="post">
        <div class="" id="product_form">
            <div class="card table-card">
                <div class="card-header">
                    <h5>QUẢN LÍ TIN TỨC</h5>
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
                                    <th> Mã tin tức</th>
                                    <th>Tên tin tức</th>
                                    <th>Hình ảnh</th>
                                    <!-- <th>mô tả</th> -->
                                    <th>Danh mục</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                  foreach ($news as $new) {
                    echo '
                    <tr>
                      <th scope="row"><input type="checkbox" id="chonX" name="chonX[]" value="'.$new['id'].'" '.($selectAll==true? "checked":"").'></th>
                      <td>'.$new['id'].'</td>
                      <td>'.$new['nameNews'].'</td>
                      <td>'.'<img src="upload/'.$new['image'].'" width="100px" height="100px">'.'</td>
                     
                      <td>'.$new['category_id'].'</td>
                
                   
                    
                  
                      
                      <td>
                        <a href="index.php?page=news&act=delete&id='.$new['id'].'" class="btn-a btn-warning" ONCLICK="return confirm(\'Bạn có chắc chắn muốn xóa không?\')">
                          Delete
                        <a href="index.php?page=news&act=edit&id='.$new['id'].'" class="btn-a btn-info">Sửa</a>
                      </td>
                    </tr>
                    ';
                  }
                 ?>
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example" style="margin:50px 430px;  width:30%; ">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link"
                                        href="index.php?page=news&pageNum=1">Frist</a></li>
                                <?php 
                                    $pageSize = 4;
                                    $starRow = 0;
                                    $pageNum = 1;
                                    $offset = 4;
                                    $from = $pageNum - $offset; if($from<1) $from = 1;
                                    $to = $pageNum + $offset; 
                                for ($i=$from;$i<=$to;$i++){?>
                                <li class="page-item"><a class="page-link"
                                        href="index.php?page=news&pageNum=<?php echo $i?>"><?php echo $i ?></a></li>
                                <?php }?>
                                <li class="page-item"><a class="page-link"
                                        href="index.php?page=news&pageNum= <?php echo $so?>">last</a></li>
                            </ul>
                        </nav>
                        <div class="card-footera">
                            <a href="index.php?page=news&act=selectAll" class="btn btn-info">Chọn tất cả</a>

                            <a href="index.php?page=news" class="btn btn-info">Bỏ chọn</a>
                            <button type="submit" class="btn btn-info" onclick="return confirm('Bạn có chắc chắn muốn xóa  danh mục đã chọn không?')">Delete</button>



                            <a href="index.php?page=news&act=addnews" class="btn btn-info">Thêm mới</a>
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