<?php include_once('model/database.php'); ?>
<?php

?>
<div class="card mt-3">
        <div class="card-header info">
          <h5>CẬP NHẬT BÌNH LUẬN</h5>
        </div>
        <div class="card-body">
          <form action="index.php?page=products&act=update" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã sản phẩm</label><br>
                <input type="text" readonly name="id" class="form-control" value="<?php echo $edit['id'] ?>">
              </div>
              <div class="form-group">
                <label for="">Tên sản phẩm</label><br>
                <input type="text" name="name" class="form-control"  value="<?php echo $edit['name'] ?>">

              </div>
              <div class="form-group">
           <label for="">Loại sản phẩm</label>
            <select name="category_id" id="cate_id" class="form-control">
            <?php
            $categorys=getAllCategories();
            foreach ($categorys as $category) {
              if($edit['category_id']==$category['id_cate']){
                echo '<option selected value="'.$category['id_cate'].'">'.$category['title'].'</option>';
              }else{
                echo '<option value="'.$category['id_cate'].'">'.$category['title'].'</option>';
              }
            }

            ?>
            </select>
          </div>
       

              <div class="form-group">
                <label for="">Giá cả</label><br>
                <input type="text" name="price" class="form-control"  value="<?php echo $edit['price_input'] ?>">

              </div>
                <div class="form-group">
                    <label for="">Mô tả</label><br>
                    <textarea name="mota"  class="form-control" ><?php echo $edit['content'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh</label><br>
                    <img src="upload/<?php echo $edit['image'] ?>" alt="" width="100px" height="100px"><br>
                    <label for="">Hình ảnh thay thế</label><br>
                    <input type="file" name="img" class="form-control" placeholder="Hình ảnh">

                </div>

            
              <div class="form-group">
                  <button type="submit" class="btn btn-primary" name="btn">Cập nhật</button>
                  <a href="index.php?page=products" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>
      <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
      <script>
        CKEDITOR.replace( 'mota' );
      </script>