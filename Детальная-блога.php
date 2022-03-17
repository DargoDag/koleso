<?php
	$meta__title = "Детальная блога";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "--blog-detail";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<div class="content page-content">
    <div class="content__breadcrumbs --banner content__mobile-hidden px-48">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
    </div>
	<div class="center-wrap col --16">
		<div class="content__wrap">
			<div class="content__blog-wrap col --16">
                <?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/blog-detail/__blog-detail.php'); ?>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>
