<?php include_once('model/database.php'); ?>
<?php

?>

    <div class="card mt-3">

        <div class="card-body">
            <form action="index.php?page=products&act=insert" method="post" enctype="multipart/form-data">
                <div class="card-header info">
                    <h5>THÊM SẢN PHẨM</h5>
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

                        <input type="text" name="name" class="form-control" placeholder="Tên sản phẩm" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>">
                        <span class="error"><?php if(isset($error['name'])){echo $error['name'];}?></span>



                    </div>
                    <div class="form-group">
                        <label for="">Từ khoá</label>
                        <input type="text" name="slug" class="form-control" placeholder="Tên từ khoá" value="<?php if(isset($_POST['name'])){echo $_POST['slug'];}?>">
                        <span class="error"><?php if(isset($error['slug'])){echo $error['slug'];}?></span>

                    </div>
                    <div class="form-group">
                        <label for="">Hình ảnh</label>
                        <input type="file" name="img" class="form-control" placeholder="Hình ảnh">


                    </div>
                    <div class="form-group">
                <label for="">Giá cả</label>
                <input type="text" name="price" class="form-control" placeholder="Giá" value="<?php if(isset($_POST['name'])){echo $_POST['price'];}?>">
                <span class="error"><?php if(isset($error['price'])){echo $error['price'];}?></span>

              </div>
         <div class="form-group">
            <label for="">Mô tả</label>
            <textarea name="mota"  class="form-control" id="mota" cols="30" rows="10"><?php if(isset($_POST['mota'])){echo $_POST['mota'];}?></textarea>
         </div>
         <div class="form-group">
            <label for="">Ngày </label>
           
            <input type="date" name="date" class="form-control" placeholder="Ngày" value="<?php if(isset($_POST['name'])){echo $_POST['date'];}?>">
            <span class="error"><?php if(isset($error['date'])){echo $error['date'];}?></span>

           
         </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="btn">Lưu</button>
                        <a href="index.php?page=products" class="btn btn-danger">Danh sách sản phẩm</a>
                    </div>

            </form>

        </div>

        <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('mota');
        </script>