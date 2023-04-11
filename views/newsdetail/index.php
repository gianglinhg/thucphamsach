<section class="info-page">
  <h2>Tất cả sản phẩm</h2>
  <p><a href="/">Trang chủ</a><span>/</span> <span class="current-page">Tất cả sản phẩm</span></p>
</section>
<div class="grid_columns">
  <main>
    <div class="product__page ">
      <div class="product__categorys l-3">
        <div class="product__categorys--category">
          <h3 class="title">DANH MỤC SẢN PHẨM</h3>
          <div class="category--menu side-menu">
            <?php
            foreach ($category as $item) {
              echo '
                  <div class="category--menu__links link">
                    <a href="?page=product&category=' . $item['id_cate'] . '" class="category--menu__link">' . $item['title'] . '</a>
                  </div>
                  ';
            }
            ?>
          </div>
        </div>
        <div class="product__categorys--filter">
          <h3 class="title">Bài viết liên quan</h3>
          <div class="filter--items side-menu">
            <?php
            foreach ($sameNews as $item) {
              echo '
                    <a class="filter--item link" href="?page=newsdetail&id=' . $item['id'] . '">
                      <img  src="./upload/images/' . $item['image'] . '" alt="">
                      <div class="summary">' . $item['nameNews'] . '</div>
                    </a> ';
            }
            ?>
          </div>
        </div>
      </div>
      <div class="product__menu l-9 news-post">
        <h3> <?php echo $news['nameNews'] ?></h3>
        <p class="news-post__content">
          <?php echo $news['content'] ?>
        </p>
        <?php
        include './views/newsdetail/comment.php';
        ?>
      </div>
    </div>


    <!-- PHẦN HIỂN THỊ CÁC SẢN PHẨM LIÊN QUAN -->

  </main>
</div>