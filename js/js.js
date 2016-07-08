(function($) {
	//add ajaxified class
  teaserStriping()
})(jQuery);

function isOdd(num) { return num % 2;}

function teaserStriping() {
  var $teasers = jQuery('a.post.teaser')
  $teasers.each(function (i, value) {
  if(!isOdd(i)) {
    // debugger
    jQuery(value).addClass('odd');
  }
    // console.log( i );
 });
}
