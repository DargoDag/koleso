<?php
	$meta__title = "Карточка товара";
	$meta__desc  = "";
	$meta__key   = "";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<div class="content">
	<div class="content__wrap">
		<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/product/__product-detail.php'); ?>
	</div>
	<div class="content__wrap product-cart-mobile mt-128">
		<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/product/__product-carousel.php'); ?>
	</div>
	<div class="content__wrap mt-56 pb-128 product-cart-mobile-bottom">
		<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/product/__product-popular.php'); ?>
        <div class="center-wrap about-wheels-mobile">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/about-wheels/__about-wheels.php'); ?>
        </div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>
