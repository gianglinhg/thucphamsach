
<?php
session_start();

if (isset($_POST['btn'])) {
    $u = $_POST['u'];
    $p = $_POST['p'];
    $u = trim(strip_tags($u));
    $p = trim(strip_tags($p));
    require_once("database.php");
    // chỉ có các tài khoản có trạng thái là 1 mới đc đăng nhập

    $sql = "SELECT id,username,fullname,level,ava FROM user_admin WHERE username='{$u}' ";
    $DBH = getConnection();
    $kq = $DBH->query($sql);
    if ($kq->rowCount() == 0) {
        $_SESSION['thongbao'] = "Tài khoản không tồn tại";
        header("location:admin_login.php");
        exit();
    }
    $sql = "SELECT id,username,fullname,level,ava FROM user_admin WHERE username='$u' AND passadmin='$p' ";
    $DBH = getConnection();
    $kq = $DBH->query($sql);
    if ($kq->rowCount() == 0) {
        $_SESSION['thongbao'] = "Mật khẩu không đúng";
        header("location:admin_login.php");
        exit();
    }
    $row_user = $kq->fetch();
    $_SESSION['login_id'] = $row_user['id'];
    $_SESSION['login_user'] = $row_user['username'];
    $_SESSION['login_fullname'] = $row_user['fullname'];
    $_SESSION['login_ava'] = $row_user['ava'];
 
    $_SESSION['login_level'] = $row_user['level'];

    header("location:../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../css/style_login.css"> -->

</head>
<style>
body {
    background-image: linear-gradient(#3366CC, #fff);
    background-repeat: no-repeat;
    background-size: 1600px 1000px;
}

form {
    margin: 100px auto;
    width: 500px;
    height: 500px;
    background: #fff;
    border-radius: 20px;
}

.alert {
    color: red;
}

h2 {
    text-align: center;
    padding-top: 50px;
    padding-bottom: 30px;
    color: black;
    font-size: 30px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

}

input[type="text"],
input[type="password"] {
    background: url(../images/m.png)no-repeat 0px 5px;
    outline: none;
    font-size: 15px;
    font-weight: 400;
    color: #111;
    padding: 12px 13px 20px 08px;
    border: none;
    border-bottom: 1px solid #000;
    width: 92%;
    margin: 0 0 20px;
    display: inline-block;
}

input[type="submit"] {
    text-align: center;
    background-image: linear-gradient(#00ccff, #660066);
    font-size:15px;
    color: white;
    width: 70%;
    padding: 14px 0px;
    margin: 17px auto;
    display: flex;
    justify-content: center;
    align-items: center;
    border: none;
}

large-header {
    position: relative;
    width: 100%;
    background: #333;
    overflow: hidden;
    background-size: cover;
    background-position: center center;
    z-index: 1;
}

table {
    width: 70%;
    margin: auto;
}

.alert-danger {
    color: red;
    padding: 20px;
    font-size: 30px;
    text-align: center;
}
</style>

<body>
    <form action="" method="post">

        <table>
            <h2>Đăng Nhập Quản Trị</h2>
            <tr>
                <td></td>
                <td><input type="text" name="u" onblur="if (this.value == '') {this.value = 'User name';}"
                        onfocus="if (this.value == 'User name') {this.value = '';}" value="User name" /></td>
            <tr>
                <td></td>
                <td><input type="password" name="p" onblur="if (this.value == '') {this.value = 'User name';}"
                        onfocus="if (this.value == 'User name') {this.value = '';}" value="User name" /></td>
            </tr>

        </table>
        <input type="submit" value="Đăng nhập" class="button" name="btn" />
        <?php if (isset($_SESSION['thongbao'])) { ?>
        <div class="alert alert-danger">

            <?php echo $_SESSION['thongbao'];
                unset($_SESSION['thongbao']); ?>
        </div>
        <?php } ?>
    </form>
</body>

</html>