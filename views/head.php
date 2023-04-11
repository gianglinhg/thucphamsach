<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
   
    
    
  
   <link href='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css' rel='stylesheet'>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/swiper.css">
    <link rel="stylesheet" href="./public/css/base.css">
    <link rel="stylesheet" href="./public/css/style.css">
    
    <?php
    $pae = $_REQUEST['page'] ?? 'home';
    switch ($pae) {
        case 'home':
            echo '<link rel="stylesheet" href="./public/css/home.css">';
            echo '<link rel="stylesheet" href="./public/css/home2.css">';
            echo '<link  rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>';
            break;
        case 'product':
            echo '<link rel="stylesheet" href="./public/css/product.css">';
            echo '<link rel="stylesheet" href="./public/css/grid.css">';
            break;
        case 'detail':
            echo '<link rel="stylesheet" href="./public/css/detail.css">';
            break;
        case 'order':
            echo '<link rel="stylesheet" href="./public/css/order.css">';
            break;
        case 'news':
            echo '<link rel="stylesheet" href="./public/css/news.css">';
            echo '<link rel="stylesheet" href="./public/css/grid.css">';
            break;
        case 'newsdetail':
            echo '<link rel="stylesheet" href="./public/css/product.css">';
            echo '<link rel="stylesheet" href="./public/css/grid.css">';
            break;
        case 'user':
            echo '<link rel="stylesheet" href="./public/css/user.css">';
            break;
        case 'cart':
            echo '<link rel="stylesheet" href="./public/css/cart.css">';
            echo '<link rel="stylesheet" href="./public/css/grid.css">';
            break;
        case 'search':
            echo '<link rel="stylesheet" href="./public/css/search.css">';
            break;
        case 'success':
            echo '<link rel="stylesheet" href="./public/css/success.css">';
            echo '<link rel="stylesheet" href="./public/css/order.css">';
            break;
         case 'contact':
            echo '<link rel="stylesheet" href="./public/css/grid.css">';
            echo '<link rel="stylesheet" href="./public/css/contact.css">';
            break;
        default:
            # code...
            break;
    }

    ?>

    <!-- <link rel="stylesheet" href="./public/css/swiper.css">
    <link rel="stylesheet" href="./public/css/order.css"> -->
</head>

</html>