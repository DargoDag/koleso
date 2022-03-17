<?php
    $meta__title = "Колеса";
    $meta__desc = "Колеса";
    $modifier = "--blog";
    require($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
    $isNotShowSortingType = true;
?>
<div class="content page-content">
    <div class="content__breadcrumbs --banner content__mobile-hidden px-48">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/typical-series/__typical-series.php'); ?>

    <div class="content__filter-nav">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/filter/__filter-nav.php'); ?>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/filter/__filter-mobile.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/sorting/__sorting-mobile.php'); ?>

    <div class="js-filter-sticky content__mobile-hidden content__wrap mt-40 filter-wrapper --catalog">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/filter/__filter-catalog.php'); ?>
    </div>

    <div class="js-filter-sticky-helper content__sorting mt-32">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/sorting/__sorting.php'); ?>
    </div>

    <div class="content__wrap center-wrap">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/series/__series.php'); ?>
        <div class="mt-56">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/series/__series.php'); ?>
        </div>
        <div class="mt-56">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/series/__series.php'); ?>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/about-wheels/__about-wheels.php'); ?>
    </div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'); ?>
