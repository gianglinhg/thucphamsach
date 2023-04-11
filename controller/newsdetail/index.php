
<?php
    //    require './model/baseModel.php';
    $home = new BaseModel();
    $news_id=$_GET['id']??"";
    $category=$home->get('category');
    $news=[];
    if($news_id!=""){
        $user_id=$user['user_id']??"";
        $news=$home->getOne('news',['id'=>$news_id]);
        $sameNews=$home->get('news',['category_id'=>$news['category_id']],[],5);
        $products=$home->get('products',['category_id'=>$news['category_id']],[],6);
        $commentList =$home->getComment($news_id);

    
    }
    include './views/newsdetail/index.php';

?>