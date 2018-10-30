		

        </main><!-- ##################### END: MAIN ##################### -->



<footer>

    <div class="footer-content">
        <?php dynamic_sidebar( 'footer' ); ?>  
    </div>

    <a href="#" class="scrollToTop" style="display: block;"></a>
</footer>

<?php wp_footer(); ?>

	</div><!--body-->


</body>
</html>


<script type="text/javascript">


//GALERY SLIRED
$('#gallery').owlCarousel({
    loop: true,
    margin: 10,
    nav:true,
    merge: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});

</script>



<script type="text/javascript">

    //PARTNERS SLIRED
    $('#partners').owlCarousel({
    loop: true,
    margin: 10,
    merge: true,
    autoplay: true,
    autoplayTimeout:2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});

</script>



<script>

    //FLIP BOX
    $(document).ready(function(){
        // set up hover panels
        // although this can be done without JavaScript, we've attached these events
        // because it causes the hover to be triggered when the element is tapped on a touch device
        $('.hover').hover(function(){
            $(this).addClass('flip');
        },function(){
            $(this).removeClass('flip');
        });
    });



    // COUNT NUMBER SCRIPT (donation)
    $('.count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 2000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });




    // BACK TO TOP
    $(document).ready(function(){

        //Check to see if the window is top if not then display button
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });

        //Click event to scroll to top
        $('.scrollToTop').click(function(){
            $('html, body').animate({scrollTop : 0},800);
            return false;
        });

    });



    // HAMBURGER MENU TOGGLE 

    $('#toggle').click(function() {
      $(this).toggleClass('change');
      $('#overlay').toggleClass('open').show();
    });

    $('#overlay ul li a').on('click', function(){
      $('#overlay').hide();
      $('#overlay').toggleClass('open');
      $('#toggle').removeClass("change");
    });




  AOS.init({
    delay: 200,
    duration: 1400
  });

</script>





<!-- ******************* GOOGLE MAP SCRIPT ******************* -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABdwewAVweKcBQbubJapqLfLW-4RJ9Abk"></script>
<script type="text/javascript">
(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type    function
*  @date    8/11/2013
*  @since   4.3.0
*
*  @param   $el (jQuery element)
*  @return  n/a
*/

function new_map( $el ) {
    
    // var
    var $markers = $el.find('.marker');
    
    
    // vars
    var args = {
        zoom        : 16,
        center      : new google.maps.LatLng(0, 0),
        mapTypeId   : google.maps.MapTypeId.ROADMAP
    };
    
    
    // create map               
    var map = new google.maps.Map( $el[0], args);
    
    
    // add a markers reference
    map.markers = [];
    
    
    // add markers
    $markers.each(function(){
        
        add_marker( $(this), map );
        
    });
    
    
    // center map
    center_map( map );
    
    
    // return
    return map;
    
}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type    function
*  @date    8/11/2013
*  @since   4.3.0
*
*  @param   $marker (jQuery element)
*  @param   map (Google Map object)
*  @return  n/a
*/

function add_marker( $marker, map ) {

    // var
    var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

    // create marker
    var marker = new google.maps.Marker({
        position    : latlng,
        map         : map
    });

    // add to array
    map.markers.push( marker );

    // if marker contains HTML, add it to an infoWindow
    if( $marker.html() )
    {
        // create info window
        var infowindow = new google.maps.InfoWindow({
            content     : $marker.html()
        });

        // show info window when marker is clicked
        google.maps.event.addListener(marker, 'click', function() {

            infowindow.open( map, marker );

        });
    }

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type    function
*  @date    8/11/2013
*  @since   4.3.0
*
*  @param   map (Google Map object)
*  @return  n/a
*/

function center_map( map ) {

    // vars
    var bounds = new google.maps.LatLngBounds();

    // loop through all markers and create bounds
    $.each( map.markers, function( i, marker ){

        var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

        bounds.extend( latlng );

    });

    // only 1 marker?
    if( map.markers.length == 1 )
    {
        // set center of map
        map.setCenter( bounds.getCenter() );
        map.setZoom( 16 );
    }
    else
    {
        // fit to bounds
        map.fitBounds( bounds );
    }

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type    function
*  @date    8/11/2013
*  @since   5.0.0
*
*  @param   n/a
*  @return  n/a
*/
// global var
var map = null;

$(document).ready(function(){

    $('.acf-map').each(function(){

        // create map
        map = new_map( $(this) );
    });

});

})(jQuery);


</script>
