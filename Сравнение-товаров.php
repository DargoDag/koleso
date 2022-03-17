<?php
    $meta__title = "Колеса";
    $meta__desc = "Колеса";
    $modifier = "--blog";
    require($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
?>
<div class="content page-content">
    <div class="content__breadcrumbs content__mobile-hidden px-48">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
    </div>

    <div class="content__wrap center-wrap">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/comparison-table/__comparison-table.php'); ?>

    </div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'); ?>
