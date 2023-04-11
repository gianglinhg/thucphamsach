<?php
include_once 'model/database.php';
function getInfoByID($id)
{
    $sql="SELECT * from user_admin where id='$id'";
    return queryOne($sql);
}
function updateUser($id,$pass)
{
    $sql="update user_admin set passadmin='$pass' where id='$id'";
    return query($sql);
}
function changePass($id,$pass)
{
    $sql="update user_admin set passadmin='$pass' where id='$id'";
    return queryOne($sql);
}
function changeAvatar($id,$file_name)
{
    $sql="update user_admin set ava='$file_name' where id='$id'";
    return query($sql);
}
?>