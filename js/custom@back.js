
/* Float Button */
$(function(){
		$('.ripple').materialripple();
	});
/*End  Float Button */

/* for header */
  function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 100,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
        });
    }
    window.onload = init();
/* End for header */


$(document).ready(function(){
    jQuery.goup({trigger: 100,
	containerSize: 40,
		bottomOffset: 15,
		locationOffset: 20,
		title: 'Back To Top',
		containerColor: '#09afb7',
		titleAsText: true});
});

/* float lable */
'use strict';

(function($) {
  $.fn.phAnim = function( options ) {

    var settings = $.extend({}, options),
    		label,
  			ph;
    
    function getLabel(input) {
      return $(input).parent().find('label');
    }
    
    function makeid() {
      var text = "";
      var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
      for( var i=0; i < 5; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));
      return text;
    }
    
    return this.each( function() {
			
      if( $(this).attr('id') == undefined ) {
        $(this).attr('id', makeid());
      }

      if( getLabel($(this)).length == 0 ) {
        if( $(this).attr('placeholder') != undefined ) {
          ph = $(this).attr('placeholder');
          $(this).attr('placeholder', '');
          $(this).parent().prepend('<label for='+ $(this).attr('id') +'>'+ ph +'</label>');
        }
      } else {
        $(this).attr('placeholder', '');
        if(getLabel($(this)).attr('for') == undefined ) {
          getLabel($(this)).attr('for', $(this).attr('id'));
        }
      }
      $(this).on('focus', function() {
        label = getLabel($(this));
        label.addClass('active focusIn');
      }).on('focusout', function() {
        if( $(this).val() == '' ) {
          label.removeClass('active');
        }
        label.removeClass('focusIn');
      });
    });
  };
}(jQuery))

$(document).ready(function() {
	$('.phAnimate input').phAnim();
	$('.phAnimate textarea').phAnim();
});
/* End float lable */

/* for scroll */
(function($){
	$(window).on("load",function(){
		
		$("#content-1").mCustomScrollbar({
			autoHideScrollbar:false,
			mouseWheel:{scrollAmount:188},
			theme:"rounded"
			
		});
		
	});
	
	$(window).on("load",function(){
		
		$("#content1-1").mCustomScrollbar({
			autoHideScrollbar:false,
			mouseWheel:{scrollAmount:188},
			theme:"rounded"
			
		});
		
	});
	
	$(window).on("load",function(){
		
		$("#content2-1").mCustomScrollbar({
			autoHideScrollbar:false,
			mouseWheel:{scrollAmount:188},
			theme:"rounded"
			
		});
		
	});
	$(window).on("load",function(){
		
		$("#content3-1").mCustomScrollbar({
			autoHideScrollbar:false,
			mouseWheel:{scrollAmount:188},
			theme:"rounded"
			
		});
		
	});
	$(window).on("load",function(){
		
		$("#content4-1").mCustomScrollbar({
			autoHideScrollbar:false,
			mouseWheel:{scrollAmount:188},
			theme:"rounded"
			
		});
		
	});
})(jQuery); 

/* End for scroll */

/* datepicker js */

// When the document is ready
$(document).ready(function() {

	$('.date_calender').datepicker({
		format: "dd/mm/yyyy"
	});
});

$('.date_calender').on('changeDate', function(ev){
    $(this).datepicker('hide');
});

/* End datepicker js */