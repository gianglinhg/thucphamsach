<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Xác nhận đơn hàng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="modal-body orderCode_area">
                <div class="orderCode">
                    <input type="number" id="code1" maxlength="1" onkeyup="inputCode(event,'','code1','code2',)">
                </div>
                <div class="orderCode">
                    <input type="number" id="code2" maxlength="1" onkeyup="inputCode(event,'code1','code2','code3',)">
                </div>
                <div class="orderCode">
                    <input type="number" id="code3" maxlength="1" onkeyup="inputCode(event,'code2','code3','code4',)">
                </div>
                <div class="orderCode">
                    <input type="number" id="code4" maxlength="1" onkeyup="inputCode(event,'code3','code4','',)">
                </div>

            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary verify-order-code">Verify</button>
            </div>
        </div>
    </div>
</div>

<!-- =================================== -->



<div class="grid_columns">
    <div class="container order">
        <div class="input-infomation">
            <form class="form-order">
                <div class="order-title">
                    <h3>Thông tin nhận hàng</h3>
                    <a href="">
                        <i class='bx bx-user-circle'></i>
                        <span>đăng nhập</span>
                    </a>
                </div>
                <div class="error-txt "></div>
                <div class="form-group order">
                    <input type="email" name="email" placeholder="email" value="<?php echo $user['email'] ?? "" ?>">
                </div>
                <div class="form-group order">
                    <input type="text" name="name" placeholder="Họ tên" value="<?php echo $user['user_name'] ?? "" ?>">
                </div>
                <div class="form-group order">
                    <input type="text" name="phone" placeholder="số điện thoại(tùy chọn)" value="<?php echo $user['phone'] ?? "" ?>">
                </div>
                <div class="form-group order">
                    <input type="text" name="address" placeholder="địa chỉ(tùy chọn)" value="<?php echo $user['address'] ?? "" ?>">
                </div>
                <div class="form-group order">
                    <textarea name="noteOrder" placeholder="Ghi chú">Ghi chú</textarea>
                </div>
            </form>
            <div class="transition">
                <div class="order-title">
                    <h3>Vận Chuyển</h3>
                </div>
                <div class="fee-ship">
                    <span>
                        <i class='bx bxs-truck'></i>
                        Giao hàng tận nơi
                    </span>
                    <span>40000</span>
                </div>
                <div class="form-orderNow">
                    <a href="?page=cart">
                        <i class='bx bx-chevron-left'></i>
                        Quay về trang đặt hàng
                    </a>
                    <button class="btn btn-buyNow">Đặt mua</button>
                    <button hidden class="btn btn-showModalInputCode" data-toggle="modal" data-target="#exampleModalCenter">Đặt mua</button>
                </div>
            </div>

        </div>
        <div class="info-product order">
            <div class="order-title">
                <h3>Thông tin nhận hàng (<span> <?php echo count($smallCartList) ?> sản phẩm</span>) </h3>
                <span class="btnDL">
                    <i class='bx bx-chevron-down'></i>
                </span>
            </div>
            <ul class="order-list">
                <?php
                $total = 0;
                foreach ($smallCartList as $item) {
                    $num = 0;
                    for ($i = 0; $i < count($cartFarmApp); $i++) {
                        if ($cartFarmApp[$i]['product_id'] == $item['id'])
                            $num = $cartFarmApp[$i]['num'];
                    }
                    $discount=$item['product_discount'];
                    $productPrice=$item['price_output'];
                    $curentprice=($productPrice-($productPrice*$discount/100));
                    $total+=$num*$curentprice;
                    echo '  <div class="order-item">
                                <div class="order-item_img">
                                    <img src="./admin/upload/' . $item['image'] . '" alt="">
                                    <span>' . $num . '</span>
                                </div>
                                <div class="order-item_txt">
                                    <div>
                                        <p class="name">' . $item['name'] . '</p>
                                        <span class="weight">1kg</span>
                                    </div>
                                    <div class="price">' . formatMoney($curentprice) . '</div>
                                </div>
                            </div>';
                }
                ?>
            </ul>
            <div class="discountCode">
                <div class="form-group order">
                    <input type="text" name="" id="">
                    <button class="btn btn-buyNow">Áp Dụng</button>
                </div>
            </div>

            <!-- Phần hiển thị tông tiền -->
            <div class="orderSumary">
                <div class="orderSumary-line tmp-fee">
                    <span class="text">Tạm tính</span>
                    <span class="price"><?php echo formatMoney($total) ?></span>
                </div>
                <!-- <div class="orderSumary-line ship-fee">
                    <span class="text">phí ship</span>
                    <span class="price">400000</span>
                </div> -->
                <div class="orderSumary-line total">
                    <span class="text">Tổng cộng</span>
                    <span class="price" id="order__total"><?php echo formatMoney($total) ?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function inputCode(event, p, c, n) {
        let length = document.getElementById(c).value.length;
        let maxLength = document.getElementById(c).getAttribute('maxlength')
        if (length == maxLength) {
            n != "" ? document.getElementById(n).focus() : ""
        }
        if (length == 0) {
            p != "" ? document.getElementById(p).focus() : ""
        }

    }
    const formOrder = document.querySelector('.form-order');
    const email = formOrder.querySelector('[name=email]')
    const name = formOrder.querySelector('[name=name]')
    const address = formOrder.querySelector('[name=address]')
    const phone = formOrder.querySelector('[name=phone]')
    const note = formOrder.querySelector('[name=noteOrder]')
    const total = document.querySelector('#order__total').innerHTML;
    console.log(total)
    const btnSubmit = document.querySelector('.btn-buyNow')
    const btnShowModalInputCode = document.querySelector('.btn-showModalInputCode')
    const mesageElement = formOrder.querySelector('.error-txt')
    const verifyOrderCode = document.querySelector('.verify-order-code')
    const mesage = (text = '') => {
        mesageElement.innerHTML = text
        mesageElement.classList.add('active')
    }

    function authentication() {
        let code1 = document.getElementById('code1').value
        let code2 = document.getElementById('code2').value
        let code3 = document.getElementById('code3').value
        let code4 = document.getElementById('code4').value
        let orderCode = code1 + code2 + code3 + code4
        $.post('./controller/order/authentication.php', {
                orderCode,
                email: email.value,
                name: name.value,
                phone: phone.value,
                address: address.value,
                note: note.value,
                total,

            },
            (data) => {
                if (data == 202) {
                    location.href='?page=success&order='+orderCode
                } else {
                    mesage(data)
                }

            })
    }

    function reciveOrderCode() {
        console.log(email.value)
        if (email.value == "" || name.value == "" || address.value == "" || phone.value == "") {
            mesage('Vui lòng nhập đầy đủ thông tin')
        } else {
            $.post('./controller/order/sentOrderCode.php', {
                    phone: phone.value
                },
                (data) => {
                    mesage(data)
                    btnShowModalInputCode.click()

                })
        }
    }
    btnSubmit.onclick = (e) => {
        reciveOrderCode()

    }
    verifyOrderCode.onclick = (e) => {
        authentication()
    }



    












    // async function postData(url = '', data = {}) {

    //     const response = await fetch(url, {
    //         method: 'POST', // *GET, POST, PUT, DELETE, etc.
    //         mode: 'cors', // no-cors, *cors, same-origin
    //         cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    //         credentials: 'same-origin', // include, *same-origin, omit
    //         headers: {
    //             'Content-Type': 'application/json',
    //             'token':'5eda5b83-b553-11ec-9bff-1e4c555e56e3'
    //             // 'Content-Type': 'application/x-www-form-urlencoded',
    //         },
    //         redirect: 'follow', // manual, *follow, error
    //         referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
    //         body: JSON.stringify(data) // body data type must match "Content-Type" header
    //     });
    //     return response.json(); // parses JSON response into native JavaScript objects
    // }

    // postData('https://online-gateway.ghn.vn/shiip/public-api/master-data/province')
    //     .then(data => {
    //         console.log(data); // JSON data parsed by `data.json()` call
    //     })
</script>