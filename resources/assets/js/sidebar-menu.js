(function($, window, document) {


$('.menu').click(function () {
if ($( ".full-sidebar" ).hasClass( "hidden" )) {
  $('.full-sidebar').removeClass('hidden');
}else {
  $('.full-sidebar').addClass('hidden');
}

})

var pageheight = $('body').height()
  $('.full-sidebar').css('height', pageheight);
$( window ).resize(function() {
  var pageheight = $('body').height()
    $('.full-sidebar').css('height', pageheight);
});


})(jQuery, window, document);
