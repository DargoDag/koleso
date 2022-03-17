<?php
    $meta__title = "Блог компании Massager Market";
    $meta__desc = "Полезная информация о массажных креслах и комплектующих к ним: инсайды, аналитика, обзоры";
    $modifier = "--blog";
    require($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
    $moreBtnText = "Показать все колеса";
?>
<div class="content__main-wrap pt-16 pb-128">
    <div class="content__mobile-hidden px-48 mb-48">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
    </div>
    <div class="center-wrap">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/search-result/__search-result.php'); ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/search-result/__search-result-tabs.php'); ?>
        <div class="mt-48">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/pagination/__pagination_new.php'); ?>
        </div>
    </div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'); ?>
