<?php /* Template Name: Kontakt  */ ?>
<?php get_header(); ?>
    
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="contact-header bigtop">
	<div class="container">
		<h2 data-aos="zoom-in" data-aos-once="true">KONTAKT</h2>
        <p data-aos="zoom-in" data-aos-once="true" class="line"></p>
	</div>
</section>

<section>
    <div class="container">
        <ul class="middlecontact" data-aos-once="true" data-aos="fade-down">>

           <li class="contact1">
               <?php include (get_template_directory() . '/templates/category-contact_adress.php'); ?>
           </li>
           <li id="map">
            </li>
        </ul>
    </div>
</section>


<section class="contact ">
	<div class="container">
    
		<div class="bigform" data-aos-once="true" data-aos="fade-down">
            <h3>FORMULARZ KONTAKTOWY</h3>
            <p class="line"></p>
            <?php include (get_template_directory() . '/templates/category-contact_form.php'); ?>
		</div>

	</div>
</section>

 <?php endwhile; endif; ?>


<script>
    google.maps.event.addDomListener(window, 'load', init);

      
      function initMap() {
       var mapOptions =  {
          center: {lat:54.405016, lng: 18.583259},
          zoom: 16,
          gestureHandling: 'cooperative',
          disableDefaultUI: false,
          scrollwheel: false,
           draggable: true,
           
          styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},
          {"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},
          {"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},
          {"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},
          {"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":
          [{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":
          [{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":
          [{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":
          [{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},
          {"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},
          {"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},
          {"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},
          {"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},
          {"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":
          [{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]


        };
        var mapElement = document.getElementById('map');
        var image = "<?php bloginfo('template_directory'); ?>/img/pin2.png";
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(54.405016,18.583259),
                    map: map,
                    title: 'Inion',
                     icon: image,
                     

 });

    // Center map when window resize
    google.maps.event.addDomListener(window, "resize", function() {
        var center = map.getCenter();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center); 
    });

      }
</script>


 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl7Yh-WuDzRxaD0E4mMYXWW5ZM2mtrjKk&callback=initMap"
    async defer></script>

<?php get_footer(); ?>
 