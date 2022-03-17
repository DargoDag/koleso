<?php
	$meta__title = "404";
	$meta__desc  = "Страница не найдена";
	$meta__key   = "";
	$modifier   = "";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<div class="content page-content --mobile-large">
    <div class="content__breadcrumbs --large content__mobile-hidden px-48">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
    </div>
	<div class="center-wrap">
		<div class="content__head flex --just-center">
			<div class="content__search-wrap2 flex --direction-column --align-center --just-center">
				<h1 class="content__404-page --svg__404"></h1>
				<div class="content__search-title h2 mt-32"><b>Ошибка 404</b></div>
				<div class="content__search-desc --p mt-16 col --6 px-16">Номер вашего заказа <b>2012/11</b>. В ближайшее время с вами свяжется наш менеджер.</div>
				<div class="flex">
					<a href="#" class="content__on-main-btn btn">В каталог</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>
