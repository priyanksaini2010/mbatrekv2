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
/* Promo js */
$(document).ready(function(){
	$('.card_price >span').click(function(){
		$('.card_price').toggleClass('open_promo');
	});
});

/* slider js */
 $(function () {

      // Slideshow 1
      $("#slider1").responsiveSlides({
        auto: true,             // Boolean: Animate automatically, true or false
        speed: 500,            // Integer: Speed of the transition, in milliseconds
        timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
        pager: true,           // Boolean: Show pager, true or false
        nav: true,             // Boolean: Show navigation, true or false
        random: false,          // Boolean: Randomize the order of the slides, true or false
        pause: true,           // Boolean: Pause on hover, true or false
        pauseControls: true,    // Boolean: Pause when hovering controls, true or false
        prevText: "Previous",   // String: Text for the "previous" button
        nextText: "Next",       // String: Text for the "next" button
        maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
        navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
        manualControls: "",     // Selector: Declare custom pager navigation
        namespace: "rslides",   // String: Change the default namespace used
        before: function(){},   // Function: Before callback
        after: function(){}     // Function: After callback
      });

     

    });
	

/*======== smooth scrolling js =======*/

$('.scroll_to').click(function(e){
  
	  var jump = $(this).attr('href');
  
	  var new_position = $(jump).offset();
  
	  $('html, body').stop().animate({ scrollTop: new_position.top }, 500);
  
	  e.preventDefault();
  
  });

/* =========Animation Effect In Page========== */  
$(document).ready(function(){
	/* ========For HomePage======= */
	$('.bulid_categories .col-md-12 ul li').css('opacity', 0);
	$('.bulid_categories .col-md-12 ul li').waypoint( function()
	{
	// $('.what_you_will_Get .earn_container ul li').addClass('fadeInUp');
	var $isAnimatedSecond = $('.bulid_categories .col-md-12 ul li'),
		$isAnimatedSecondSingle = $('.what_you_will_Get .is-animated__single');
	
	{
		$isAnimatedSecond.addClass('animated fadeInUp'); 
		$isAnimatedSecond.eq(0).css('animation-delay', '.2s');
		$isAnimatedSecond.eq(1).css('animation-delay', '.3s');
		$isAnimatedSecond.eq(2).css('animation-delay', '.4s');
		$isAnimatedSecond.eq(3).css('animation-delay', '.4s');
		$isAnimatedSecondSingle.addClass('animated rollIn').css('animation-delay', '1.7s');
	}
	}, { offset: '80%' });
	/* ========End For HomePage======= */
	
	/* ========For Education institute======= */
	$('.education_container .student-journey-inner .student-ready').css('opacity', 0);
	$('.education_container .student-journey-inner .student-relevant').css('opacity', 0);
	$('.education_container .student-journey-inner .student-ready').waypoint( function()
	{
	
	var $isAnimatedSecond = $('.education_container .student-journey-inner .student-ready'),
		$isAnimatedSecondSingle = $('.education_container .student-journey-inner .student-relevant');
	
	{
		$isAnimatedSecond.addClass('animated fadeInLeft'); 
		/* $isAnimatedSecond.eq(0).css('animation-delay', '.2s');
		$isAnimatedSecond.eq(1).css('animation-delay', '.3s');
		$isAnimatedSecond.eq(2).css('animation-delay', '.4s');
		$isAnimatedSecond.eq(3).css('animation-delay', '.4s');*/
		$isAnimatedSecondSingle.addClass('animated fadeInLeft').css('animation-delay', '1.7s'); 
	}
	}, { offset: '80%' });
	
	/* ========End Education institute======= */
	
	/* ========For Education engagment model======= */
	
	$('.line_process').css('opacity', 0);
	$('.engament_model ul li').css('opacity', 0);
	$('.line_process').waypoint( function() 
	{  
	
	var $isAnimatedSecond = $('.line_process'),
		$isAnimatedSecondSingle = $('.engament_model ul li');
	
	{
		$isAnimatedSecond.addClass('animated fadeInLeft'); 
		$isAnimatedSecondSingle.addClass('animated fadeInLeft'); 
		 $isAnimatedSecondSingle.eq(0).css('animation-delay', '.2s');
		$isAnimatedSecondSingle.eq(1).css('animation-delay', '.3s');
		$isAnimatedSecondSingle.eq(2).css('animation-delay', '.4s');
		$isAnimatedSecondSingle.eq(3).css('animation-delay', '.5s');
		$isAnimatedSecondSingle.eq(4).css('animation-delay', '.6s');
		$isAnimatedSecondSingle.eq(5).css('animation-delay', '.7s');
		$isAnimatedSecondSingle.eq(6).css('animation-delay', '.8s');
		//$isAnimatedSecondSingle.addClass('animated fadeInLeft').css('animation-delay', '1.7s'); 
	}
	}, { offset: '80%' });
	
	/* ========End Education institute engagment model======= */
	
	/* ========For Our Story======= */
	$('.addition_wrapper').css('opacity', 0);
	$('.addition_wrapper').waypoint( function()
	{
	var $isAnimatedSecond = $('.addition_wrapper');
	{
		$isAnimatedSecond.addClass('animated fadeInUp'); 
	}
	}, { offset: '80%' });
	
	/* Transform Process */
	$('.transfor_process .container > h3').css('opacity', 0);
	$('.transfor_process .container > p').css('opacity', 0);
	$('.mbatrek_arrow > img').css('opacity', 0);
	$('.mbatrek_arrow ul li').css('opacity', 0);
	$('.adjusting_div.more_explain').css('opacity', 0);
	$('.transfor_process .container > h3').waypoint( function()
	{
	var $isAnimatedSecond = $('.transfor_process .container > h3'),
		$isAnimatedSecondp = $('.transfor_process .container >  p'),
		$isAnimatedSecondimg = $('.mbatrek_arrow > img'),
		$isAnimatedSecondul = $('.mbatrek_arrow ul li'),
		$isAnimatedSecondcta = $('.adjusting_div.more_explain');
	{
		$isAnimatedSecond.addClass('animated fadeInUp'); 
		$isAnimatedSecondp.addClass('animated fadeInUp'); 
		$isAnimatedSecondimg.addClass('animated fadeInUp').css('animation-delay', '.7s');
		$isAnimatedSecondul.addClass('animated fadeInLeft'); 
		$isAnimatedSecondul.eq(0).css('animation-delay', '.7s');
		$isAnimatedSecondul.eq(1).css('animation-delay', '.7s');
		$isAnimatedSecondul.eq(2).css('animation-delay', '.7s');
		//$isAnimatedSecondul.eq(3).css('animation-delay', '.4s');
		$isAnimatedSecondcta.addClass('animated fadeInUp').css('animation-delay', '.7s');
	}
	}, { offset: '50%' });
	/* ========End For Our Story======= */
});

/* ========Talk to advisory======= */
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
/* ========End task to advisry======= */

/* ========Our Team======= */
$(document).ready(function(){
	$('.show_content_alok').click(function(e){
		$(this).toggleClass('active_team');
		$('.alok_info').toggleClass('display_information_alok');
		$('.abhishek_info').removeClass('display_information_alok');
		$('.show_rahul_info').removeClass('display_information_alok');
		$('.show_ayushi_info').removeClass('display_information_alok');
		$('.show_content_abhishek').removeClass('active_team');
		$('.ayushi_info').removeClass('active_team');
		$('.rahul_info').removeClass('active_team');
		e.stopPropagation();
		$(document).on("click", function(e) {
			if ($(e.target).is(".expand_information") === false) {
			  $(".expand_information").removeClass("display_information_alok");
			  $(".show_content_alok").removeClass("active_team");
			  $(".show_content_abhishek").removeClass("active_team");
			}
		});
	});
	
	$('.show_content_abhishek').click(function(e){
		$(this).toggleClass('active_team');
		$('.abhishek_info').toggleClass('display_information_alok');
		$('.alok_info').removeClass('display_information_alok');
		$('.show_rahul_info').removeClass('display_information_alok');
		$('.show_ayushi_info').removeClass('display_information_alok');
		$('.show_content_alok').removeClass('active_team');
		$('.rahul_info').removeClass('active_team');
		$('.ayushi_info').removeClass('active_team');
		e.stopPropagation();
		$(document).on("click", function(e) {
			if ($(e.target).is(".expand_information") === false) {
			  $(".expand_information").removeClass("display_information_alok");
			  $(".show_content_abhishek").removeClass("active_team");
			  
			}
		});
	});
	$('.ayushi_info').click(function(e){
		$(this).toggleClass('active_team');
		$('.show_ayushi_info').toggleClass('display_information_alok');
		$('.show_rahul_info').removeClass('display_information_alok');
		$('.show_Devalina_info').removeClass('display_information_alok');
		$('.alok_info').removeClass('display_information_alok');
		$('.show_content_alok').removeClass('active_team');
		$('.rahul_info').removeClass('active_team');
		$('.Devalina_info').removeClass('active_team');
		e.stopPropagation();
		$(document).on("click", function(e) {
			if ($(e.target).is(".expand_information") === false) {
			  $(".expand_information").removeClass("display_information_alok");
			  $(".ayushi_info").removeClass("active_team");
			 
			}
		});
	});
	$('.rahul_info').click(function(e){
		$(this).toggleClass('active_team');
		$('.show_rahul_info').toggleClass('display_information_alok');
		$('.show_ayushi_info').removeClass('display_information_alok');
		$('.show_Devalina_info').removeClass('display_information_alok');
		$('.alok_info').removeClass('display_information_alok');
		$('.abhishek_info').removeClass('display_information_alok');
		$('.ayushi_info').removeClass('active_team');
		$('.show_content_abhishek').removeClass('active_team');
		$('.show_content_alok').removeClass('active_team');
		$('.Devalina_info').removeClass('active_team');
		e.stopPropagation();
		$(document).on("click", function(e) {
			if ($(e.target).is(".expand_information") === false) {
			  $(".expand_information").removeClass("display_information_alok");
			  $(".rahul_info").removeClass("active_team");
			}
		});
	}); 
	$('.Devalina_info').click(function(e){
		$(this).toggleClass('active_team');
		$('.show_Devalina_info').toggleClass('display_information_alok');
		$('.show_rahul_info').removeClass('display_information_alok');
		$('.show_ayushi_info').removeClass('display_information_alok');
		$('.alok_info').removeClass('display_information_alok');
		$('.abhishek_info').removeClass('display_information_alok');
		$('.ayushi_info').removeClass('active_team');
		$('.show_content_abhishek').removeClass('active_team');
		$('.show_content_alok').removeClass('active_team');
		$('.rahul_info').removeClass('active_team');
		e.stopPropagation();
		$(document).on("click", function(e) {
			if ($(e.target).is(".expand_information") === false) {
			  $(".expand_information").removeClass("display_information_alok");
			  $(".Devalina_info").removeClass("active_team");
			  
			}
		});
	}); 
});

/* ========End Our Team======= */

/* ========Our Profile======= */
$(document).ready(function(){
	$('.profile_open').click(function(e){
		$('.profile_div').toggleClass('open_profile_div');
		 $(".cart-wrapper_new").removeClass("open_cart");
		e.stopPropagation();
		$(document).on("click", function(e) {
			if ($(e.target).is(".profile_div") === false) {
			  $(".profile_div").removeClass("open_profile_div");
			 
			}
		}); 
	});
});

/* ========End Profile======= */

/* ========Register From======= */

$(document).ready(function() {
    $("div.desc").hide();
    $(".register_input li .css-checkbox").click(function() {
        var test = $(this).val();
        $("div.desc").hide();
        $("#" + test).show();
    });
});

/* ========End Register Form======= */
 $(document).ready(function(){
	$('#cart-link').click(function(e){
		$('.cart-wrapper_new').toggleClass("open_cart");
		$('.profile_div').removeClass('open_profile_div');
		e.stopPropagation();
		
		$(document).on("click", function(e) {
			if ($(e.target).is(".cart-wrapper_new") === false) {
			  $(".cart-wrapper_new").removeClass("open_cart");
			 
			}
		});
	});
	
	
});  
