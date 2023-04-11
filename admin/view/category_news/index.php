<div class="index_product">
    <form action="index.php?page=news_category&act=delete" method="post" enctype="multipart/form-data">
        <div class="" id="news_form">
            <div class="card table-card">
                <div class="card-header">
                    <h5>DANH MỤC TIN TỨC</h5>
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
                                    <th> Mã danh mục</th>
                                    <th>Tên danh mục</th>

                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                  foreach ($category as $cate) {
                    echo '
                    <tr>
                      <th scope="row"><input type="checkbox" id="chonX" name="chonX[]" value="'.$cate['id_news'].'" '.($selectAll==true? "checked":"").'></th>
                      <td>'.$cate['id_news'].'</td>
                      <td>'.$cate['title'].'</td>
                    
                   
                    
                  
                      
                      <td>
                        <a href="index.php?page=news_category&act=delete&id='.$cate['id_news'].'" class="btn-a btn-warning">Xoá</a>
                        <a href="index.php?page=news_category&act=edit&id='.$cate['id_news'].'" class="btn-a btn-info">Sửa</a>
                      </td>
                    </tr>
                    ';
                  }
                 ?>
                            </tbody>
                        </table>
                        <div class="card-footera">
                            <a href="index.php?page=news_categrory&act=selectAll" class="btn btn-info">Chọn tất
                                cả</a>
                            <button class="btn btn-info" onclick="return selectAll();">Chọn tất cả(javascript)</button>
                            <a href="index.php?page=news" class="btn btn-info">Bỏ chọn</a>
                            <button type="submit" class="btn btn-info">Xoá</button>



                            <a href="index.php?page=news_category&act=addnews" class="btn btn-info">Thêm mới</a>
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