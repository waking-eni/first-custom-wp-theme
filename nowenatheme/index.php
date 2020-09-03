<?php get_header(); ?>

<div>
<nav class="site-nav">
    <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
</nav>

<main>
<?php
if ( have_posts() ) :
    /* Start the Loop */
    while ( have_posts() ) :
        the_post(); 
 
        get_template_part( 'template/content', get_post_type() );
 
    endwhile;
endif;
?>
</main>

<nav class="site-nav">
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>
</div>

<div class="sidebar-column"><!-- sidebar-column -->
    <?php dynamic_sidebar( 'rightsidebar' ) ?>
</div><!-- sidebar-column -->
 
<?php get_footer(); ?>