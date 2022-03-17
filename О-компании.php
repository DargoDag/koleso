<?php
	$meta__title = "Колеса";
	$meta__desc  = "Колеса";
	$modifier   = "--blog";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<div class="content page-content page-about">
    <div class="content__breadcrumbs content__mobile-hidden px-48">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
    </div>
	<div class="center-wrap">
		<div class="content__wrap">
			<div class="content__about-wrap col --12">
                <?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/about/__about.php'); ?>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>
