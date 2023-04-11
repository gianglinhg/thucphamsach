<div class="card mt-3">
        <div class="card-header info">
          <h5>
          CẬP NHẬT TIN TỨC
          </h5>
        </div>
        <div class="card-body">
          <form action="index.php?page=news&act=update" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã tin tức</label><br>
                <input type="text" readonly name="id" class="form-control" value="<?php echo $edit['id'] ?>">
                
              </div>
              <div class="form-group">
                <label for="">Tên tin tức</label><br>
                <input type="text" name="nameNews" class="form-control"  value="<?php echo $edit['nameNews'] ?>">
                <span class="error"><?php if(isset($error['nameNews'])){echo $error['nameNews'];}?></span>

              </div>
              <div class="form-group">
           <label for="">Loại sản phẩm</label>
            <select name="category_id" id="cate_id" class="form-control">
            <?php
            $categorys=getAllCategorieNews();
            foreach ($categorys as $category) {
              if($edit['category_id']==$category['id_news']){
                echo '<option selected value="'.$category['id_news'].'">'.$category['title'].'</option>';
              }else{
                echo '<option value="'.$category['id_cate'].'">'.$category['title'].'</option>';
              }
            }

            ?>
            </select>
          </div>
              <div class="form-group">
                <label for="">Hình ảnh</label><br>
                <input type="file" name="img" class="form-control" placeholder="Hình ảnh">
                <img src="upload/<?php echo $edit['image'] ?>" width="250px" height="200px" style="margin:20px 0;border: 1px solid #9999 ;border-radius:10px">



              </div>
              <!-- <div class="form-group">
                <label for="">Giá cả</label><br>
                <input type="text" name="price" class="form-control"  value="<?php echo $edit['price_input'] ?>">

              </div> -->
                <div class="form-group">
                    <label for="">Mô tả</label><br>
                    <textarea name="mota"  class="form-control" ><?php echo $edit['content'] ?></textarea>
                </div>
                <span class="error"><?php if(isset($error['mota'])){echo $error['mota'];}?></span>

            
              <div class="form-group">
                  <button type="submit" class="btn btn-primary" name="btn">Cập nhật</button>
                  <a href="index.php?page=news" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>
      <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
      <script>
        CKEDITOR.replace( 'mota' );
      </script>