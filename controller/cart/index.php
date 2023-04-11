<?php
   $home= new BaseModel();
   $category=$home->get('category');
   $discountList=$home->get('products',[],['product_discount'=>'desc'],5);

   include './views/cart/index.php';
   
?>