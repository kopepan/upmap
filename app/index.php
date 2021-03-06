<?php 
	include_once('_config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>UP Map</title>
  <link rel="stylesheet" type="text/css" href="<?=PLUGIN_PATH?>/bootstrap/css/bootstrap.min.css?<?= rand(1, 100000)?>">
  <link rel="stylesheet" type="text/css" href="<?=PLUGIN_PATH?>/leaflet/leaflet.css?<?= rand(1, 100000)?>"/>
	<?php include_once(STYLE_PATH.'/index.php'); ?>
	<?php include_once(STYLE_PATH.'/pages/home_page_style.php'); ?>
</head>
	<body>
		<?php include(COMPONENT_PATH.'/loader.php'); ?>
		<div id="home_page">
			<?php include(COMPONENT_PATH.'/home_header.php'); ?>
		</div>
	</body>
	<script type="text/javascript" src="<?=PLUGIN_PATH?>/jquery/jquery-3.4.1.min.js?<?= rand(1, 100000)?>"></script>
	<script type="text/javascript" src="<?=PLUGIN_PATH?>/leaflet/leaflet.js?<?= rand(1, 100000)?>" defer></script>
  <script type="module" src="<?=SCRIPT_PATH?>/pages/home_page.js?<?= rand(1, 100000)?>"></script>
</html>