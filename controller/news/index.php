<?php
//    require './model/baseModel.php';
   $home= new BaseModel();

   $news=$home->get('news');
    include './views/news/index.php';

   // print_r($data);
?>