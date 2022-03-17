<?php
    $meta__title = "Типовая посадочная по сфере";
    $meta__desc = "";
    $meta__key = "";
    require($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
?>
<div class="content page-content">
    <div class="content__breadcrumbs --banner content__mobile-hidden px-48">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
    </div>
    <div class="banner --sphere content__banner px-48">
        <div class="banner__background-wrap flex --just-space">
            <div class="banner__background" style="background-color: #514038"></div>
            <div class="banner__cover-wrap">
                <span class="banner__cover-before"></span>
                <span class="banner__cover-after"></span>
                <picture class="banner__cover flex lazy">
                    <source media="(max-width: 991px)" srcset="/template/dist/img/banner-sphere--mob.webp"
                            type="image/webp">
                    <source media="(max-width: 991px)" srcset="/template/dist/img/banner-sphere--mob.jpg"
                            type="image/jpg">
                    <source srcset="/template/dist/img/banner-sphere.webp" type="image/webp">
                    <source srcset="/template/dist/img/banner-sphere.jpg" type="image/jpg">
                </picture>
            </div>
        </div>
        <div class="center-wrap">
            <div class="banner__wrap col --6 pt-48 pb-64">
                <h1 class="banner__title">КОЛЕСА для хлебопекарен и промышленных печей</h1>
                <div class="parameters-items flex --just-space mt-32">
                    <div class="parameter-item flex --align-center col --3">
                        <div class="parameter-item__icon --svg__diameter-icon mr-20"></div>
                        <div class="parameter-item__desc-wrap">
                            <div class="parameter-item__label --p">Сайт рыбатекст поможет дизайнеру, верстальщику,
                                вебмастеру
                            </div>
                        </div>
                    </div>
                    <div class="parameter-item flex --align-center col --3">
                        <div class="parameter-item__icon --svg__weight-icon mr-20"></div>
                        <div class="parameter-item__desc-wrap">
                            <div class="parameter-item__label --p">Сайт рыбатекст поможет дизайнеру, верстальщику,
                                вебмастеру
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner__consult-btn btn --fill-1 mt-40">Получить консультацию</div>
            </div>
        </div>
    </div>

    <div class="content__wrap center-wrap">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/product/__product-series-small.php'); ?>
    </div>

    <div class="content__filter-nav">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/filter/__filter-nav.php'); ?>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/filter/__filter-mobile.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/sorting/__sorting-mobile.php'); ?>

    <div class="js-filter-sticky content__mobile-hidden content__wrap mt-56 filter-wrapper --catalog">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/filter/__filter-catalog.php'); ?>
    </div>

    <div class="js-filter-sticky-helper content__wrap mt-24 content__mobile-hidden">
        <div class="center-wrap">
            <div class="content__sub-wrap flex --just-end">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/sorting/__sorting-order.php'); ?>
            </div>
        </div>
    </div>

    <div class="content__wrap product-list mt-32">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/product/__product-items.php'); ?>
    </div>

    <div class="content__wrap mt-48">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/pagination/__pagination_new.php'); ?>

        <div class="content__other-slider">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/other-slider/__other-slider.php'); ?>
        </div>
    </div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'); ?>
