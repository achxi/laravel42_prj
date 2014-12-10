/*price range*/

 $('#sl2').slider();

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};	
		
/*scroll to top*/

$(document).ready(function(){
	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', // Element ID
	        scrollDistance: 300, // Distance from top/bottom before showing element (px)
	        scrollFrom: 'top', // 'top' or 'bottom'
	        scrollSpeed: 300, // Speed back to top (ms)
	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
	        animation: 'fade', // Fade, slide, none
	        animationSpeed: 200, // Animation in speed (ms)
	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
					//scrollTarget: false, // Set a custom target element for scrolling to the top
	        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
	        scrollTitle: false, // Set a custom <a> title if required.
	        scrollImg: false, // Set true to use image
	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	        zIndex: 2147483647 // Z-Index for the overlay
		});
          
          $.ajax({
               url: 'search',
               type: 'POST',
               dataType: 'json',
               success: function(data){
                     $('#str').autocomplete(
                     {
                           source: data,
                           minLength: 2,
                   	      source: function (request, response) {
					            var matcher = new RegExp($.ui.autocomplete.escapeRegex(request.term), "i");

					            var matching = $.grep(data, function (value) {
					                var name = value.value;
					                var id = value.id;

					                return matcher.test(name) || matcher.test(id);
					            });
					            response(matching);
					        }
                     });

	                 $["ui"]["autocomplete"].prototype["_renderItem"] = function( ul, item) {
		                return $( "<li></li>" )
		                .data( "item.autocomplete", item )
		                .append( $( "<a></a>" ).html( item.label ) )
		                .appendTo( ul );
		            };

               }
          });            
/*        $("#str").autocomplete({
	      source: function (request, response) {
	            var matcher = new RegExp($.ui.autocomplete.escapeRegex(request.term), "i");

	            var matching = $.grep(employees, function (value) {
	                var name = value.value;
	                var id = value.id;

	                return matcher.test(name) || matcher.test(id);
	            });
	            response(matching);
	        }
	    });*/
/*	    $('#search_form').autocomplete({
		    serviceUrl: 'search_ajax',
		    dataType: 'json',
		    type: 'GET',
			onSelect: function(suggestion) {
				console.log('selected');
	            // $('#suggestions').html('You selected: ' + suggestion.value + ', ' + suggestion.data);
	        },
	        onHint: function (hint) {
            $('#hint').val(hint);
        },
	       onInvalidateSelection: function() {
	            $('#err').html('You selected: none');
	        }        
		});	*/	

	});
});
