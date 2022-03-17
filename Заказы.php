<?php
    $meta__title = "Заказы";
    $meta__desc = "";
    $meta__key = "";
    $modifier = "";
    require($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
?>
<div class="content page-content --mobile-large">
    <div class="content__breadcrumbs content__mobile-hidden px-48">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
    </div>

    <div class="content__wrap center-wrap">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/personal/__orders.php'); ?>
    </div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'); ?>
