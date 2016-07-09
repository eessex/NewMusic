(function($) {

  //slide menu/sidebar
  $(document).on( 'click', 'body .header .menu', function( event ) {
    $('body .sidebar').toggleClass('active').slideToggle();
    $(this).siblings('.title').toggle();
    $(this).toggleClass('active');
  });

  //reveal search bar in header
  $(document).on( 'click', 'body .header .search', function( event ) {
    $(this).toggleClass('active');
    $(this).children('i').toggleClass('fa-times');
    $('#header-search').toggleClass('active');
  });

  // menu is sticky when scrolled
  jQuery(window).scroll(function() {
      var height = jQuery(window).scrollTop();
      if(height  > 600) {
        $('header').hide();
        $('header').addClass('sticky');
      } else if (height  < 600){
        $('header').removeClass('sticky');
        $('header').slideDown(300);
      }
  });

})(jQuery);
