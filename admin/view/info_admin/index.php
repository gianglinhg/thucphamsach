<?php 
// lấy hết thông tin của người dùng đang đăng nhập
$id=$_SESSION['login_id'];
$user = $_SESSION['login_user'] ;
// lấy id của người dùng đang đăng nhập
$fullname= $_SESSION['login_fullname'] ;
$level= $_SESSION['login_level'] ;
$ava= $_SESSION['login_ava'] ;

?>
 <form action="index.php?page=user_admin&act=delete"  method="post">
        <div class="" id="product_form">
            <div class="card table-card" >
                <div class="card-header">
                    <h5>THÔNG TIN TÀI KHOẢN CÁ NHÂN</h5>
                    <!-- <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="feather icon-maximize full-card"></i></li>
                            <li><i class="feather icon-minus minimize-card"></i></li>
                            <li><i class="feather icon-trash-2 close-card"></i></li>
                        </ul>
                    </div> -->
                </div>
                <div class="card-block" style="margin-left:30px">
                    <div class="table-responsive">
                 
                  <div class="form-fa" style="display: flex;">
                  <div class="form-a">
                        <div class="form-group">
                           
                           <img src="upload/<?php echo $ava; ?>" alt="" width="100px" height="100px">
                     </div>
                   
                      
                        </div>

                      <div class="form-b" style="margin-left: 20px;">
                        <div class="form-group">
                            <label for="">Tên tài khoản</label>
                            <?php echo $user; ?>
                        </div>
                        

                        <div class="form-group">
                            <label for="">Họ và tên</label>
                            <?php echo $fullname; ?>
                        </div>
                        <div class="form-group">
                            <label for="">Chức vụ</label>
                            <?php echo $level; ?>
                        </div>
                      </div>
                      
                  </div>
                        <div class="form-group">
                            <a href="index.php?page=info_admin&act=edit&id=<?php echo $id; ?>" class="btn-a btn-info">Thay đổi mật khẩu</a>
                          
                        </div>
                    </div>
                  
               </div>
            </div>
        </div>
    </form>





