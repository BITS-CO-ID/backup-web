<?php get_header(); ?>

<div class="clear"></div>

</header>

<div id="content" class="site-content">
<div class="container">

<div class="content-left-wrap col-md-9">
<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', get_post_format() ); ?>
<?php endwhile; ?>
<?php zerif_paging_nav(); ?>

<?php else : ?>
<?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>

</main>
</div>
</div>

<div class="sidebar-wrap col-md-3 content-left-wrap">
<?php get_sidebar(); ?>
</div>

</div>
<?php get_footer(); ?>