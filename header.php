<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<?php
		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
		wp_head();
	?>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="" />
	<meta name="keywords" content"" />

    <meta property="og:title" content="<?php wp_title(); ?>">
    <meta property="og:image" content="<?php ?>">
    <meta property="og:url" content="<?php bloginfo("url");?>">
    <meta property="og:description" content="">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" media="all" />

	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>/images/favicon.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/images/apple-touch-icon.png" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo("name"); ?> RSS-Feed" href="<?php echo home_url(); ?>/?feed=rss2" />

	<meta name="language" content="deutsch, de" />

	<title><?php wp_title(); ?></title>

</head>

<body <?php body_class(); ?>>

	<div id="wrapall">

		<header id="header" class="noprint">
			<div class="wrap">
			<a href="<?php echo home_url();?>" class="logo"><?php bloginfo('name'); ?></a>
			<?php if( has_nav_menu("main") ): ?>
				<div id="nav">
					<nav class="main">
						<?php wp_nav_menu(array("theme_location"=>"main")); ?>
					</nav>
					<div class="clear"></div>
				</div>
				<?php endif; ?>
			</div>
			<?php if( has_nav_menu("mobile") ): ?>
				<a id="trigger" class="open">
					<span class="ff1"></span>
					<span class="ff2"></span>
					<span class="ff3"></span>
				</a>
				<div id="mobile_menu">
					<a href="<?php echo home_url();?>" class="logo"><img src="<?php echo get_template_directory_uri();?>/images/i-meds-Logo.svg" alt="i-meds"></a>
					<div>
						<?php wp_nav_menu(array("theme_location"=>"main")); ?>
						<?php if( has_nav_menu("secondary") ): ?>
							<?php wp_nav_menu(array("theme_location"=>"secondary")); ?>
						<?php endif; ?>
						<div class="footer">
							<?php if( has_nav_menu("footer") ): ?>
								<?php wp_nav_menu(array("theme_location"=>"footer")); ?>
							<?php endif; ?>
						</div>
					</div>
					<div></div>
				</div>
			<?php endif; ?>
		</header>

		<section id="content" class="clear">
