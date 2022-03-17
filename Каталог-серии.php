<?php
    $meta__title = "Каталог-серии";
    $meta__desc = "";
    $meta__key = "";
    require($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
?>
<div class="content page-content">
    <div class="content__breadcrumbs --small content__mobile-hidden px-48">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
    </div>
    <div class="center-wrap back-button-wrapper">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/back-button/__back-button.php'); ?>
        <h1 class="content__title">Каталог</h1>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/filter/__filter-nav.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/filter/__filter-mobile.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/sorting/__sorting-mobile.php'); ?>

    <div class="js-filter-sticky content__mobile-hidden content__wrap mt-32 filter-wrapper --catalog">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/filter/__filter-catalog.php'); ?>
    </div>
    <div class="js-filter-sticky-helper content__wrap mt-40 catalog-mobile-sorting">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/sorting/__sorting.php'); ?>
    </div>
    <div class="content__wrap mt-40 pb-128 catalog-mobile-product-series">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/product/__product-series.php'); ?>
    </div>
    <div class="center-wrap catalog-mobile-about-wheels">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/about-wheels/__about-wheels.php'); ?>
    </div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'); ?>
