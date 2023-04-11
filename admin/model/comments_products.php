<?php
    include_once('database.php');
       


        function getAllComments()
        {
            // selecect inner join
            $sql="select 
            comments.comment_id,
            comments.content,
         
         
            comments.news_id,
            comments.user_id,
         
            users.user_name as user_name,
         
            news.nameNews as news_name
            from comments
            INNER JOIN users ON comments.user_id = users.user_id
            INNER JOIN news ON comments.news_id = news.id
            ORDER BY comments.comment_id DESC";

            return query($sql);
        }
     
        function name_sp()
     
        {
            $sql="select name from comments,products where products.id=comments.product_id";
            return query($sql);
        }
        
          

        function addNewProducts($id,$name,$file_name,$price,$cate_id,$slug,$mota)
       
      
        {
            $sql="insert into products(id,name,image,price_input,category_id,slug,content) values ('$id','$name','$file_name','$price','$cate_id','$slug','$mota')";
            return query($sql);
        }
        function getProductByID($id)
        {
            $sql="SELECT * from products where id='$id'";
            return queryOne($sql);

        }
        function updateProducts($id,$name,$file_name,$price)
        {
            if($file_name=='')
            {
                $sql="update products set name='$name',price_input='$price' where id='$id'";
            }
            else
            {
                $sql="update products set name='$name',image='$file_name',price_input='$price' where id='$id'";
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
            $sql="SELECT * FROM category";
            return query($sql);
        }

         function addNewCategory($id,$name)
        {
            $sql="INSERT INTO category(id_cate,title) VALUES ($id,'$name')";
            return query($sql);
        }




        function updateCategory($id,$name)
        {
          $sql="update category set title='$name'  where id_cate='$id'";
          execute($sql);
        }
      
        function deleteCate($id)
        {
          $sql="delete from category where id_cate='$id'";
          execute($sql);
        }
?>
