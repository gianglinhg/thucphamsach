<?php include_once('model/database.php'); ?>

<div class="card mt-3">
        <div class="card-header info">
         <h5> QUẢN LÝ LOẠI HÀNG</h5>
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
                <span class="error"><?php if(isset($error['name'])){echo $error['name'];}?></span>

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
                <input type="text" name="price" class="form-control"  value="<?php echo $edit['price_output'] ?>">
                <span class="error"><?php if(isset($error['price'])){echo $error['price'];}?></span>

              </div>
              <div class="form-group">
                <label for="">sale</label><br>
                <input type="number" name="sale" class="form-control"  value="<?php echo $edit['sales'] ?>">
             

              </div>
              <div class="form-group">
                <label for="">Ngày nhập</label><br>
                <input type="date" name="date" class="form-control"  value="<?php echo $edit['createdAt'] ?>">
                <span class="error"><?php if(isset($error['date'])){echo $error['date'];}?></span>
              </div>
                <div class="form-group">
                    <label for="">Mô tả</label><br>
                    <textarea name="mota"  class="form-control" ><?php echo $edit['content'] ?></textarea>
                    <span class="error"><?php if(isset($error['mota'])){echo $error['mota'];}?></span>
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh</label><br>
                    <img src="upload/<?php echo $edit['image'] ?>" alt="" width="200px" height="200px" style="margin: 20px 0;"><br>
                    <label for="">Hình ảnh thay thế</label><br>
                    <input type="file" name="img" class="form-control" placeholder="Hình ảnh">

                </div>

            
              <div class="form-group">
                  <button type="submit" class="btn btn-primary" name="btn" onclick="return confirm('Bạn có chắc chắn muốn sửa không?')">Sửa</button> 
                  <a href="index.php?page=products" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>
      <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
      <script>
        CKEDITOR.replace( 'mota' );
      </script>