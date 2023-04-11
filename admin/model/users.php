<?php
  include_once('database.php');
  function getAllUsers()
  {
    $sql="SELECT * from users";
    return query($sql);
  }
  function deleteUser($id)
  {
    $sql="delete from users where user_id='$id'";
    execute($sql);
  }
  ?>