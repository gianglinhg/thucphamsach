<div class="">
    <div class="">
        <div class="card-body">
            <h4 class="card-title">Bình Luận</h4>
        </div>
        <div class="comment-widgets m-b-20">
            <?php
                 foreach ($commentList as $item) {
                    echo '
                            <div class="d-flex flex-row comment-row">
                            <div class="p-2"><span class="round"><img src="https://i.imgur.com/uIgDDDd.jpg" alt="user" width="50"></span></div>
                            <div class="comment-text w-100">
                                <h5>'.$item['user_name'].'</h5>
                                <div class="comment-footer">'.$item['createdAt'].'  </div>
                                <p class="m-b-5 m-t-10">'.$item['content'].'</p>
                            </div>
                        </div> ';
                 }
            ?>
           
           
        </div>
    </div>
    <div class="create-comment">
        <textarea name="" id="comment-text"></textarea>
        <input type="text" id="news-id" value="<?php echo $news_id?>" hidden >
        <input type="text" id="user-id" value="<?php echo $user_id?>" hidden >
        <button class="btn btn-primary btn-create-comment">Tạo bình luận</button>
    </div>
</div>
<script>
    const btnCreateComment=document.querySelector('.btn-create-comment')
    
    btnCreateComment.onclick=()=>{
        const contentComment=document.querySelector('#comment-text').value
        const userId=document.querySelector('#user-id').value
        const newsId=document.querySelector('#news-id').value
        if(userId==""){
            alert('Vui lòng đăng nhập để thực hiện chức năng này ')
        }
        else if(contentComment==""){
            alert('nội dung bình luận không được để trống')
        }
        else{

            postComment(contentComment,userId,newsId)
        }
    }
    const postComment=(contentComment,userId,newsId)=>{
        
        $.post('./controller/newsdetail/comment.php', 
            {
              contentComment,
              userId,
              newsId
            },
            (data) => {
                location.reload();
    
            })
    }
</script>