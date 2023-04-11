<?php include_once('model/database.php'); ?>

<div class="card mt-3">
        <div class="card-header info">
         Cập nhật tài khoản admin
        </div>
        <div class="card-body">
          <form action="index.php?page=user_admin&act=update" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã admin</label><br>
                <input type="text" readonly name="id" class="form-control" value="<?php echo $edit['id'] ?>">
                
              </div>
              <div class="form-group">
                <label for="">Tên tài khoản admin</label><br>
                <input type="text" name="username" class="form-control"  value="<?php echo $edit['username'] ?>">
              

              </div>
              <div class="form-group">
                <label for="">Họ và tên</label><br>
                <input type="text" name="fullname" class="form-control"  value="<?php echo $edit['fullname'] ?>">
            
              </div>   
                <div class="form-group">
                    <label for="">Hình ảnh</label><br>
                    <img src="upload/<?php echo $edit['ava'] ?>" alt="" width="100px" height="100px"><br>
                    <label for="">Hình ảnh thay thế</label><br>
                    <input type="file" name="img" class="form-control" placeholder="Hình ảnh">

                </div>
                <div class="form-group">
                    <label for=""> Phân quyền</label><br>
                    <select name="level" id="" class="form-control">
                        <option value="Admin" <?php if($edit['level']=='Admin'){echo "selected";} ?>>Admin</option>
                        <option value="Nhân viên" <?php if($edit['level']=='Nhân viên'){echo "selected";} ?>>Nhân viên</option>
                    </select>
                </div>
                   

            
              <div class="form-group">
                  <button type="submit" class="btn btn-primary" name="btn" onclick="return confirm('Bạn có chắc chắn muốn sửa không?')">Sửa</button> 
                  <a href="index.php?page=user_admin" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>
      <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
      <script>
        CKEDITOR.replace( 'mota' );
      </script>