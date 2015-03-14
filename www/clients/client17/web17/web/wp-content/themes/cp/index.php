<?php get_header(); ?>
<section class="peta">
  <div class="slider" style="float:left;width:55%;text-align:center">
      <ul class="bxslider">
        <li><img src="http://www.komunikasikotaserang.com/wp-content/uploads/fotosatu.jpg" title="Rapat Launching Website - Sambara Resto Serang" /></li>
        <li><img src="http://www.komunikasikotaserang.com/wp-content/uploads/fotodua.jpg" title="Lunch - Sambara Resto Serang" /></li>
        <li><img src="http://www.komunikasikotaserang.com/wp-content/uploads/fototiga.jpg" title="Rapat Launching Website - Sambara Resto Serang" /></li>
        <li><img src="http://www.komunikasikotaserang.com/wp-content/uploads/fotodelapan.jpg" title="Bimtek Disnaker Kota Serang - Hotel Jayakarta Anyer" /></li>
        <li><img src="http://www.komunikasikotaserang.com/wp-content/uploads/fotoempat.jpg" title="Suasana Setelah Bakar Cumi - Hotel Jayakarta Anyer" /></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/e.jpg" title="Lunch - Restoran Jayakarta Anyer" /></li>
        <li><img src="http://www.komunikasikotaserang.com/wp-content/uploads/fotolima.jpg" title="Rapat Pembentukan Pengurus Dan Penyusunan Agenda Kerja - Safana Resto" /></li>
        <li><img src="http://www.komunikasikotaserang.com/wp-content/uploads/fototujuh.jpg" title="Pembuatan Rekening - Bank Mandiri Serang" /></li>
        <li><img src="http://www.komunikasikotaserang.com/wp-content/uploads/fotoenam.jpg" title="Pembangunan Website www.komunikasikotaserang.com" /></li>
      </ul>
  </div>
  <div class="slider" style="float:left;width:45%">
<a href="http://www.komunikasikotaserang.com/hubungi-kami"><img src="http://www.komunikasikotaserang.com/wp-content/uploads/donor.jpg" alt="iklan" width="300px" style="padding-left:40px"/></a>
  </div>
<div class="bersih"></div>

  <div class="slider" style="float:left;width:55%;text-align:center">
  <h1 class="direktori">Direktori 500 Alamat Perusahaan Di Kota Serang</h1>
  <div id="map_canvas"></div>
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script>
    function initialize() {
      var map_canvas = document.getElementById('map_canvas');
      var map_options = {
        center: new google.maps.LatLng(-6.119712, 106.146171,187),
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(map_canvas, map_options)
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  </div>
  <div class="slider" style="float:left;width:44.5%;margin-left:0.5%;">
<a href="http://www.komunikasikotaserang.com/hubungi-kami"><img src="http://www.komunikasikotaserang.com/wp-content/uploads/iklan-dua.jpg" alt="iklan" /></a>
<a href="http://www.komunikasikotaserang.com/hubungi-kami"><img src="http://www.komunikasikotaserang.com/wp-content/uploads/iklan-satu.jpg" alt="iklan" /></a>
  </div>
</section>
<section class="bersih"></section>
<section class="formulir">
  <p>WEBSITE INI MASIH DALAM TAHAP PENGEMBANGAN.</p>
</section>
<section class="bersih"></section>
<?php get_footer(); ?>