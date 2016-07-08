(function($) {

  jQuery(window).scroll(function() {
      var height = jQuery(window).scrollTop();

      if(height  > 100) {
        $('header').hide();
        $('header').addClass('sticky');
      } else if (height  < 100){
        $('header').removeClass('sticky');
        $('header').slideDown(200);
      }
  });

})(jQuery);
