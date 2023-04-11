<?php include_once('model/database.php'); ?>

<div class="card mt-3">
        <div class="card-header info">
          <h5>CẬP NHẬT TÀI KHOẢN ADMIN</h5>
        </div>
        <div class="card-body">
          <form action="index.php?page=info_admin&act=update" method="post" enctype="multipart/form-data">
            <div class="form-group" style="display:none">
                <label for="">Mã sản phẩm</label><br>
                <input type="text" readonly name="id" class="form-control" value="<?php echo  $_SESSION['login_id']; ?>">
              </div>
            
       

              <div class="form-group">
                <label for="">Mật khẩu mới</label><br>
                <input type="password" name="password" class="form-control"  value="">
                <?php if(isset($error['password'])){ ?>
                  <p class="text-danger"><?php echo $error['password'] ?></p>
                <?php } ?>
              </div>
               
              <div class="form-group">
                <label for="">Nhập lại mật khẩu mới</label><br>
                <input type="password" name="repassword" class="form-control"  value="">
                <?php if(isset($error['repassword'])){ ?>
                  <p class="text-danger"><?php echo $error['repassword'] ?></p>
                <?php } ?>

            
              <div class="form-group" style="margin-top:20px;">
                  <button type="submit" class="btn btn-primary" name="btn" onclick="return confirm('Bạn có chắc chắn muốn sửa không?')">Sửa</button> 
              
              </div>
          </form>
        </div>
      </div>
      <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
      <script>
        CKEDITOR.replace( 'mota' );
      </script>