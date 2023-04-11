

<?php
//    require './model/baseModel.php';
$home = new BaseModel();
$cartFarmApp = [];
$smallCartList=[];
if (isset($_COOKIE["cartFarmApp"])) {
  $json = $_COOKIE["cartFarmApp"];
  $cartFarmApp = json_decode($json, true);

  $idList = [];
  $listNum = [];
  foreach ($cartFarmApp as $item) {
    $idList[] = $item['product_id'];
    $listNum[] = (int)$item['num'];
  }
  if (count($idList) > 0) {
    $smallCartList = $home->getIn('products', ['id' => implode(',', $idList)]);
  } else {
    
  }
}

// print_r($data);
?>