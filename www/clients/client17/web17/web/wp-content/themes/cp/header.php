<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="no-js ie ie6 lte7 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7 ]>
<html class="no-js ie ie7 lte7 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie ie8 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie ie9 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>>
<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>>
<!--<![endif]-->
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title( '-', true, 'right' ); ?></title>
    <?php wp_head(); ?>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
    <![endif]-->
    <!-- <link rel="shortcut icon" href="favicon.ico"> -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href='http://fonts.googleapis.com/css?family=News+Cycle:400,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function()
      {
          $("#slider1").tinycarousel({ interval: true });
          var slider1 = $("#slider1").data("plugin_tinycarousel");
      });
      $(document).ready(function(){
        $('.bxslider').bxSlider({
          mode: 'fade',
          auto: true,
          pager: false,     
          captions: true
        });
      });
    </script>
  </head>
  <body>
    <header class="logo">
        <section class="undangan">
          <a href="http://www.komunikasikotaserang.com/formulir-pendaftaran" target="_blank">Daftarkan Perusahaan Anda</a>
        </section>
      <section id="ujung">
        <section class="foto">
          <div id="slider1">
            <div class="viewport">
              <ul class="overview">
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/cecep.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/zakaria.png" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/ihya.png" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/samsul.png" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/safron.png" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/agung.png" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/rahmat.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/firman.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/edlin.png" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/dika.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/erawan.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/lukas.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/denih.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/denil.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/trisno.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/dodi.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/rahman.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/wawan.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/wisnu.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/andri.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/ari.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/awaru.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/fathi.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/fitri.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/suwarno.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/teguh.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/rohman.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/nana.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/rahman.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/ridwan.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/evrita.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/yolanda.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/mira.jpg" alt="foto" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/nunik.jpg" alt="foto" /></li>
              </ul>
            </div>
          </div>
        </section>
      </section>
    </header>
    <nav class="menu">
      <?php wp_nav_menu( array( 'menu' => 'primary', 'menu_id' => 'menu', 'menu_class' => '', 'container' => false, 'depth' => 0 ) ); ?>
    </nav>
    <section class="bersih"></section>
    <section class="bar">
      <section class="pengunjung">Anda Pengunjung ke : <?php pvc_stats_update( $postid, 1 ); ?> </section>
      <section class="donasi">Donasi : Mandiri A/N Cecep Zaenal Muttaqin / Fransiskus Firman PR  1630001168734</section>
    </section>
    <section class="bersih"></section>
    <nav class="accordion">
      <h2>Apotik & Klinik</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/klinik-jannah.aspx"><h3>Klinik Jannah</h3></a>
        <a href="http://www.komunikasikotaserang.com/apotik-klinik-others.aspx"><h3>Apotik & Klinik Lainnya</h3></a>
      </div>
      <h2>Asuransi</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/asuransi-others.aspx"><h3>Asuransi Lainnya</h3></a>
      </div>
      <h2>Bank</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/bank-others.aspx"><h3>Bank Lainnya</h3></a>
      </div>
      <h2>Bengkel</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/bengkel-others.aspx"><h3>Bengkel Lainnya</h3></a>
      </div>
      <h2>Distributor</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/distributor-others.aspx"><h3>Distributor Lainnya</h3></a>
      </div>
      <h2>Elektronik</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/elektronik-others.aspx"><h3>Elektronik Lainnya</h3></a>
      </div>
      <h2>Hiburan</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/safana-cafe-resto-and-family-karaoke-tv.aspx"><h3>Safana Karaoke</h3></a>
        <a href="http://www.komunikasikotaserang.com/hiburan-others.aspx"><h3>Hiburan Lainnya</h3></a>
      </div>
      <h2>Hotel</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/le-dian-hotel-cottages.aspx"><h3>Le Dian</h3></a>
        <a href="http://www.komunikasikotaserang.com/ratu-hotel-bidakara.aspx"><h3>Ratu Bidakara</h3></a>
        <a href="http://www.komunikasikotaserang.com/hotel-others.aspx"><h3>Hotel Lainnya</h3></a>
      </div>
      <h2>Jasa</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/banten-it-solutions-it-consultant.aspx"><h3>Banten IT Solutions</h3></a>
        <a href="http://www.komunikasikotaserang.com/jasa-others.aspx"><h3>Jasa Lainnya</h3></a>
      </div>
      <h2>Kampus</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/kampus-others.aspx"><h3>Kampus Lainnya</h3></a>
      </div>
      <h2>Komputer</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/banten-it-solutions-it-consultant.aspx"><h3>Banten IT Solutions</h3></a>
        <a href="http://www.komunikasikotaserang.com/komputer-others.aspx"><h3>Komputer Lainnya</h3></a>
      </div>
      <h2>Kontruksi</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/pt-gooyang-sw.aspx"><h3>Gooyang SW</h3></a>
        <a href="http://www.komunikasikotaserang.com/kontruksi-others.aspx"><h3>Kontruksi Lainnya</h3></a>
      </div>
      <h2>Koperasi</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/koperasi-others.aspx"><h3>Koperasi Lainnya</h3></a>
      </div>
      <h2>Man Power</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/pt-haleyora-power.aspx"><h3>Haleyora Power</h3></a>
        <a href="http://www.komunikasikotaserang.com/pt-swakarya-insan-mandiri.aspx"><h3>Swakarya Insan Mandiri</h3></a>
        <a href="http://www.komunikasikotaserang.com/man-power-others.aspx"><h3>Man Power Lainnya</h3></a>
      </div>
      <h2>Minimarket</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/pt-sumber-alfaria-trijaya-tbk-alfamart-serang.aspx"><h3>Alfamart</h3></a>
        <a href="http://www.komunikasikotaserang.com/aneka-swalayan.aspx"><h3>Aneka Swalayan</h3></a>
        <a href="http://www.komunikasikotaserang.com/giant-ekstra-serang.aspx"><h3>Giant Ekstra</h3></a>
        <a href="http://www.komunikasikotaserang.com/giant-ekspres-syafei-serang.aspx"><h3>Giant Express</h3></a>
        <a href="http://www.komunikasikotaserang.com/pt-matahari-putra-prima-tbk-hypermart-serang.aspx"><h3>Hypermart</h3></a>
        <a href="http://www.komunikasikotaserang.com/minimarket-others.aspx"><h3>Minimarket Lainnya</h3></a>
      </div>
      <h2>Mobil</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/honda-auto-serang.aspx"><h3>Honda</h3></a>
        <a href="http://www.komunikasikotaserang.com/pt-radita-autoprima-kia-motors-serang.aspx"><h3>KIA</h3></a>
        <a href="http://www.komunikasikotaserang.com/pt-astra-internasional-auto-2000-serang.aspx"><h3>Toyota</h3></a>
        <a href="http://www.komunikasikotaserang.com/mobil-others.aspx"><h3>Mobil Lainnya</h3></a>
      </div>
      <h2>Motor</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/motor.aspx"><h3>Motor Lainnya</h3></a>
      </div>
      <h2>Oleh-Oleh</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/aneka-swalayan.aspx"><h3>Aneka Swalayan</h3></a>
        <a href="http://www.komunikasikotaserang.com/oleh-oleh-others.aspx"><h3>Oleh-Oleh Lainnya</h3></a>
      </div>
      <h2>Pembiayaan</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/pt-adira-finance-serang-2-mobil.aspx"><h3>Adira (Mobil)</h3></a>
        <a href="http://www.komunikasikotaserang.com/bussan-auto-finance.aspx"><h3>BAF</h3></a>
        <a href="http://www.komunikasikotaserang.com/fifgroup-serang.aspx"><h3>FIFGroup</h3></a>
        <a href="http://www.komunikasikotaserang.com/verena-multi-finance.aspx"><h3>Verena Multi Finance</h3></a>
        <a href="http://www.komunikasikotaserang.com/pembiayaan-others.aspx"><h3>Pembiayaan Lainnya</h3></a>
      </div>
      <h2>Percetakan</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/qienzu-putri-digital-printing.aspx"><h3>Qienzu Putri</h3></a>
        <a href="http://www.komunikasikotaserang.com/raja-cetak.aspx"><h3>Raja Cetak</h3></a>
        <a href="http://www.komunikasikotaserang.com/percetakan-others.aspx"><h3>Percetakan Lainnya</h3></a>
      </div>
      <h2>Peternakan</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/peternakan-others.aspx"><h3>Peternakan Lainnya</h3></a>
      </div>
      <h2>Property</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/pt-grahamitra-sukses-serang-city.aspx"><h3>Serang City</h3></a>
        <a href="http://www.komunikasikotaserang.com/property-others.aspx"><h3>Property Lainnya</h3></a>
      </div>
      <h2>Restoran</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/kfc-serang.aspx"><h3>KFC</h3></a>
        <a href="http://www.komunikasikotaserang.com/restoran-others.aspx"><h3>Safana Resto</h3></a>
        <a href="http://www.komunikasikotaserang.com/sambara-resto.aspx"><h3>Sambara Resto</h3></a>
        <a href="http://www.komunikasikotaserang.com/warung-mie-edan.aspx"><h3>Warung Mie Edan</h3></a>
        <a href="http://www.komunikasikotaserang.com/restoran-others.aspx"><h3>Restoran Lainnya</h3></a>
      </div>
      <h2>Rumah Sakit</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/rumah-sakit-ibu-dan-anak-budiasih.aspx"><h3>RS Budiasih</h3></a>
        <a href="http://www.komunikasikotaserang.com/rumah-sakit-sari-asih.aspx"><h3>RS Sari Asih</h3></a>
        <a href="http://www.komunikasikotaserang.com/rumah-sakit-others.aspx"><h3>Rumah Sakit Lainnya</h3></a>
      </div>
      <h2>Sekolah</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/al-azhar-serang.aspx"><h3>Yayasan Al Azhar</h3></a>
        <a href="http://www.komunikasikotaserang.com/sekolah-others.aspx"><h3>Sekolah Lainnya</h3></a>
      </div>
      <h2>SPBE</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/pt-erawan-multi-perkasa-abadi.aspx"><h3>PT. Erawan</h3></a>
        <a href="http://www.komunikasikotaserang.com/pt-gas-bumi.aspx"><h3>PT. Gas Bumi</h3></a>
        <a href="http://www.komunikasikotaserang.com/spbe-others.aspx"><h3>SPBE Lainnya</h3></a>
      </div>
      <h2>SPBU</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/spbu-others.aspx"><h3>SPBU Lainnya</h3></a>
      </div>
      <h2>Supermarket</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/pt-carrefour-indonesia.aspx"><h3>Carrefour</h3></a>
        <a href="http://www.komunikasikotaserang.com/giant-ekstra-serang.aspx"><h3>Giant Ekstra</h3></a>
        <a href="http://www.komunikasikotaserang.com/giant-ekspres-syafei-serang.aspx"><h3>Giant Express</h3></a>
        <a href="http://www.komunikasikotaserang.com/pt-matahari-putra-prima-tbk-hypermart-serang.aspx"><h3>Hypermart</h3></a>
        <a href="http://www.komunikasikotaserang.com/pt-lotte-mart-serang.aspx"><h3>Lotte Mart</h3></a>
        <a href="http://www.komunikasikotaserang.com/pt-matahari-department-store-mds-serang-mall.aspx"><h3>Matahari</h3></a>
        <a href="http://www.komunikasikotaserang.com/supermarket-others.aspx"><h3>Supermarket Lainnya</h3></a>
      </div>
      <h2>Supplier</h2>
      <div>
        <a href="http://www.komunikasikotaserang.com/pt-fastrata-buana.aspx"><h3>Fastrata Buana</h3></a>
        <a href="http://www.komunikasikotaserang.com/pt-rajawali-nusindo.aspx"><h3>Rajawali Nusindo</h3></a>
        <a href="http://www.komunikasikotaserang.com/sosro-serang.aspx"><h3>Sosro</h3></a>
        <a href="http://www.komunikasikotaserang.com/pt-sumber-cipta-multi-niaga.aspx"><h3>Sumber Cipta Multiniaga</h3></a>
        <a href="http://www.komunikasikotaserang.com/supplier-others.aspx"><h3>Supplier Lainnya</h3></a>
      </div>
    </nav>