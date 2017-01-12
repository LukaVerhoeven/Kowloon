(function($, window, document) {

  if (document.cookie.indexOf("visited") <= 0) {
    // first time here
    $('.cookie').removeClass('hidden');
    
    }



  /// exit cookie menu & set cookie
  $('.escbut').click(function (){
    $('.cookie').addClass('hidden');
  });
  $('.saveCookie').click(function (){
    // set a new cookie
    expiry = new Date();
    expiry.setTime(expiry.getTime()+(10*60*1000));
    document.cookie = "visited=yes; expires=" + expiry.toGMTString();
    $('.cookie').addClass('hidden');
  });


})(jQuery, window, document);
