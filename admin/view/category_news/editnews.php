<?php include_once('model/database.php'); ?>
<div class="card mt-3">
    <div class="card-header info">
        QUẢN LÝ DANH MỤC TIN TỨC
    </div>
    <div class="card-body">
        <form action="index.php?page=news_category&act=update" method="post" >
            <div class="form-group">
                <label for="">Mã danh mục tin tức</label><br>
                <input type="text" readonly name="id" class="form-control" value="<?php echo $edit['id_news'] ?>">
            </div>
            <div class="form-group">
                <label for="">Tên danh mục</label><br>
                <input type="text" name="name" class="form-control" value="<?php echo $edit['title'] ?>">

            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="btn" onclick="return confirm('Bạn có chắc chắn muốn sửa không?')">Sửa</button>
                <a href="index.php?page=news_category" class="btn btn-danger">Danh sách</a>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('mota');
</script>