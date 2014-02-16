<?php 
	include 'manager/BaseTemplate.php';
	startblock('format');
?>

<div id="container">
	<div id="wrap">
		<header class="navbar navbar-inverse navbar-static-top" role="navigation">
			<nav class="container">
				<div class="navbar-header">
					<button data-target="#sidr" id="sider" class="navbar-device hidden-lg" data-toggle="button"> <i class="fa fa-bars"></i> </button>			
					<a class="navbar-brand" href="./">H5Strap 5.0</a>
				</div>
	      <ul class="nav navbar-nav navbar-right hidden-md hidden-sm">
	        <li class="active"><a href="./">What's New?</a></li>
	        <li><a href="http://getbootstrap.com/">Bootstrap 3.1.1</a></li>
	        <li><a href="http://fontawesome.io">FontAwesome 4.0.3</a></li>
	        <li><a href="http://arshaw.com/phpti/">PHP Inheritance</a></li>
	      </ul>

			</nav>
		</header>
		<div id="main" role="main">
			<?php emptyblock('content'); ?>
		</div>
	</div>
	<footer>
		<div class="container">
			&copy; <?php echo date('Y'); ?>. Mark Joseph Rivera | iMarkDesigns. All Rights Reserved.
		</div>
	</footer>
</div>

<?php endblock(); ?>