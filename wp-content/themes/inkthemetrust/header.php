<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php str_replace("Skills", "", wp_title(false)); ?> <?php bloginfo('name'); ?> · <?php bloginfo('description'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
	
	<?php $heading_font = of_get_option('ttrust_heading_font'); ?>
	<?php $body_font = of_get_option('ttrust_body_font'); ?>
	<?php $menu_font = of_get_option('ttrust_menu_font'); ?>
	<?php if ($heading_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($heading_font)); ?>:regular,italic,bold,bolditalic" />
	<?php else : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold" />
	<?php endif; ?>
	
	<?php if ($body_font != "" && $body_font != $heading_font) : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($body_font)); ?>:regular,italic,bold,bolditalic" />
	<?php elseif ($heading_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold" />
	<?php endif; ?>
	
	<?php if ($menu_font != "" && $menu_font != $heading_font) : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($menu_font)); ?>:regular,italic,bold,bolditalic" />
	<?php elseif ($heading_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold" />
	<?php endif; ?>
	
	
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Facción Argentina Feed" href="http://faccionlatina.org/feed/?skill=Argentina" />
<link rel="alternate" type="application/atom+xml" title="Facción Bolivia Feed" href="http://faccionlatina.org/feed/?skill=Bolivia" />
<link rel="alternate" type="application/atom+xml" title="Facción Brasil Feed" href="http://faccionlatina.org/feed/?skill=Brasil" />
<link rel="alternate" type="application/atom+xml" title="Facción Chile Feed" href="http://faccionlatina.org/feed/?skill=Chile" />
<link rel="alternate" type="application/atom+xml" title="Facción Costa Rica Feed" href="http://faccionlatina.org/feed/?skill=Costa-Rica" />
<link rel="alternate" type="application/atom+xml" title="Facción Colombia Feed" href="http://faccionlatina.org/feed/?skill=Colombia" />
<link rel="alternate" type="application/atom+xml" title="Facción Ecuador Feed" href="http://faccionlatina.org/feed/?skill=Ecuador" />
<link rel="alternate" type="application/atom+xml" title="Facción España Feed" href="http://faccionlatina.org/feed/?skill=Espana" />
<link rel="alternate" type="application/atom+xml" title="Facción Guatemala Feed" href="http://faccionlatina.org/feed/?skill=Guatemala" />
<link rel="alternate" type="application/atom+xml" title="Facción Honduras Feed" href="http://faccionlatina.org/feed/?skill=Honduras" />
<link rel="alternate" type="application/atom+xml" title="Facción México Feed" href="http://faccionlatina.org/feed/?skill=Mexico" />
<link rel="alternate" type="application/atom+xml" title="Facción Paraguay Feed" href="http://faccionlatina.org/feed/?skill=Paraguay" />
<link rel="alternate" type="application/atom+xml" title="Facción Perú Feed" href="http://faccionlatina.org/feed/?skill=Peru" />
<link rel="alternate" type="application/atom+xml" title="Facción El Salvador Feed" href="http://faccionlatina.org/feed/?skill=El-Salvador" />
<link rel="alternate" type="application/atom+xml" title="Facción Uruguay Feed" href="http://faccionlatina.org/feed/?skill=Uruguay" />
<link rel="alternate" type="application/atom+xml" title="Facción Venezuela Feed" href="http://faccionlatina.org/feed/?skill=Venezuela" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php if (of_get_option('ttrust_favicon') ) : ?>
		<link rel="shortcut icon" href="<?php echo of_get_option('ttrust_favicon'); ?>" />
	<?php endif; ?>
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php wp_head(); ?>	
</head>

<body <?php body_class(); ?> >

<div id="slideNav" class="panel">
	<a href="javascript:jQuery.pageslide.close()" class="closeBtn"></a>								
	
		<?php wp_nav_menu( array('menu_class' => '', 'theme_location' => 'main', 'fallback_cb' => 'default_nav' )); ?>
	
	<?php if(is_active_sidebar('sidebar_slidenav')) : ?>
	<div class="widgets">
		<?php dynamic_sidebar('sidebar_slidenav'); ?>
	</div>
	<?php endif; ?>			
</div>

<div id="container">	
<div id="header">
	<div class="inside clearfix">
							
		<?php $ttrust_logo = of_get_option('logo'); ?>
		<div id="logo">
		<?php if($ttrust_logo) : ?>				
			<h1 class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo $ttrust_logo; ?>" alt="<?php bloginfo('name'); ?>" /></a></h1>
		<?php else : ?>				
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>				
		<?php endif; ?>	
		</div>
		
			<div id="mainNav" class="clearfix">							
			<?php wp_nav_menu( array('menu_class' => 'sf-menu', 'theme_location' => 'main', 'fallback_cb' => 'default_nav' )); ?>			
		</div>
		
		<a href="#slideNav" class="menuToggle"></a>				
		
		<div id="sidebar">
			<?php get_sidebar(); ?>	
		</div>
	</div>	
</div>


<div id="main" class="clearfix">
