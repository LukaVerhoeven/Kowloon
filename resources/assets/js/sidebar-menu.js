(function($, window, document) {

//grow sidebar
$('.menu').click(fullsidebar);
$('.hamburger').click(fullsidebar);

function fullsidebar() {
  $('.full-sidebar').toggleClass('hidden');

}

//sidebar fix
var pageheight = $('body').height()
  $('.full-sidebar').css('height', pageheight);
$( window ).resize(function() {
  var pageheight = $('body').height()
    $('.full-sidebar').css('height', pageheight);
});

//open searchmenu & FAQ menu
$('.escbar a').click(function () {
  $('.searchpage').addClass('hidden');
  $('.FAQ-page').addClass('hidden');
    $('.search').removeClass('searchactive');
    $('.ask').removeClass('askactive');
});
$('.search').click(function () {
  if (!$('.FAQ-page').hasClass('hidden')) {
    $('.FAQ-page').addClass('hidden');
      $('.ask').removeClass('askactive');
  }
  $('.searchpage').toggleClass('hidden');
  $(this).toggleClass('searchactive');
});
$('.ask').click(function () {
  if (!$('.searchpage').hasClass('hidden')) {
    $('.searchpage').addClass('hidden');
    $('.search').removeClass('searchactive');
  }
  $('.FAQ-page').toggleClass('hidden');
  $(this).toggleClass('askactive');
});


//searchmenu click ( enter Icon)
$('.searchdiv input').keyup(function(){
  if( $(this).val().length >=1  ) {
    console.log($(this).val().length);
    $('.searchdiv i').addClass('hidden');
  }else {
    $('.searchdiv i').removeClass('hidden');
  }
});
$('.searchdiv input').focusout(function(){
  if( !$(this).val() ) {

  }
});

////searchmenu reset ( cross Icon)
$('.resultword a').click(function () {
    $('.searchdiv input').val('');
    $('.searchdiv i').removeClass('hidden');
});

//productview  price filter
$('.price-filter-select').click(function (){
  $('.price-filter').toggleClass('hidden');
});
$('.price-filter li a').click(function(){
  var filter = $(this).text();
  $('.price-filter-select option').text(filter);
  $('.price-filter').addClass('hidden');
});

/// exit cookie
$('.escbut').click(function (){
  $('.cookie').addClass('hidden');
});
$('.saveCookie').click(function (){
  document.cookie = "cookie is gezet";
  $('.cookie').addClass('hidden');
});




})(jQuery, window, document);
