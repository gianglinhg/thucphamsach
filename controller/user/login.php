

<?php
    include '../../core/db.php';
    require '../../model/baseModel.php';
    $login = new BaseModel();
    $phone =    clean($_POST['phone']) ?? "";
    $password = clean($_POST['password']) ?? "";

    if ($phone!=""&&$password!="") {
        $pwSecurity=$login->getPwdSecurity($password);
        $use = $login->getOne(
            'users',
            [
                'phone' => $phone,
                'password' => $pwSecurity
            ]
        );
        if ($use == []) {
            echo "Số điện thoại hoặc mật khẩu không chính xác";
        } else {
            $token = $login->getPwdSecurity(time());
            $login->update('users',['token' => $token],['user_id' => $use['user_id']]);
            setcookie('tokenUserFarm',$token,time()+3*24*60*60,'/');
            echo  202;
        }
    }
    else{
        echo " không đăng nhập được";

    }
?>