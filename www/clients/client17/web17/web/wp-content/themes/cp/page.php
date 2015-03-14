<?php get_header(); ?>
<section class="detail">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <h2 id="nama"><?php the_title(); ?></h2>
  <main>
    <article class="artikel">
      <?php the_content(); ?>
    </article>
  </main>
  <?php endwhile; ?>
</section>
<section class="bersih"></section>
<?php get_footer(); ?>