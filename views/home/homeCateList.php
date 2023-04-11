



<div class="grid_columns cate-list">
    <div class="swiper cate-list__slide">
        <div class="swiper-wrapper cate">
            <?php
               foreach ($category as $item) {
                   echo '
                        <div class="swiper-slide cate">
                            <a href="?page=product&category='.$item['id_cate'].'" class="cate-item">
                                <div class="cate-item__image">
                                    <img src="./admin/upload/'.$item['img'].'">
                                </div>
                                <div class="slide-text">
                                    '.$item['title'].'
                                </div>
                            </a>
                        </div>
                   ';
               }
            ?>
            <!--  -->
            
        </div>
    </div>
</div>
<script script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var cateList = new Swiper(".cate-list__slide", {
        slidesPerView: 3,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 6,
                spaceBetween: 20,
            },
        },
    });
</script>