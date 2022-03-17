<?php
    $meta__title = "Колеса для тележек";
    $meta__desc = "";
    $meta__key = "";
    $headerMainModClass = '--main-page';
    $aboutWheelsTitle = 'Колеса для тележек Tellure Rota';
    require($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
?>
<div class="content main-page">
    <div class="content__wrap">
        <div class="js-main-page-slider-wrapper type-carusel main-page-slider js-swiper__main-banner">
            <div class="type-carusel__swiper">
                <div class="js-main-page-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="banner --main px-48">
                                <div class="banner__background-wrap flex --just-space">
                                    <div class="banner__background" style="background-color: #F5F7F9"></div>
                                    <div class="banner__cover-wrap">
                                        <picture class="banner__cover --desktop flex lazy">
                                            <source srcset="/template/dist/img/banner-main.webp" type="image/webp">
                                            <source srcset="/template/dist/img/banner-main.png" type="image/png">
                                        </picture>
                                        <picture class="banner__cover --mobile flex lazy">
                                            <source srcset="/template/dist/img/banner-main-mobile.webp"
                                                    type="image/webp">
                                            <source srcset="/template/dist/img/banner-main-mobile.png" type="image/png">
                                        </picture>
                                    </div>
                                </div>
                                <div class="center-wrap">
                                    <div class="banner__wrap col --4 pt-72 pb-80">
                                        <h1 class="banner__title">Колеса из нержавеющей стали</h1>
                                        <div class="banner__desc h5 mt-24">Скидки до</div>
                                        <div class="banner__consult-btn btn mt-104">Подробнее</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="banner --main px-48">
                                <div class="banner__background-wrap flex --just-space">
                                    <div class="banner__background" style="background-color: #F5F7F9"></div>
                                    <div class="banner__cover-wrap">
                                        <picture class="banner__cover --desktop flex lazy">
                                            <source srcset="/template/dist/img/banner-main.webp" type="image/webp">
                                            <source srcset="/template/dist/img/banner-main.png" type="image/png">
                                        </picture>
                                        <picture class="banner__cover --mobile flex lazy">
                                            <source srcset="/template/dist/img/banner-main-mobile.webp"
                                                    type="image/webp">
                                            <source srcset="/template/dist/img/banner-main-mobile.png" type="image/png">
                                        </picture>
                                    </div>
                                </div>
                                <div class="center-wrap">
                                    <div class="banner__wrap col --4 pt-72 pb-80">
                                        <h1 class="banner__title">Колеса из нержавеющей стали</h1>
                                        <div class="banner__desc h5 mt-24">Скидки до</div>
                                        <div class="banner__consult-btn btn mt-104">Подробнее</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="banner --main px-48">
                                <div class="banner__background-wrap flex --just-space">
                                    <div class="banner__background" style="background-color: #F5F7F9"></div>
                                    <div class="banner__cover-wrap">
                                        <picture class="banner__cover --desktop flex lazy">
                                            <source srcset="/template/dist/img/banner-main.webp" type="image/webp">
                                            <source srcset="/template/dist/img/banner-main.png" type="image/png">
                                        </picture>
                                        <picture class="banner__cover --mobile flex lazy">
                                            <source srcset="/template/dist/img/banner-main-mobile.webp"
                                                    type="image/webp">
                                            <source srcset="/template/dist/img/banner-main-mobile.png" type="image/png">
                                        </picture>
                                    </div>
                                </div>
                                <div class="center-wrap">
                                    <div class="banner__wrap col --4 pt-72 pb-80">
                                        <h1 class="banner__title">Колеса из нержавеющей стали</h1>
                                        <div class="banner__desc h5 mt-24">Скидки до</div>
                                        <div class="banner__consult-btn btn mt-104">Подробнее</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-main-page-slider-pagination main-page-slider__pagination"></div>

                    <div class="type-carusel__nav-wrap">
                        <div class="center-wrap">
                            <div class="type-carusel__nav flex --align-center">
                                <div class="js-main-page-slider-prev type-carusel__btn --left swiper-button-prev"></div>
                                <div class="type-carusel__pagination px-16">
                                    <div class="js-main-page-slider-pagination-fraction swiper-pagination"></div>
                                </div>
                                <div class="js-main-page-slider-next type-carusel__btn --right swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-page-slider__scrollbar-wrapper">
                <div class="js-main-page-slider-scrollbar main-page-slider__scrollbar"></div>
                <div class="js-main-page-slider-scrollbar-number main-page-slider__scrollbar-pagination"></div>
            </div>
        </div>
    </div>
    <div class="sections-ndx">
        <div class="content__wrap">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/selection/__selection.php'); ?>
        </div>
    </div>
    <div class="filter-ndx">
        <div class="content__wrap">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/filter/__filter.php'); ?>
        </div>
    </div>
    <div class="product-sales mt-80">
        <div class="content__wrap">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/product/__product-sales.php'); ?>
        </div>
    </div>
    <div class="product-top mt-80">
        <div class="content__wrap main-page__product-top-wrapper">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/product/__product-top.php'); ?>
        </div>
    </div>
    <div class="about-wheels-wrap">
        <div class="center-wrap">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/about-wheels/__about-wheels.php'); ?>
        </div>
    </div>
    <div class="content__wrap" style="display: none">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/catalog-menu/__catalog-menu.php'); ?>
    </div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'); ?>
