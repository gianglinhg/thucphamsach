<?php
    include '../../core/db.php';
    require '../../model/baseModel.php';
    $app= new BaseModel();

    $jsSearch=$_POST['q']??"";

    if($jsSearch==""){
        echo json_encode([]);
    }
    else{
        $result=$app->getLike('products',['name'=> clean($jsSearch)])??[];
        echo json_encode($result);
    }
