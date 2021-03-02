var jQuery_1_11_0= jQuery.noConflict($);
	  jQuery_1_11_0(document).ready(function(_$) {
        $('#autoWidth').lightSlider({
            autoWidth:true,
            loop:true,
            onSliderLoad: function() {
                $('#autoWidth').removeClass('cS-hidden');
            } 
        });  
      });
	  

    jQuery_1_11_0(document).ready(function(_$) {
        var autoplaySlider = jQuery('#autoplay').lightSlider({
            auto:true,
            loop:true,
            pauseOnHover: true,
            onBeforeSlide: function (el) {
                jQuery('#current').text(el.getCurrentSlideCount());
            } 
        });
        jQuery('#total').text(autoplaySlider.getTotalSlideCount());
    });

