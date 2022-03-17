<?php
    $meta__title = "Колеса";
    $meta__desc = "Колеса";
    $modifier = "--blog";
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

    <div class="js-filter-sticky-helper content__wrap center-wrap mt-48 wheel-weight">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/wheel-types/__wheel-types.php'); ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/wheels-weight/__wheels-weight.php'); ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/about-wheels/__about-wheels.php'); ?>
    </div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'); ?>
