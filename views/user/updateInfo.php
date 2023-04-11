<div class="user-page__info custom">
    <div>
        <div class="info-item">
            <label>Họ tên :</label>
            <span><?= $user['user_name']?></span>
        </div>
        <div class="info-item">
            <label>Số điện thoại :</label>
            <span><?= $user['phone']?></span>
        </div>
        <div class="info-item">
            <label>Địa chỉ:</label>
            <span><?= $user['address']?></span>
        </div>
    </div>
    <div class="custom-btn" data-toggle="modal" data-target=".bd-example-modal-lg">
        chỉnh sửa địa chỉ
    </div>
</div>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">CHỈNH SỬA ĐỊA CHỈ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-update-info">
                    <div class="form-group">
                        <label for="">HỌ TÊN</label>
                        <input type="text" 
                               class="form-control" 
                               name="name"
                               value="<?= $user['user_name']?>" 
                               placeholder="Họ tên" required>
                    </div>
                    <div class="form-group">
                        <label for="">ĐỊA CHỈ</label>
                        <input type="text" 
                               class="form-control" 
                               name="address"
                               value="<?= $user['address']?>"
                               placeholder="Địa chỉ" required>
                    </div>
                    <div class="form-group">
                        <label for="">SỐ ĐIỆN THOẠI</label>
                        <input type="number" 
                               class="form-control" 
                               name="phone"
                               value="<?= $user['phone']?>" 
                               placeholder="" required>
                    </div>
                    <input type="text" name="token" value="<?php echo $user['token']??"" ?>" >
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">HỦY</button>
                <button type="button" class="btn btn-primary btn-update-info">THAY ĐỔI THÔNG TIN</button>
            </div>
        </div>
    </div>
</div>
<script>
    const formUpdateInfo = document.querySelector('#form-update-info');
    const btnUpdateInfo = document.querySelector('.btn-update-info');
    btnUpdateInfo.onclick=()=>{
        const name = formUpdateInfo.querySelector('[name=name]').value
        const phone = formUpdateInfo.querySelector('[name=phone]').value
        const address = formUpdateInfo.querySelector('[name=address]').value
        const token = formUpdateInfo.querySelector('[name=token]').value
        // if(name==""||phone==""||address==""){

        //     alert('Vui lòng điền đầy đủ thông tin')
        // }
        // else{
            $.post('./controller/user/updateInfo.php', 
            {
              token,
              name,
              phone,
              address
            },
            (data) => {
                // if(data==202){
                //     alert('thay đổi thông tin thành công thành công')
                // }
                console.log(data)
            })
        // }
    }
</script>