<?php
include_once('model/comments_products.php');
?>

<div class="index_product">
    <form action="index.php?page=comments_products&act=delete" method="post">
        <div class="col-xl-8 col-md-12" id="product_form">
            <div class="card table-card">
                <div class="card-header">
                    <h5>QUẢN LÍ TÀI KHOẢN KHÁCH HÀNG</h5>
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
                                        <th> User id</th>
                                        <th>User</th>
                                        
                                        <th>Nội dung bình luận</th>
                                        <th>Sản phẩm bình luận</th>
                                        <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                               
                                ?>
                              
                                <?php
                             
                  foreach ($products as $product) {
                      extract($product);
                    echo '
                    <tr>
                      <th scope="row"><input type="checkbox" id="chonX" name="chonX[]" value="'.$product['comment_id'].'" '.($selectAll==true? "checked":"").'></th>
                      <td>'.$product['comment_id'].'</td>
                      <td>'.$product['user_name'].'</td>
                     
                      <td>'.$product['content'].'</td>
                    
                   
                        <td>'.$product['news_name'].'</td>
                     
                     
                   
                
                   
                    
                  
                      
                      <td>
                        <a href="index.php?page=products&act=delete&id='.$product['comment_id'].'" class="btn-a btn-warning">Xoá</a>
                        <a href="index.php?page=products&act=edit&id='.$product['comment_id'].'" class="btn-a btn-info">Sửa</a>
                      </td>
                    </tr>
                    ';
                  }
                 ?>
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example" style="margin:50px auto;  width:30%; ">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link"
                                        href="index.php?page=products&pageNum=1">Frist</a></li>
                                <?php 
                                    $pageSize = 4;
                                    $starRow = 0;
                                    $pageNum = 1;
                                    $offset = 4;
                                    $from = $pageNum - $offset; if($from<1) $from = 1;
                                    $to = $pageNum + $offset; 
                                for ($i=$from;$i<=$to;$i++){?>
                                <li class="page-item"><a class="page-link"
                                        href="index.php?page=products&pageNum=<?php echo $i?>"><?php echo $i ?></a></li>
                                <?php }?>
                                <li class="page-item"><a class="page-link"
                                        href="index.php?page=products&pageNum= <?php echo $so?>">last</a></li>
                            </ul>
                        </nav>
     <div class="card-footera">
            <a href="index.php?page=products&act=selectAll" class="btn btn-info">Chọn tất cả</a>
           
            <a href="index.php?page=products" class="btn btn-info">Bỏ chọn</a>
            <button type="submit" class="btn btn-info" >Xoá</button>
       


            <a href="index.php?page=products&act=addnew" class="btn btn-info">Thêm mới</a>
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
