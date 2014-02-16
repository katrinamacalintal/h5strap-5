<?php
	# Execute the Template
	require_once('controllers/pi.php');
?>
<!DOCTYPE html>
<!--[if lte IE 8]><html class="msie no-js" lang="en"><![endif]-->
<!--[if gte IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">
<title> HTML5 Framework </title>
<meta name="robots" content="nofollow, noindex">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="assets/icons/favicon.png" type="image/png" rel="shortcut icon">
<link href="assets/~bootstrap/css/bootstrap.min.css?v=3.1.1" rel="stylesheet">
<link href="assets/~fontawesome/fontawesome.min.css?v=4.0.3" rel="stylesheet">	
<link href="assets/css/default.css" rel="stylesheet">
<?php
	/*
	
	IMPORTANT: Delete this comment when framework is establish for project and if LESS JS will not in use.
	Note: If you want to use CSS LESS in your development, comment the current CSS link and replace with this tag.
				And underneath the jQuery 1.11.0, place the script tag for LESS JS.

	<link href="assets/less/default.less" rel="stylesheet/less">
	<script src="assets/js/less.min.js"></script>

	*/
?>
<script src="assets/js/jquery-1.11.0.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/modernizr.js?v=2.6.1"></script>
<script src="plugins/pace/pace.min.js"></script>
<!--[if lt IE 9]>
  <script src="assets/js/respond.min.js"></script>
<![endif]-->
<?php emptyblock('head'); ?>
</head>
<body>
	<?php
		emptyblock('overlay');
		emptyblock('format');
		
		include_once('includes/sidr.php');
	?>
	<script src="assets/~bootstrap/js/bootstrap.min.js?v=3.1.1"></script>
	<?php emptyblock('script'); ?>
</body>
</html>
