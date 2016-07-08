(function($) {
	//add ajaxified class
	var siteURL = "http://" + top.location.host.toString();
	$internalLinks = $("a[href^='"+siteURL+"'], a[href^='/'], a[href^='./'], a[href^='../'], a[href^='#']").addClass('ajaxified');

	//add link behavior
	$(document).on( 'click', 'body a.ajaxified', function( event ) {
		event.preventDefault();
    let theUrl = this['href'];
    let theContainer = $('body main');

    $.ajax({
  		url: theUrl,
  		type: 'post',
  		success: function( result ) {
  			let theContent = $(result).children()[2];
        $(theContainer).hide();
				$('body .header .menu').removeClass('active')
				$('body .sidebar').removeClass('active').hide();
        $(theContainer).html(theContent);
        $(theContainer).fadeIn();
  		}
  	});
	});

	//slide menu/sidebar
	$(document).on( 'click', 'body .header .menu', function( event ) {
		$(this).toggleClass('active');
		$('body .sidebar').toggleClass('active').slideToggle();
	});

})(jQuery);
