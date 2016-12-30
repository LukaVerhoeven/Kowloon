(function($, window, document) {
$( document ).ready(function() {

function collision($div1, $div2) {
      var x1 = $div1.offset().left;
      var w1 = 40;
      var r1 = x1 + w1;
      var x2 = $div2.offset().left;
      var w2 = 40;
      var r2 = x2 + w2;

      if (r1 < x2 || x1 > r2) return false;
      return true;

    }

// // slider call

$( ".min-price" ).change(function() {
  $( "#slider" ).slider( 'values',0,$(this).val());
});
$( ".max-price" ).change(function() {
  $( "#slider" ).slider( 'values',1,$(this).val());
});
$( ".min-price" ).change(function() {
  $( "#slider2" ).slider( 'values',0,$(this).val());
});
$( ".max-price" ).change(function() {
  $( "#slider2" ).slider( 'values',1,$(this).val());
});

$('#slider').slider({
	range: true,
	min: 0.00,
  step: 0.01,
	max: 499.00,
	values: [ 0.00, 499.00 ],
	slide: function(event, ui) {


		$('.ui-slider-handle:eq(0) .price-range-min').html('$' + ui.values[ 0 ]);
    $('.min-price').val( ui.values[ 0 ]);
		$('.ui-slider-handle:eq(1) .price-range-max').html('$' + ui.values[ 1 ]);
    $('.max-price').val( ui.values[ 1 ]);
		$('.price-range-both').html('<i>$' + ui.values[ 0 ] + ' - </i>$' + ui.values[ 1 ] );

		//

    if ( ui.values[0] == ui.values[1] ) {
      $('.price-range-both i').css('display', 'none');
    } else {
      $('.price-range-both i').css('display', 'inline');
    }

        //

		if (collision($('.price-range-min'), $('.price-range-max')) == true) {
			$('.price-range-min, .price-range-max').css('opacity', '0');
			$('.price-range-both').css('display', 'block');
		} else {
			$('.price-range-min, .price-range-max').css('opacity', '1');
			$('.price-range-both').css('display', 'none');
		}

	}
});

$('.ui-slider-range').append('<span class="price-range-both hidden value"><i>$' + $('#slider').slider('values', 0 ) + ' - </i>' + $('#slider').slider('values', 1 ) + '</span>');

$('.ui-slider-handle:eq(0)').append('<span class="price-range-min value hidden">$' + $('#slider').slider('values', 0 ) + '</span>');


$('.ui-slider-handle:eq(1)').append('<span class="price-range-max value hidden">$' + $('#slider').slider('values', 1 ) + '</span>');

$('.ui-slider').append('<div class="ui-widget-content"></div>');

$( ".min-price" ).change(function() {
  $( "#slider2" ).slider( 'values',0,$(this).val());
});
$( ".max-price" ).change(function() {
  $( "#slider2" ).slider( 'values',1,$(this).val());
});
$('#slider2').slider({
	range: true,
	min: 0.00,
  step: 0.01,
	max: 499.00,
	values: [ 0.00, 499.00 ],
	slide: function(event, ui) {


		$('.ui-slider-handle:eq(0) .price-range-min').html('$' + ui.values[ 0 ]);
    $('.min-price').val( ui.values[ 0 ]);
		$('.ui-slider-handle:eq(1) .price-range-max').html('$' + ui.values[ 1 ]);
    $('.max-price').val( ui.values[ 1 ]);
		$('.price-range-both').html('<i>$' + ui.values[ 0 ] + ' - </i>$' + ui.values[ 1 ] );

		//

    if ( ui.values[0] == ui.values[1] ) {
      $('.price-range-both i').css('display', 'none');
    } else {
      $('.price-range-both i').css('display', 'inline');
    }

        //

		if (collision($('.price-range-min'), $('.price-range-max')) == true) {
			$('.price-range-min, .price-range-max').css('opacity', '0');
			$('.price-range-both').css('display', 'block');
		} else {
			$('.price-range-min, .price-range-max').css('opacity', '1');
			$('.price-range-both').css('display', 'none');
		}

	}
});

$('.ui-slider-range').append('<span class="price-range-both hidden value"><i>$' + $('#slider2').slider('values', 0 ) + ' - </i>' + $('#slider2').slider('values', 1 ) + '</span>');

$('.ui-slider-handle:eq(0)').append('<span class="price-range-min value hidden">$' + $('#slider2').slider('values', 0 ) + '</span>');


$('.ui-slider-handle:eq(1)').append('<span class="price-range-max value hidden">$' + $('#slider2').slider('values', 1 ) + '</span>');

$('.ui-slider').append('<div class="ui-widget-content"></div>');

$( ".min-price" ).change(function() {
  $( "#slider2" ).slider( 'values',0,$(this).val());
});
$( ".max-price" ).change(function() {
  $( "#slider2" ).slider( 'values',1,$(this).val());
});
});
})(jQuery, window, document);
