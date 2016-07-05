(function($) {
	$(document).on( 'click', 'body .ajaxified a', function( event ) {
		event.preventDefault();

    let theUrl = this['href'];
    let theContainer = $('body main');

    $.ajax({
  		url: theUrl,
  		type: 'post',
  		success: function( result ) {
  			let theContent = $(result).children()[1];
        $(theContainer).hide();
        $(theContainer).html(theContent);
        $(theContainer).fadeIn();
  		}
  	});
	});
})(jQuery);
