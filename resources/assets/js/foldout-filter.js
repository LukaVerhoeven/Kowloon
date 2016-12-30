

(function($, window, document) {


  // var button = $('.filter');
  $( ".filter" ).click(function( event ) {

  var target = event.target;
  var slider = $(target).parent().find('.filterdiv');

  classToggle(slider);


  function classToggle(sliderElement){
    if ( sliderElement.hasClass('closed') ) {
      sliderElement.toggleClass('closed');
    } else {
      sliderElement.toggleClass('closed');
    }
  }

  });



})(jQuery, window, document);
