<?php 
	$meta__title = "Заказы";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<div class="content__main-wrap">
	<div class="center-wrap pt-40 pb-128">
		<div class="content__wrap flex --just-space --align-stretch">
			<div class="content__history-wrap col --12">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/personal/__orders-history.php'); ?>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>