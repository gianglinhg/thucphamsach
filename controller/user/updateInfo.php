<?php
    include '../../core/db.php';
    require '../../model/baseModel.php';
    $app = new BaseModel();
    
    $name =    clean($_POST['name'])?? "";
    $address = clean($_POST['address']) ?? "";
    $phone =   clean($_POST['phone']) ?? "";
    $token =   clean($_POST['token']) ?? "";

    if ($name != "" && $phone != "" && $address != "" && $token != "") {

       $app->update('users', [
                                'user_name' => $name,
                                'phone'=>$phone,
                                'address'=>$address

                               ], ['token' => $token]);
        echo 202;
    }
