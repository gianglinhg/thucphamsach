<?php include_once('model/database.php'); ?>
<?php

?>

      <div class="card mt-3">
       
        <div class="card-body">
        <form action="index.php?page=news_category&act=insert" method="post" enctype="multipart/form-data">
        <div class="card-header info">
          QUẢN LÝ TIN TỨC
        </div>
            <?php
              if($messge!=''){
                echo '  <div class="alert alert-success" role="alert">
                    '.$messge.'
                  </div>';
              }
            ?>
           
             <div class="form-group">
                <label for="">Mã danh mục tin tức</label>
                <input type="text" readonly name="id" class="form-control" placeholder="Mã loại tự phát sinh">
              </div>
              <div class="form-group">
                <label for="">Tên danh mục tin tức</label>
                <input type="text" name="nameNews" class="form-control" placeholder="Tên loại">

              </div>
              <div class="form-group">
            

              <div class="form-group">
                  <button type="submit" class="btn btn-primary" name="btn">Lưu</button>
                  <a href="index.php?page=news_category" class="btn btn-danger">Danh sách danh mục</a>
              </div>
        
            </form>
       
      </div>
     
      <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
      <script>
        CKEDITOR.replace( 'mota' );
      </script>