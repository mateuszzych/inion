/**
     * Jeśli przewiniesz niżej niż 140px i dla szerokości wiekszych niż 768px, dodaj atrybut fixed do menu.
     */

jQuery( document ).ready(function() {
	jQuery(window).bind('scroll', function () {
		if (jQuery(window).scrollTop() > 140 && jQuery(window).width() > 768){
			jQuery('.navbar').addClass('fixed');
			jQuery('body').css( {'padding-top' : 92});
		} else {
			jQuery('.navbar').removeClass('fixed');
			jQuery('body').css( {'padding-top' : 0});
		}
	});
	
AOS.init({
      duration: 1200,
    });

});

//////////////////////////

var $ = jQuery.noConflict();
jQuery(document).ready(function( $ ){
    scrollToTop.init( );
});

var scrollToTop =
{
    /**
     * Kiedy ze scrollujesz na na wiecej niz 800px w dół pojawi się element w prawym dolnym rogu.
     */
    init: function(  ){

        $(window).scroll(function(){
            if ($(this).scrollTop() > 800) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });

        // po naciśnieiu przewiń do góry
        $('.scrollToTop').click(function(){
            $('html, body').animate({scrollTop : 0},800);
            return false;
        });
    }
};

////////////////////////////////




