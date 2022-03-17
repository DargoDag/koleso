<?php
    $meta__title = "Колеса";
    $meta__desc = "Колеса";
    $modifier = "--blog";
    require($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
    $moreBtnText = "Показать все колеса";
?>
<div class="content page-content">
    <div class="content__breadcrumbs --banner content__mobile-hidden px-48">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
    </div>

    <div class="content__banner">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/banner/__banner-wheels-300.php'); ?>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/product/__product-series-small.php'); ?>

    <div class="content__filter-nav">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/filter/__filter-nav.php'); ?>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/filter/__filter-mobile.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/sorting/__sorting-mobile.php'); ?>

    <div class="js-filter-sticky content__mobile-hidden content__wrap mt-64 filter-wrapper --catalog">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/filter/__filter-catalog.php'); ?>
    </div>

    <div class="js-filter-sticky-helper center-wrap flex --just-end mt-24 content__mobile-hidden">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/sorting/__sorting-order.php'); ?>
    </div>

    <div class="product-list mt-32">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/product/__product-list.php'); ?>
    </div>
    <div class="mt-64">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/pagination/__pagination_new.php'); ?>
    </div>
    <div class="content__other-slider">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/other-slider/__other-slider.php'); ?>
    </div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'); ?>
