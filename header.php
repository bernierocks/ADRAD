<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-precomposed.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/uikit/2.22.0/css/uikit.min.css">
        <link href="<?php echo get_template_directory_uri(); ?>/css/main.css" rel="stylesheet"/>
        <script src="https://cdn.jsdelivr.net/uikit/2.22.0/js/uikit.min.js"></script>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
        
    <div class="top-header">
        <div class="container"> 
            <div class="row">  
            <div class="small-12 large-12 columns">   
                <ul class="inline-list">   
                    <li><a href="#" alt=""><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-phone.png">Call 0800 JUMP ME</a></li>
                    <li><a href="#" alt="">book online</a></li>
                </ul>
            </div><!-- /.large12-->
                </div><!-- /.row -->
        </div><!-- /.container -->    
    </div><!-- /.top-header -->    
        
	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<?php

		if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) :
		get_template_part( 'parts/off-canvas-menu' );
		endif;
	?>

	<div class="mid-header">
        <div class="row">  
            <div class="small-12 large-3 columns">   
                <a href="<?php echo get_site_url(); ?>" alt="<?php bloginfo('name'); ?> Official Logo"><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"></a>
            </div><!-- /.large12-->
        </div><!-- /.row -->
            
    </div><!-- /.mid-header -->

<section class="container" role="document">
	<?php do_action( 'foundationpress_after_header' ); ?>
