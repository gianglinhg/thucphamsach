<section class="info-page">
    <h2>Tất cả sản phẩm</h2>
    <p><a href="/">Trang chủ</a><span>/</span> <span class="current-page">Tất cả sản phẩm</span></p>
</section>
    <?php
    if ($news == []) {
        echo "<div class='mesage-emty'>Không có bài viết  nào trong danh mục này</div>";
    }

    ?>
<div class="news-page grid_columns">
    <?php
    foreach ($news as $item) {
        echo '
                <a href="?page=newsdetail&id=' . $item['id'] . '" class="news-page__item">
                    <div class="news-page__item--thumb">
                        <img src="./admin/upload/' . $item['image'] . '" alt="">
                    </div>
                    <p class="date">' . $item['updatedAt'] . '</p>
                    <h4 class="news-page__item--title">' . $item['nameNews'] . '</h4>
                    <div class="news-page__item--summary">
                        ' . $item['content'] . '
                    </div>
                </a>
           ';
    }

    ?>

</div>