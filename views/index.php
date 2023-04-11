<?php
session_start();
include './views/head.php';
include './views/library/index.php';
?>

<body>
   
   <?php
   include './views/header.php';
   $page = $_REQUEST['page'] ?? 'home';
   include './controller/' . $page . '/index.php';
   include './views/footer.php';
   // $slug=basename(parse_url("http://localhost/duan1/", PHP_URL_PATH));
   // $slug= trim(parse_url("http://localhost/duan1/", PHP_URL_PATH), '/');

   ?>
   <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   <script src="./public/js/index.js"></script>
   <script src="./public/js/swiper.js"></script>
   <script src="./public/js/header.js"></script> -->
   

</body>
