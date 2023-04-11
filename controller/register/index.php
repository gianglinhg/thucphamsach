

<?php
//    require './model/baseModel.php';
   $home= new BaseModel();
   $category=$home->get('category');
   $discountList=$home->get('products',[],['product_discount'=>'desc'],0,5);

   include './views/register/index.php';

?>