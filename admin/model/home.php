<?php
include_once('database.php');
function count_all_products()
{
  $sql = "SELECT count(*) as total from products";
  return queryOne($sql);
}
?>