<div class="form-update-pass">
    <div class="note">Để đảm bảo tính bảo mật vui lòng đặt mật khẩu với ít nhất 8 kí tự</div>
    <div class="mesage">Để đảm bảo tính bảo mật vui lòng đặt mật khẩu với ít nhất 8 kí tự</div>

    <form id="form-update-pass">
        <div class="form-group">
            <label for="">MẬT KHẨU CŨ</label>
            <input type="password" class="form-control" name="passOld" placeholder="Mật khẩu cũ" title="Vui lòng nhập vào trường này" required>
        </div>
        <div class="form-group">
            <label for="">MẬT KHẨU MỚI</label>
            <input type="password" class="form-control" name="passNew" placeholder="Mật khẩu mới" title="Vui lòng nhập vào trường này" required>
        </div>
        <div class="form-group">
            <label for="">NHẬP LẠI MẬT KHẨU</label>
            <input type="password" class="form-control" name="PassNewConfirm" placeholder="Nhập lại mật khẩu" title="Vui lòng nhập vào trường này" required>
            <input  name="token" value="<?php echo $user['token']?>" hidden>
        </div>

        <button type="submit" class="btn btn-changePass">Đặt lại mật khẩu</button>
    </form>
</div>

<script>
   const formUpdatePass=document.querySelector('#form-update-pass')
   const summit=document.querySelector('.btn-changePass')
   const mesageElement=document.querySelector('.mesage')

    const mesage=(text='')=>{
        mesageElement.innerHTML=text
        mesageElement.classList.add('active')
    }
    formUpdatePass.onsubmit=(e)=>{
        e.preventDefault()
        const passOld=formUpdatePass.querySelector('[name=passOld]').value
        const passNew=formUpdatePass.querySelector('[name=passNew]').value
        const PassNewConfirm=formUpdatePass.querySelector('[name=PassNewConfirm]').value
        const token=formUpdatePass.querySelector('[name=token]').value
        if(passNew!=PassNewConfirm){

            mesage('mật khẩu xác nhận không khớp')
        }
        else if(passNew.length<6){
            mesage('mật khẩu phải lớn hơn 6 kí tự')
        }
        else{
            $.post('./controller/user/updatePassword.php', 
            {
              token,
              passNew,
              passOld
            },
            (data) => {
                if(data==202){
                    alert('thay đổi mật khẩu thành công')
                    location.reload();
                }
            })
        }
    }
    

</script>