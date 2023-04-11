<div class="index_product">
    <form action="index.php?page=users&act=delete"  method="post">
        <div class="" id="product_form">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Quản lý admin</h5>
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
                                        <th> Mã tài khoản</th>
                                        <th>Tên tài khoản</th>
                                     
                                      
                                        <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                  foreach ($products as $product) {
                    echo '
                    <tr>
                      <th scope="row"><input type="checkbox" id="chonX" name="chonX[]" value="'.$product['user_id'].'" '.($selectAll==true? "checked":"").'></th>
                      <td>'.$product['user_id'].'</td>
                      <td>'.$product['user_name'].'</td>
                     
                   

                
                   
                    
                  
                      
                      <td>
                        <a href="index.php?page=users&act=delete&id='.$product['user_id'].'" class="btn-a btn-warning" onclick="return confirm(\'Bạn có chắc chắn muốn xóa không?\')">Delete</a>
                        <a href="index.php?page=users&act=edit&id='.$product['user_id'].'" class="btn-a btn-info">Sửa</a>
                      </td>
                    </tr>
                    ';
                  }
                 ?>
                            </tbody>
                        </table>
     <div class="card-footera">
            <a href="index.php?page=user_admin&act=selectAll" class="btn btn-info">Chọn tất cả</a>
           
            <a href="index.php?page=products" class="btn btn-info">Bỏ chọn</a>
            <button type="submit" class="btn btn-info" onclick="return confirm('Bạn có chắc chắn muốn xóa  danh mục đã chọn không?')">Delete</button>
       


            <a href="index.php?page=user_admin&act=addnew" class="btn btn-info">Thêm mới</a>
        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
  function selectAll(){
    var allCheckBox=document.querySelectorAll('#chonX');
    allCheckBox.forEach(checkbox => {
      checkbox.checked=true;
    });
    return false;
  }
</script>
