<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta name="keywords" content="Keywords, Key, Word, Words" /> <!-- EDIT REQUIRED -->
	<meta property="og:title" content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?>" />
	<meta property="og:url" content="http://example.com" /> <!-- EDIT REQUIRED -->
	<meta property="og:image" content="https://example.com/media/holding-logo.png" /> <!-- EDIT REQUIRED -->

	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./style.css">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

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
