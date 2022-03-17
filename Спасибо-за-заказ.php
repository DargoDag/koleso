<?php
    $meta__title = "Блог компании Massager Market";
    $meta__desc = "Полезная информация о массажных креслах и комплектующих к ним: инсайды, аналитика, обзоры";
    $modifier = "--blog";
    require($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
?>
<div class="content__main-wrap pt-16 pb-128">
    <div class="px-48">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
    </div>
    <div class="center-wrap mt-104">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/order-thanks/__order-thanks.php'); ?>
    </div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'); ?>
