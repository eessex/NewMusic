(function($) {
	//add ajaxified class
	var siteURL = "http://" + top.location.host.toString();
	$internalLinks = $("a[href^='"+siteURL+"'], a[href^='/'], a[href^='./'], a[href^='../'], a[href^='#']").addClass('ajaxified');
	$noAjax = $('.no-ajax').removeClass("ajaxified")
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

})(jQuery);
