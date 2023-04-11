<?php include_once('model/database.php'); ?>
<?php

?>

      <div class="card mt-3">
       
        <div class="card-body">
        <form action="index.php?page=news&act=insert" method="post" enctype="multipart/form-data">
            <br style="margin: 500px;">
        <div class="card-header info">
          <h5>THÊM TIN TỨC</h5>
        </div>      
            <?php
              if($messge!=''){
                echo '  <div class="alert alert-success" role="alert">
                    '.$messge.'
                  </div>';
              }
            ?>
             <div class="form-group">
           <label for="">Loại Tin tức</label>
            <select name="category_id" id="news_id" class="form-control">
           
              <?php
              $categorys=getAllCategorieNews();
              foreach ($categorys as $category) {
                echo '<option value="'.$category['id_news'].'">'.$category['title'].'</option>';
              }
              
              ?>
            </select>
          </div>
             <div class="form-group">
                <label for="">Mã tin tức</label>
                <input type="text" readonly name="id" class="form-control" placeholder="Mã loại tự phát sinh">
              </div>
              <div class="form-group">
                <label for="">Tên tin tức</label>

                <input type="text" name="nameNews" class="form-control" placeholder="Tên tin tức" value="<?php if(isset($_POST['nameNews'])){echo $_POST['nameNews'];}?>">
                <span class="error"><?php if(isset($error['nameNews'])){echo $error['nameNews'];}?></span>

              </div>
              
              <div class="form-group">
                <label for="">Hình ảnh</label>
                <input type="file" name="img" class="form-control" placeholder="Hình ảnh">

          
              </div>
   
         <div class="form-group">
            <label for="">Mô tả</label>
            <textarea name="mota"  class="form-control" >
              <?php if(isset($_POST['mota'])){echo $_POST['mota'];}?>
              
            </textarea>
            <span class="error"><?php if(isset($error['mota'])){echo $error['mota'];}?></span>
         </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-primary" name="btn">Lưu</button>
                  <a href="index.php?page=news" class="btn btn-danger">Danh sách tin tức</a>
              </div>
        
            </form>
       
      </div>
     
      <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
      <script>
        CKEDITOR.replace( 'mota' );
      </script>