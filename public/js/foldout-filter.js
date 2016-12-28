$( document ).ready( function() {
  var button = $('.filter');
  var slider = $('.filterdiv');

  button.on('click', function(e) {

    if ( slider.hasClass('closed') ) {
      slider.toggleClass('closed');
    } else {
      slider.toggleClass('closed');
    }

  });

});
