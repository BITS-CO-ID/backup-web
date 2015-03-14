<?php
ini_set("display_errors", 0);
error_reporting(0);
/*
Template Name: Formulir Pendaftaran
*/
?>
<!Doctype html>
        <html>
            <head>
                <meta charset="utf-8">
                <meta name="description" content="Formulir Pendaftaran Forum Komunikasi Kota Serang">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Formulir Pendaftaran Forum Komunikasi Kota Serang</title>
                <link rel="stylesheet" href="http://www.komunikasikotaserang.com/wp-content/themes/cp/form.css" />
            </head>
            <body>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <section class="utama">
<section class="tengah">
        <h1 style="font-size:2em;text-align:center;border-bottom:1px solid #ccc;margin:0 0 10px 0;padding: 0 0 10px 0;">Formulir Pendaftaran</h1>
      <?php the_content(); ?>
</section>
  <?php endwhile; ?>
        <div class="spasi"></div>
      </section>
        </body>
        </html>