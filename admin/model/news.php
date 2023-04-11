<?php
    include_once('database.php');
       


        function getAllNews()
        {
            $pageSize = 4;
            $starRow = 0;
            $pageNum = 1;
            
            if(isset($_GET['pageNum'])==true) $pageNum = $_GET['pageNum'];
            $starRow = ($pageNum-1)*$pageSize;
            $sql="select id,nameNews,content,image,category_id,title from news,category_news where news.category_id=category_news.id_news LIMIT $starRow,$pageSize";
            return query($sql);

        }
        function addNewNews($id,$nameNews,$file_name,$cate_id,$mota)
        {
            $sql="insert into news(id,nameNews,image,category_id,content) values ('$id','$nameNews','$file_name','$cate_id','$mota')";
            return query($sql);
        }
        function getNewByID($id)
        {
            $sql="SELECT * from news where id='$id'";
            return queryOne($sql);

        }
        function updateNews($id_news,$nameNews,$file_name,$mota)
        {
            if($file_name=='')
            {
                $sql="update news set nameNews='$nameNews',content='$mota' where id='$id_news'";
            }
            else
            {
                $sql="update news set nameNews='$nameNews',image='$file_name',content='$mota' where id='$id_news'";
            }

            return query($sql);
           
        }
        function deleteNews($id)
        {
          $sql="delete from news where id='$id'";
          execute($sql);
        }
        function getAllCategorieNews()
        {
            $sql="SELECT * FROM category_news";
            return query($sql);
        }

         function addNewCategoryNews($id,$nameNews)
        {
            $sql="INSERT INTO category_news(id_news,title) VALUES ($id,'$nameNews')";
            return query($sql);
        }




        function updateCategoryNews($id,$nameNews)
        {
          $sql="update category_news set title='$nameNews'  where id_news='$id'";
          execute($sql);
        }
      
        function deleteCateNews($id)
        {
          $sql="delete from category_news where id_news='$id'";

          execute($sql);
        }
        function getCateNewsByID($id)
        {
            $sql="SELECT * from category_news where id_news='$id'";
            return queryOne($sql);

        }
?>
