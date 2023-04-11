

<?php
//    require './model/baseModel.php';
   $home= new BaseModel();
   $category=$home->get('category');
   $discountList=$home->get('products',[],['product_discount'=>'desc'],0,5);
   $latestProduct=$home->get('products',[],['createdAt'=>'desc'],0,8);
   $bestSelling=$home->get('products',[],['sales'=>'desc'],0,8);
   $productList=$home->get('products',[],['sales'=>'asc'],0,8);

   include './views/home/index.php';

?>