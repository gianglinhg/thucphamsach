

<?php
   
   
   $app= new BaseModel();
   

   $phpSearch=$_GET['q']??"";
   $searchType=$get['type']??'product';
   $result=[];
   
   if($phpSearch!=""){
       switch ($searchType) {
           case 'product':
               $result=$app->getLike('products',['name'=>clean($phpSearch) ]);
               break;
            case 'news':
            # code...
               break;
            
           default:
               # code...
               break;
       }
       
       
    }
    include './views/search/index.php';

   


?>