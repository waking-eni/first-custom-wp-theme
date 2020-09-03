<?php
/**
 * 
 * HEADER template file
 * 
 * @package Nowena Theme  
 */
?>
 
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
 
    <header class="site-header">
        <div class="site-logo"> 
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo('name'); ?>"> 
                <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" style="width:800px;"> 
            </a>
            <div>
            <a href="https://www.pexels.com/photo/geometric-decoration-5836/" title="Image Source"
                style="float:right;font-size:small;" target="_blank">Image Source</a> 
            </div>
        </div><!-- end .logo -->
        <h1 class="site-name"><?php bloginfo('name'); ?></h1>
        <p class="site-description"><?php bloginfo('description'); ?></p>
    </header>
     
    
 
    <div class="central">
	