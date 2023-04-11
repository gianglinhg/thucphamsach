<?php include_once('model/database.php'); ?>
<?php

?>

      <div class="card mt-3">
       
        <div class="card-body">
        <form action="index.php?page=products&act=insert" method="post" enctype="multipart/form-data">
        <div class="card-header info">
         <h5> QUẢN LÝ BÌNH LUẬN</h5>
        </div>
            <?php
              if($messge!=''){
                echo '  <div class="alert alert-success" role="alert">
                    '.$messge.'
                  </div>';
              }
            ?>
             <div class="form-group">
           <label for="">Loại sản phẩm</label>
            <select name="category_id" id="cate_id" class="form-control">
           
              <?php
              $categorys=getAllCategories();
              foreach ($categorys as $category) {
                echo '<option value="'.$category['id_cate'].'">'.$category['title'].'</option>';
              }
              
              ?>
            </select>
          </div>
             <div class="form-group">
                <label for="">Mã sản phẩm</label>
                <input type="text" readonly name="id" class="form-control" placeholder="Mã loại tự phát sinh">
              </div>
              <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" name="name" class="form-control" placeholder="Tên sản phẩm">

              </div>
              <div class="form-group">
                <label for="">Từ khoá</label>
                <input type="text" name="slug" class="form-control" placeholder="Tên từ khoá">

              </div>
              <div class="form-group">
                <label for="">Hình ảnh</label>
                <input type="file" name="img" class="form-control" placeholder="Hình ảnh">

          
              </div>
              <div class="form-group">
                <label for="">Giá cả</label>
                <input type="text" name="price" class="form-control" placeholder="Giá">

              </div>
         <div class="form-group">
            <label for="">Mô tả</label>
            <textarea name="mota"  class="form-control" ></textarea>
         </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-primary" name="btn">Lưu</button>
                  <a href="index.php?page=products" class="btn btn-danger">Danh sách sản phẩm</a>
              </div>
        
            </form>
       
      </div>
     
      <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
      <script>
        CKEDITOR.replace( 'mota' );
      </script>