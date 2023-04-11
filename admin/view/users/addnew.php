<?php include_once('model/database.php'); ?>
<?php

?>

    <div class="card mt-3">

        <div class="card-body">
            <form action="index.php?page=user_admin&act=insert" method="post" enctype="multipart/form-data">
                <div class="card-header info">
                    THÊM TÀI KHOẢN
                </div>
                <?php
              if($messge!=''){
                echo '  <div class="alert alert-success" role="alert">
                    '.$messge.'
                  </div>';
              }
            ?>
                    
                    <div class="form-group" style="display:none;">
                        
                        <label for="">Mã sản phẩm</label>
                        <input type="text" readonly name="id" class="form-control" placeholder="Mã loại tự phát sinh">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Họ và tên</label>
                        <input type="text" name="fullname" class="form-control" placeholder="Họ và tên" value="<?php if(isset($_POST['fullname'])){echo $_POST['fullname'];}?>">
                    </div>
                    <div class="form-group">
                        <label for="">Tên tài khảon</label>

                        <input type="text" name="name" class="form-control" placeholder="Tên sản phẩm" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>">
                        <span class="error"><?php if(isset($error['name'])){echo $error['name'];}?></span>



                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu</label>
                        <input type="password" name="password" class="form-control" placeholder="Mật khẩu" value="<?php if(isset($_POST['password'])){echo $_POST['password'];}?>">
                        <span class="error"><?php if(isset($error['password'])){echo $error['password'];}?></span>


                    </div>
                    <div class="form-group">
                        <label for="">Nhập lại mật khẩu</label>
                        <input type="password" name="repassword" class="form-control" placeholder="Nhập lại mật khẩu" value="<?php if(isset($_POST['repassword'])){echo $_POST['repassword'];}?>">
                        <span class="error"><?php if(isset($error['repassword'])){echo $error['repassword'];}?></span>

                    </div>

                    <div class="form-group">
                        <label for="">Ảnh đại diện</label>

                        <div class="file-upload">
                           

                            <div class="image-upload-wrap">
                                <input name="img" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                                <div class="drag-text">
                                    <h3>Drag and drop a file or select add Image</h3>
                                </div>
                            </div>
                            <div class="file-upload-content">
                                <img class="file-upload-image" src="#" alt="your image" />
                                <div class="image-title-wrap">
                                    <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                </div>
                            </div>
                             <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Thêm ảnh đại diện</button>
                        </div>

                    </div>




                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="btn">Lưu</button>
                        <a href="index.php?page=user_admin" class="btn btn-danger">Danh sách tài khoản</a>
                    </div>

            </form>

        </div>

        <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('mota');
        </script>
        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.image-upload-wrap').hide();

                        $('.file-upload-image').attr('src', e.target.result);
                        $('.file-upload-content').show();

                        $('.image-title').html(input.files[0].name);
                    };

                    reader.readAsDataURL(input.files[0]);

                } else {
                    removeUpload();
                }
            }

            function removeUpload() {
                $('.file-upload-input').replaceWith($('.file-upload-input').clone());
                $('.file-upload-content').hide();
                $('.image-upload-wrap').show();
            }
            $('.image-upload-wrap').bind('dragover', function() {
                $('.image-upload-wrap').addClass('image-dropping');
            });
            $('.image-upload-wrap').bind('dragleave', function() {
                $('.image-upload-wrap').removeClass('image-dropping');
            });
        </script>