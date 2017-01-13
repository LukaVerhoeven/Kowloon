
(function($, window, document) {

  var $wrapper = $('.hot-item-list');
  var $sortItems= "li"
  var filter = [];

  const filtermenu = {

      cathegory: function () {
        //Setup FILTER
          sortId = $(this).attr('id');
          var i = 0;
          var IndexOfIdInFilter = filter.indexOf(sortId);
          addfilter = false;
          //check if the ID is already in the array "filter"
          do {
            if (filter.length == 0) {
              filter.push(sortId);
            }else if (IndexOfIdInFilter > -1) {
              //if ID is already in filter we need to remove it
              filter.splice(IndexOfIdInFilter, 1);
            }else{
              addfilter = true;
            }
            i++;
          } while (i < filter.length);
          //if it's not we cann add it to the array "filter"
          if (addfilter) {
            filter.push(sortId);
            addfilter = false;
          }

        //SETUP LIST ITEMS
        $($sortItems, $wrapper).each(function ( index) {

            var listItem = $('li:eq('+index+')', $wrapper);
            var listData = listItem.data('cathegory').toString();
            var allCathegories = listData.split(" ");
            var j = 0;
            var HideItem = true;
            do {

              if (filter.length == 0) {
                //no filter => show all items
                HideItem = false;
              }else{
                //if attribute is not in the filter array => hide it
                for (var k = 0; k < allCathegories.length; k++) {
                  if (allCathegories[k]==filter[j]) {
                    HideItem = false;
                  }
                }
              }
              j++;
            } while (j < filter.length);

            if (HideItem) {
              listItem.hide();
              HideItem = true;
            }else {
              listItem.show();
            }

        });
      },
      Latest: function () {
        $wrapper.find($sortItems).sort(function(a,b){
        var date1  = $(a).data("date");
        date1 = date1.split('-');
        date1 = date1[0] +date1[1] -1 + date1[2];
        var date2  = $(b).data("date");
        date2= date2.split('-');
        date2= date2[0] +date2[1] -1 + date2[2];
        return date1 < date2 ? 1 : -1;
        }).each(function(){
            $wrapper.prepend(this);
        });
      },
      Oldest: function () {
        $wrapper.find($sortItems).sort(function(a,b){
        var date1  = $(a).data("date");
        date1 = date1.split('-');
        date1 = date1[0] +date1[1] -1 + date1[2];
        var date2  = $(b).data("date");
        date2= date2.split('-');
        date2= date2[0] +date2[1] -1 + date2[2];
        return date1 > date2 ? 1 : -1;
        }).each(function(){
            $wrapper.prepend(this);
        });
      },
      LowHigh: function () {


          $wrapper.find($sortItems).sort(function (a, b) {
            console.log();
            var textA = $(a).find('.prijs').text().substring(2);
            var textB = $(b).find('.prijs').text().substring(2);
            return (textA < textB) ? -1 : (textA > textB) ? 1 : 0;
          })
          .appendTo( $wrapper );

      },
      HighLow: function () {


          $wrapper.find($sortItems).sort(function (a, b) {
            console.log();
            var textA = $(a).find('.prijs').text().substring(2);
            var textB = $(b).find('.prijs').text().substring(2);
            return (textA > textB) ? -1 : (textA < textB) ? 1 : 0;
          })
          .appendTo( $wrapper );

      },
      PriceRange: function () {
        var $min = $('#min-price').val();
        var $max = $('#max-price').val();
        console.log($max);
        $($sortItems, $wrapper).each(function (index) {
            var listItem = $('li:eq('+index+')', $wrapper);
            var Price = $('.prijs', listItem).text().substring(2);
            if (Price >= $min && Price <= $max) {
              listItem.show();
            }else {
              listItem.hide();
            }
        });
      }
    }






  $('.checkboxlist label').click(filtermenu.cathegory);
  $('#latest').click(filtermenu.Latest);
  $('#oldest').click(filtermenu.Oldest);
  $('#lowhigh').click(filtermenu.LowHigh);
  $('#highlow').click(filtermenu.HighLow);
  $('.slider span').on('click', filtermenu.PriceRange);
  $('.slider').on('click', filtermenu.PriceRange);
  $('#min-price').on('focusout', filtermenu.PriceRange);
  $('#max-price').on('focusout', filtermenu.PriceRange);



})(jQuery, window, document);
