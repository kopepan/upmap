<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>UP Map</title>
  <link rel="stylesheet" type="text/css" href="resources/plugins/bootstrap/css/bootstrap.min.css?<?= rand(1, 100000)?>">
  <link rel="stylesheet" type="text/css" href="resources/plugins/leaflet/leaflet.css?<?= rand(1, 100000)?>"/>
	<link rel="stylesheet" type="text/css" href="resources/styles/index.css?<?= rand(1, 100000)?>">
</head>
	<body>
		<?php include('resources/components/loader.php'); ?>
	</body>
	<script type="text/javascript" src="resources/plugins/jquery/jquery-3.4.1.min.js?<?= rand(1, 100000)?>"></script>
	<script type="text/javascript" src="resources/plugins/leaflet/leaflet.js?<?= rand(1, 100000)?>" defer></script>
  <script type="module" src="resources/scripts/pages/home_page.js?<?= rand(1, 100000)?>"></script>
</html>