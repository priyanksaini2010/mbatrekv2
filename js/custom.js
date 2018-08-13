
/* for scroll */
(function($){
	$(window).on("load",function(){
		
		$("content1-1").mCustomScrollbar({
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
	
	
})(jQuery); 
/* End for scroll */

$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});
/* End Talk to advisor Tab */

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

/* download ebrochter js */
	$(function(){
		
		$('.thumbnail').viewbox();
		$('.thumbnail-2').viewbox();
		
		(function(){
			var vb = $('.popup-link').viewbox();
			$('.popup-open-button').click(function(){
				vb.trigger('viewbox.open');
			});
			$('.close-button').click(function(){
				vb.trigger('viewbox.close');
			});
		})();
		
		(function(){
			var vb = $('.popup-steps').viewbox({navButtons:false});
			
			$('.steps-button').click(function(){
				vb.trigger('viewbox.open',[0]);
			});
			
			$('.next-button').click(function(){
				vb.trigger('viewbox.open',[1]);
			});
			$('.prev-button').click(function(){
				vb.trigger('viewbox.open',[0]);
			});
			$('.ok-button').click(function(){
				vb.trigger('viewbox.close');
			});
		})();
		
	});
	
	$(function() {
			//	alert();
		// OPACITY OF BUTTON SET TO 0%
		$(".roll").css("opacity","0");
		 
		// ON MOUSE OVER
		$(".roll").hover(function () {
		 
		// SET OPACITY TO 70%
		$(this).stop().animate({
		opacity: .7
		}, "slow");
		},
		 
		// ON MOUSE OUT
		function () {
		 
		// SET OPACITY BACK TO 50%
		$(this).stop().animate({
		opacity: 0
		}, "slow");
		});
	});
/* End download ebrochter js */

/* student profile */
$(document).ready(function() {
	$('.student_profile').click(function(){
		$(this).parent().toggleClass('open_profile');
	});
});
/* End student profile */


// add the animation to the modal
$(".modal").each(function(index) {
  $(this).on('show.bs.modal', function(e) {
    var open = $(this).attr('data-easein');
    if (open == 'shake') {
      $('.modal-dialog').velocity('callout.' + open);
    } else if (open == 'pulse') {
      $('.modal-dialog').velocity('callout.' + open);
    } else if (open == 'tada') {
      $('.modal-dialog').velocity('callout.' + open);
    } else if (open == 'flash') {
      $('.modal-dialog').velocity('callout.' + open);
    } else if (open == 'bounce') {
      $('.modal-dialog').velocity('callout.' + open);
    } else if (open == 'swing') {
      $('.modal-dialog').velocity('callout.' + open);
    } else {
      $('.modal-dialog').velocity('transition.' + open);
    }

  });
});

/* table_more_content js */
$(document).ready(function(){
	$('.arrow_down').click(function(){
		$(this).parent().toggleClass('height_auto');
	});	
});
/* End table_more_content js */

/* browse input js */
$(document).on('click', '.browse', function(){
  var file = $(this).parent().parent().parent().find('.file');
  file.trigger('click');
});
$(document).on('change', '.file', function(){
  $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
});
/* End browse input js */

/* hover help div on industry */
$(document).ready(function(){
	$('.help_div .site_btn').hover(function(){
		$(this).toggleClass('hover_effect');
	});
});
/* End hover help div on industry */


/* $(document).ready(function() {
    $(".notification").modal({
        show: false,
        backdrop: 'static'
    });
}); */
$(document).ready(function(){
	
	$(".press_session_model").on('hidden.bs.modal',function(){
		$('body').removeClass('model_for_pree_session');
	});
});
