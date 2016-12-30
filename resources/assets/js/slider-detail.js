(function($, window, document) {
  var counter = 0;
  var items = $(".hot-item-list").children().length;
  var elementwidth;

  $( ".next" ).click(function() {
    if(counter<items-5){

      elementwidth = $(".hot-item-list li").width();
      $( ".hot-item-list" ).animate({
        marginLeft: "-="+elementwidth +"px",
      }, 500 );
      counter++;

    }
  });

  $( ".prev" ).click(function() {
      if(counter>0){

        elementwidth = $(".hot-item-list li").width();
        $( ".hot-item-list" ).animate({
          marginLeft: "+="+elementwidth +"px",
        }, 500 );
        counter--;

      }
  });

})(jQuery, window, document);
