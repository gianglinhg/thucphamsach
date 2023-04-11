<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>

<section class="info-page">
    <h2>Liên Hệ</h2>
    <p><a href="">Trang chủ</a><span>/</span> <span class="current-page">Liên hệ</span></p>
</section>
<div class="grid_columns">
    <div id="map" style=" height: 300px; border-radius: 20px; margin-top: 50px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1647.5089745936493!2d106.62800972491449!3d10.852667351569618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529b6a2b351a5%3A0x11690ada8c36f9bc!2sFPT%20Polytechnic!5e0!3m2!1sen!2s!4v1649866027938!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="form-all">
        <div class="thongtin l-4 m-0 c-0">
            <h5>Thông tin liên hệ</h5>
            <p>Thương hiệu vàng trong làng thực phẩm, được ưu tiên trong các giỏ hàng của gia đình Việt, tiêu chí ưu tiên xanh sạch rẻ nhất có thể, cùng hợp tác xã phối hợp thu mua từ bà con nông dân địa phương.</p>
            <p><strong>Địa chỉ:</strong> Xã Tân Thới Nhì, Huyện Hóc Môn, TP. Hồ Chí Minh</p>
            <p><strong>Điện thoại:</strong> 0123499999</p>
            <p><strong>Email:</strong> thefood@gmail.com</p>
        </div>
        <form action="" class="form-select l-8 m-12 c-12" id="form_contact">
            <div class="mesage"></div>
            <div class="form-top">
                <div class="input-group l-6 m-6 c-12">
                    <div class="hoten">
                        <label for="name">Họ và tên</label>
                        <span class="requiz" id="loi">*</span><br>
                        <input type="text" name="name" placeholder="Nhập họ và tên"><br>

                    </div>
                </div>
                <div class="input-group l-6 m-6 c-12">
                    <div class="email">
                        <label for="name">Email</label>
                        <span class="requiz" id="loi">*</span><br>
                        <input type="email" name="email" placeholder="Nhập địa chỉ email" require><br>

                    </div>
                </div>
            </div>
            <div class="input-group l-12 m-12 c-12">
                <div class="dienthoai">
                    <label for="dienthoai">Điện thoại</label>
                    <span class="requiz" id="loi">*</span><br>
                    <input type="tel" name="phone" placeholder="Nhập số điện thoại"><br>
                </div>
            </div>
            <div class="input-group l-12 m-12 c-12">
                <div class="noidung">
                    <label for="noidung">Nội dung</label>
                    <span class="requiz" id="loi">*</span><br>
                    <textarea type="text" name="message" placeholder="Nhập nội dung"></textarea><br>
                    <span id="loi" class="nope">Không được bỏ trống</span>
                </div>
                <button tyle="submit" id="submit">Gửi tin nhắn</button>
            </div>
        </form>
    </div>
</div>

<script>
    const formContact = document.querySelector('#form_contact')

    const name=formContact.querySelector('[name=name]')
    const email=formContact.querySelector('[name=email]')
    const phone=formContact.querySelector('[name=phone]')
    const message=formContact.querySelector('[name=message]')
    const mesageElement=formContact.querySelector('.mesage')
    const mesage=(text='')=>{
        mesageElement.innerHTML=text
        mesageElement.classList.add('active')
    }
    formContact.onsubmit=(e)=>{
        e.preventDefault()
        if(name.value!=""&&email.value!=""&&phone.value!=""&&message.value!=""){
            sendEmail(name.value,email.value,phone.value,message.value)
        }
        else{
            mesage('Vui lòng nhập đầy đủ thông tin')
        }
        
    }
    const sendEmail = (name,email,phone,message) => {
        var templateParams = {
            to_name:'Thực phẩm sạch the food',
            from_name: name,
            email:email,
            phone:phone,
            message: message
        };

        emailjs.send('service_0owmvf4', 'template_vhpyxle', templateParams,'wQ7uAQGe5Edv2SB_o')
            .then(function(response) {
                console.log('SUCCESS!', response.status, response.text);
                    alert('Bạn đã gửi mail thành công')
                    location.reload();
                
            }, function(error) {
                console.log('FAILED...', error);
            });
    };
</script>
