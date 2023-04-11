

<?php

  
  $product_id=$_POST['productId']??"";
  $product_amount=$_POST['amount']??"";
  
  if($product_id!=""&&$product_amount!=""){
    $cartFarmApp=[];
            if(isset($_COOKIE["cartFarmApp"])){
               $json=$_COOKIE["cartFarmApp"];
               $cartFarmApp=json_decode($json,true);
            }
            $isFind=false;
            for($i=0;$i< count($cartFarmApp);$i++){
               if($cartFarmApp[$i]['product_id']==$product_id){
                     $cartFarmApp[$i]['num']+=$product_amount;
                     $isFind=true;
                     break;
               }
            }
            if($isFind==false){
               $cartFarmApp[]=[
                     'product_id'  => $product_id,
                     'num' => $product_amount,
               ];
            }
            $cart=[];
            foreach ($cartFarmApp as $item) {
              if($item['num']>0){
                $cart[]=[
                  'product_id'=>$item['product_id'],
                  'num'       =>$item['num']
                ];
              }
            }

            setcookie('cartFarmApp',json_encode($cart),time()+3*24*60*60,'/');
      
  }
  else{
  }
?>