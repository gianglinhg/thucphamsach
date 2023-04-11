<?php include_once('model/database.php'); ?>
<div class="card mt-3">
    <div class="card-header info">
        <h5>CẬP NHẬT DANH MỤC SẢN PHẨM</h5>
    </div>
    <div class="card-body">
        <form action="index.php?page=products_category&act=update" method="post"enctype="multipart/form-data" >
            <div class="form-group">
                <label for="">Mã danh mục sản phẩm</label><br>
                <input type="text" readonly name="id" class="form-control" value="<?php echo $edit['id_cate'] ?>">
            </div>
            <div class="form-group">
                <label for="">Tên danh mục sản phẩm</label><br>
                <input type="text" name="name" class="form-control" value="<?php echo $edit['title'] ?>">

            </div>
            <div class="form-group">
                <label for="">Hình ảnh</label>
                <input type="file" name="img" class="form-control" placeholder="Hình ảnh">
                <img src="upload/<?php echo $edit['img'] ?>" width="200px" height="200px" style="margin: 20px 0 ">

          
              </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="btn" onclick="return confirm('Bạn có chắc chắn muốn sửa không?')">Sửa</button>
                <a href="index.php?page=category_products" class="btn btn-danger">Danh sách</a>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('mota');
</script>