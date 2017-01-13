
(function($, window, document) {



$( ".smalltile" ).click(function( event ) {
  $('.smalltile .active').removeClass('active');
  $('.smalltile .active-tile').removeClass('active-tile');
    var target = event.target;
    var img = $(target).parent().find('.img-overflow');
    var sourceImg = $('img',img).attr("src");

    img.addClass('active');
    $(target).addClass('active-tile');
    $('.bigtile img').attr('src', sourceImg);
});



})(jQuery, window, document);
