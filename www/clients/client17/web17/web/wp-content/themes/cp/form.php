<?php
ini_set("display_errors", 0);
error_reporting(0);
/*
Template Name: Formulir
*/
?>
<!Doctype html>
        <html>
            <head>
                <meta charset="utf-8">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <meta name="description" content="Member Area - Forum Komunikasi Kota Serang">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title><?php the_title(); ?> - Forum Komunikasi Kota Serang</title>
                <link rel="stylesheet" href="http://www.komunikasikotaserang.com/wp-content/themes/cp/form.css" />
            </head>
            <body>
      <section class="utama">
<section class="tengah">
        <h1 style="font-size:2em;text-align:center;border-bottom:1px solid #ccc;margin:0 0 10px 0;padding: 0 0 10px 0;"><?php the_title(); ?></h1>
      <?php the_content(); ?>
</section>
  <?php endwhile; ?>
        <div class="spasi"></div>
      </section>
        </body>
        </html>