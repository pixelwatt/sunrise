<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php wp_head(); //Loads head items generated by Wordpress ?>
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body <?php body_class(); ?>>

		<div class="container-fluid">

			<div class="row justify-content-center align-items-center">

				<div class="col-12 col-sm-8 col-md-5 col-lg-4">

					<div class="error404-content text-center">

						<h1>404</h1>
						<h2>Page Not Found</h2>

						<p>We’re sorry, but the page that you’re trying to access has either been moved or does not exist.</p>

						<a href="<?php echo get_site_url(); ?>" class="btn btn-lg btn-primary m-auto">Return To Front</a>

					</div>

				</div>

			</div>

		</div>

		<?php wp_footer(); ?>

	</body>
	
</html>
