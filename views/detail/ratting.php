<div class="ratting-area">
   
    <div class="ratting-info">
        <div class="everyOneRate">
            <input disabled type="radio" name="rated" id="rated-5"<?php echo $evaluateCenter==5?"checked":''?>>
            <label for="rated-5" class='bx bxs-star'></label>
            <input disabled type="radio" name="rated" id="rated-4"<?php echo $evaluateCenter==4?"checked":''?>>
            <label for="rated-4" class='bx bxs-star'></label>
            <input disabled type="radio" name="rated" id="rated-3" <?php echo $evaluateCenter==3?"checked":''?>>
            <label for="rated-3" class='bx bxs-star'></label>
            <input disabled type="radio" name="rated" id="rated-2"<?php echo $evaluateCenter==2?"checked":''?>>
            <label for="rated-2" class='bx bxs-star'></label>
            <input disabled type="radio" name="rated" id="rated-1"<?php echo $evaluateCenter==1?"checked":''?>>
            <label for="rated-1" class='bx bxs-star'></label>
        </div>
        <div class="amount-rate"><?=count($evaluateList)?></div>
        <span>đánh giá trên thefood</span>
    </div>
    <div class="info_rate active">
        <?php
            if($myEvaluatePoint==0){
                echo '<div class="text">Bạn chưa đánh giá cho sản phẩm này</div>';
            }
            else{
                echo '<div class="text">bạn đã đánh giá <strong> '.$myEvaluatePoint.' / 5 </strong> sao</div>';
            }
        ?>
        
        <div class="edit">edit</div>
    </div>
    <div class="star-widget">
        <input type="radio" name="rate" value="5" id="rate-5"<?php echo $myEvaluatePoint==5?"checked":''?>>
        <label for="rate-5" class='bx bxs-star'></label>
        <input type="radio" name="rate" value="4" id="rate-4"<?php echo $myEvaluatePoint==4?"checked":''?>>
        <label for="rate-4" class='bx bxs-star'></label>
        <input type="radio" name="rate" value="3" id="rate-3"<?php echo $myEvaluatePoint==3?"checked":''?>>
        <label for="rate-3" class='bx bxs-star'></label>
        <input type="radio" name="rate" value="2" id="rate-2"<?php echo $myEvaluatePoint==2?"checked":''?>>
        <label for="rate-2" class='bx bxs-star'></label>
        <input type="radio" name="rate" value="1" id="rate-1"<?php echo $myEvaluatePoint==1?"checked":''?>>
        <label for="rate-1" class='bx bxs-star'></label>
    </div>
    <div id=form-reason-rate action="#">
        <div class="textarea">
            <input class="reason-rate" value="<?php echo $myEvaluateReason  ?>" type="text">
        </div>
        <div class="btn-rate">
            <button class="btn-post-rate">Gửi</button>
            <button class="btn-cancel-rate">Hủy</button>
        </div>
    </div>
    <input type="text" id="user-id" value="<?= $user['user_id']??"" ?>" hidden>
    <input type="text" id="product-id" value="<?= $product['id']??"" ?>" hidden>
</div>
<script>
    const btnPostRate = document.querySelector('.btn-post-rate')
    const btnCancelRate = document.querySelector('.btn-cancel-rate')
    const infoRate = document.querySelector('.info_rate')
    const widget = document.querySelector('.star-widget')
    const edit = document.querySelector('.edit')
    const formRate = document.querySelector('#form-reason-rate')
    const productIdRate =document.querySelector('#product-id').value
    const userId =document.querySelector('#user-id').value
    

    edit.onclick = () => {
        widget.classList.add('active')
        infoRate.classList.remove('active')
        formRate.classList.add('active')
    }
    btnPostRate.onclick = () => {
        widget.classList.remove('active')
        formRate.classList.remove('active')
        infoRate.classList.add('active')
        let valueRate=  document.querySelector('[name=rate]:checked').value
        let reasonRate=  document.querySelector('.reason-rate').value
        console.log(reasonRate)
        postRate(valueRate,reasonRate)
    }
    widget.onclick = () => {
        formRate.classList.add('active')
    }
    btnCancelRate.onclick = (e) => {
        e.preventDefault()
        widget.classList.remove('active')
        formRate.classList.remove('active')
        infoRate.classList.add('active')
    }

    const postRate=(valueRate,reasonRate)=>{
       
        if(userId==""){
            alert('vui lòng đăng nhập để thực hiện chức năng này')
        }
        else{
            $.post('./controller/detail/ratting.php', 
            {
               productId:productIdRate,
               userId,
               valueRate,
               reasonRate,

               
                
            },
            (data) => {
               location.reload()
    
            })
        }
    }
  
</script>