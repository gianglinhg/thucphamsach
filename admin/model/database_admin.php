<?php
include_once('database.php');
function addNewUser($id,$username,$pass,$fullname,$file_name)
{
    $sql="insert into user_admin(id,username,passadmin,fullname,ava) values ('$id','$username','$pass','$fullname','$file_name')";
    return query($sql);
}
function checkUserName($username)
{
    $sql="select * from user_admin where username='$username'";
    return queryOne($sql);
}
function getAllUser()
{
    $pageSize = 4;
    $starRow = 0;
    $pageNum = 1;
    
    if(isset($_GET['pageNum'])==true) $pageNum = $_GET['pageNum'];
    $starRow = ($pageNum-1)*$pageSize;
    $sql="select * from user_admin LIMIT $starRow,$pageSize";
    return query($sql);
}
function getUserByID($id)
{
    $sql="SELECT username,fullname,ava,id,level from user_admin where id='$id'";
    return queryOne($sql);
}
function updateUser($id,$username,$pass)
{
    $sql="update user_admin set username='$username',passadmin='$pass' where id='$id'";
    return query($sql);
}
function deleteUser($id)
{
    $sql="delete from user_admin where id='$id'";
    execute($sql);
}
function changeAvatar($id,$file_name)
{
    $sql="update user_admin set ava='$file_name' where id='$id'";
    return query($sql);
}
function editUser($id,$name,$file_name,$username,$level)
{
    if($file_name=='')
    {
        $sql="update user_admin set fullname='$name',username='$username',level='$level' where id='$id'";
    }
    else
    {
        $sql="update user_admin set fullname='$name',ava='$file_name',username='$username',level='$level' where id='$id'";
    }
   
    return query($sql);
}
?>