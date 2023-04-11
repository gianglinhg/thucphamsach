<?php
    include_once('database.php');
       


        function getAllProducts()
        {
            $pageSize = 4;
            $starRow = 0;
            $pageNum = 1;
            
            if(isset($_GET['pageNum'])==true) $pageNum = $_GET['pageNum'];
            $starRow = ($pageNum-1)*$pageSize;
            $sql="select id,name,image,price_output,title,createdAt from products,category where products.category_id=category.id_cate LIMIT $starRow,$pageSize";
            return query($sql);

        }
        function addNewProducts($id,$name,$file_name,$price,$cate_id,$slug,$mota,$date)
       
      
        {
            $sql="insert into products(id,name,image,price_output,category_id,slug,content,createdAt) values ('$id','$name','$file_name','$price','$cate_id','$slug','$mota','$date')";
            return query($sql);
        }
        function getProductByID($id)
        {
            $sql="SELECT * from products where id='$id'";
            return queryOne($sql);

        }
        function updateProducts($id,$name,$file_name,$price,$sale,$mota,$date,$cate_id)
        {
            if($file_name=='')
            {
                $sql="update products set name='$name',price_output='$price',product_discount='$sale',content='$mota',category_id='$cate_id',createdAt='$date' where id='$id'";
            }
            else
            {
                $sql="update products set name='$name',image='$file_name',price_output='$price',product_discount='$sale',content='$mota',category_id='$cate_id',createdAt='$date' where id='$id'";
            }
           
            return query($sql);
        }
      
            
        function deleteProducts($id)
        {
          $sql="delete from products where id='$id'";
          execute($sql);
        }
        function getAllCategories()
        {
            $pageSize = 4;
            $starRow = 0;
            $pageNum = 1;
            
            if(isset($_GET['pageNum'])==true) $pageNum = $_GET['pageNum'];
            $starRow = ($pageNum-1)*$pageSize;
            $sql="SELECT * FROM category LIMIT $starRow,$pageSize";
            return query($sql);
        }

         function addNewCategory($id,$name,$file_name)
        {
            $sql="INSERT INTO category(id_cate,title,img) VALUES ($id,'$name','$file_name')";
            return query($sql);
        }




        function updateCategory($id,$name,$file_name)
        {
            if($file_name=='')
            {
                $sql="update category set title='$name' where id_cate='$id'";
            }
            else
            {
                $sql="update category set title='$name',img='$file_name' where id_cate='$id'";
            }
           
            return query($sql);
        }
      
        function deleteCate($id)
        
        {
          $sql="delete from category where id_cate='$id'";
          execute($sql);
        }
        function getCatePro($id)
        {
            $sql="SELECT * from category where id_cate='$id'";
            return queryOne($sql);

        }
        function  checkProductName($name)
        {
            $sql="SELECT * from products where name='$name'";
            return queryOne($sql);
        }
        function list_new_5_products()
      {
        $sql="SELECT * from products order by createdAt desc limit 5";
        return query($sql);
      }
      // lấy 1 sản phẩm cập nhật mới nhất
        function get_new_product()
        {
            $sql="SELECT * from products order by createdAt desc limit 1";
            return queryOne($sql);
        }
        // lấy 1 sản phẩm cập nhật mới thứ hai
        function get_new_product_2()
        {
            $sql="SELECT * from products order by createdAt desc limit 1,1";
            return queryOne($sql);
        }
        
?>
