<!DOCTYPE html>
<html>
<head>
	<title><?=$meta__title?></title>
	<meta charset="utf-8">
	<meta name="description" content="<?=$meta__desc?>"/>
	<meta name="keywords" content="<?=$meta__key?>"/>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php
		// Режим разработки - подключает исхоные файлы css и js
		$__dev_mode = true;
		if ( $__dev_mode == true ) {
			require($_SERVER['DOCUMENT_ROOT'].'/template/app.php');
		} else {
			echo '<link rel="stylesheet" type="text/css" href="/template/dist/css/__all.min.css">';
		};
	?>
	<? if (isset($_GET['size']) && $_GET['size'] == 85){ ?>
		<style>
			html, body {
				font-size: 13.25px;
			}
		</style>
	<? } ?>
	<? if (isset($_GET['size']) && $_GET['size'] == 75){ ?>
		<style>
			html, body {
				font-size: 12.6px;
			}
		</style>
	<? } ?>
</head>
<body>
	<main>
		<header class="header">
			<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/mob-nav/__mob-nav.php'); ?>
			<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/header/__header-top.php'); ?>
		</header>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/header/__header-main.php'); ?>
		<div class="main-content">
			<?php if(isset($__hidebread) && $__hidebread) { ?>
			<?php } else { ?>
			<? } ?>
