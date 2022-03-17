<?php
    $meta__title = "Блог компании Massager Market";
    $meta__desc = "Полезная информация о массажных креслах и комплектующих к ним: инсайды, аналитика, обзоры";
    $modifier = "--blog";
    require($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
?>
<div class="content__main-wrap pt-16 pb-128">
    <div class="content__mobile-hidden px-48 mb-48">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
    </div>
    <div class="center-wrap">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/search-result/__search-result.php'); ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/search-result-nothing/__search-result-nothing.php'); ?>
        <div class="content__wrap mt-64 pb-112">
            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/product/__product-interest.php'); ?>
        </div>
    </div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'); ?>
