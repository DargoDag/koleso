<?php 
	$meta__title = "Колеса";
	$meta__desc  = "Колеса";
	$modifier   = "--blog";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<div class="content__main-wrap pt-48 pb-128">
	<div class="center-wrap">
		<div class="content__wrap">
			<div class="content__about-wrap col --12">
                <?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/selected-products/__selected-products.php'); ?>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>