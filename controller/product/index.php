<?php
//    require './model/baseModel.php';
   $product= new BaseModel();
   $url='?page=product';
   $sortName=$_GET['sortName']??"";
   $sortPrice=$_GET['sortPrice']??"";
   $price_comparing=$_GET['comparing']??0;
   $cate=$_GET['category']??"";
   $products=[];
   $sortLink='?page=product';

   $curentP=$_GET['p']??1;
   $limitEnd=12;
   $limitStart=($curentP-1)*$limitEnd;
   $numberP=0;
//    $titlePage='Tất cả sản phẩm';
   if($cate==""){
       $countProduct=count($product->get('products'));
       $numberP=ceil($countProduct/$limitEnd);
       if($sortName!=""){
           $products=$product->get('products',[],['name'=>$sortName],$limitStart,$limitEnd);
       }
       elseif($sortPrice!=""){
           $products=$product->get('products',[],['price_output'=>$sortPrice],$limitStart,$limitEnd);
       }
       else{
           $products=$product->get('products',['price_output>'=>$price_comparing],[],$limitStart,$limitEnd);
       }
   }
   else{
       $url='?page=product&category='.$cate;
       $countProduct=count($product->get('products',['category_id'=>$cate]));
       $numberP=ceil($countProduct/$limitEnd);
       if($sortName!=""){
           $products=$product->get('products',['category_id'=>$cate],['name'=>$sortName],$limitStart,$limitEnd);
        }
        elseif($sortPrice!=""){
            $products=$product->get('products',['category_id'=>$cate],['price_output'=>$sortPrice],$limitStart,$limitEnd);
        }
        else{
            $products=$product->get('products',['category_id'=>$cate],[],$limitStart,$limitEnd); 
          
       }
   }
    

    $category=$product->get('category');   
    include './views/product/index.php';
?>