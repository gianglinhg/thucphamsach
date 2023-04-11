

<?php
    include '../../core/db.php';
    require '../../model/baseModel.php';
    $login = new BaseModel();
    $email = $_POST['email'] ?? "";
    $password = $_POST['password'] ?? "";

    if ($email != "" && $password != "") {
        $use = $login->getOne(
            'users',
            [
                'email' => $email,
                'password' => $password
            ]
        );
        if ($use == "") {
            echo "email hoặc mật khẩu không chính xác";
        } else {
            $token = $login->getPwdSecurity(time());
            $login->update('users', ['token' => $token], ['user_id' => $use['user_id']]);
            setcookie('tokenUserFarm',$token,time()+3*24*60*60,'/');
            echo  202;
        }
    }
?>