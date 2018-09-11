<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

	<div class="hero">
		<div class="container text-white">
			<div class="row">
				<div class="col-12 d-flex mt-3">
					<h6>Shopify</h6>
					<nav>
						<?php html5blank_nav(); ?>
					</nav>
				</div>
				<div class="col-12 col-md-6 col-lg-5">
					<h1 class="hero__title"><?php the_title(); ?></h1>
					<p class="hero__summary">Let your heart be your guide. You can do anything here. So don't worry about it. That's a crooked
						tree. We'll send him to Washington.</p>
				</div>
			</div>
		</div>
	</div>