(function($, window, document) {
  var counter = 0;
  var items = $(".hot-item-list:first-child").children().length;
  var elementwidth;
  var lastScroll = false;
  var lastScrollback = false;

  $( ".next" ).click(function() {
  // scroll to the next list item
    if(counter<items-5){

      elementwidth = $(".hot-item-list li").width();
      $( ".hot-item-list" ).animate({
        marginLeft: "-="+elementwidth +"px",
      }, 500 );
      counter++;

  // scroll the last half item
      if (counter===items-5) {
        lastScroll = true;
      }
    }else if (lastScroll) {
      lastScroll = false;
      lastScrollback = true;

      elementwidth = $(".hot-item-list li").width();
      $( ".hot-item-list" ).animate({
        marginLeft: "-="+elementwidth/1.7 +"px",
      }, 500 );

    }

  });


  $( ".prev" ).click(function() {
      if(counter>0){
    // scrollback the last half item
        if (lastScrollback) {
          lastScrollback = false;
          elementwidth = $(".hot-item-list li").width();
          $( ".hot-item-list" ).animate({
            marginLeft: "+="+elementwidth/1.7 +"px",
          }, 500 );
        }else{
    //scroll back one list item
        elementwidth = $(".hot-item-list li").width();
        $( ".hot-item-list" ).animate({
          marginLeft: "+="+elementwidth +"px",
        }, 500 );
        counter--;
      }

      }
  });

})(jQuery, window, document);
