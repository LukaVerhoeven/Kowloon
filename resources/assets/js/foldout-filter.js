

(function($, window, document) {


  // var button = $('.filter');
  $( ".filter" ).click(function( event ) {

  var target = event.target;
  var slider = $(target).parent().find('.filterdiv');
  var p = $(slider).find('p');
  classToggle(slider, p);


  function classToggle(sliderElement, textElement){
    // if ( sliderElement.hasClass('closed') ) {

      if (p.length > 0) {
        textElement.toggleClass('hidden');
      }
      sliderElement.toggleClass('closed');
    // } else {
    //   sliderElement.toggleClass('closed');
    // }
  }

  });



})(jQuery, window, document);
