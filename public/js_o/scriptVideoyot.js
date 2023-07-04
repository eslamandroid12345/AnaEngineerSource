(function( $ ) {
    'use strict';

    var index = 1;
    var myInterval;
    var current;
    var first_slide = $(".digital-lab-slide.active");
    var findNext;
    var scrolled = false;
    var isHovered = false;
    var isVideoPlaying = false;

    add_slide_progress();

    myInterval = setInterval(function () {
        if (!isHovered && !isVideoPlaying) { // check if not hovering or playing video before triggering click
            $('.js-navigate.js-right').trigger('click');
        }
    }, 7400);

    $(window).scroll(function() {
        if ($('.digital-lab-slider').length) {
            var hT = $('.digital-lab-slider').offset().top,
            hH = $('.digital-lab-slider').outerHeight(),
            wH = $(window).height(),
            wS = $(this).scrollTop();
            if (!scrolled && wS > (hT+hH-wH) && (hT > wS) && (wS+wH > hT+hH)) {
                add_slide_progress();
                scrolled = true;
                //Set new Interval
                myInterval = setInterval(function () {
                    if (!isHovered && !isVideoPlaying) { // check if not hovering or playing video before triggering click
                        $('.js-navigate.js-right').trigger('click');
                    }
                }, 7400);
            }
        }
    });

    $("body").on("mouseover",".digital-lab-slider .digital-lab-slide-content, video", function() {
        isHovered = true;
        clearInterval(myInterval);
        $('.digital-lab-slider').find('.digital-lab-slide-progress svg path').css('animation-play-state', 'paused');
    });

    $("body").on("mouseleave",".digital-lab-slider .digital-lab-slide-content, video", function() {
        isHovered = false;
        clearInterval(myInterval);
        //Set new Interval
        myInterval = setInterval(function () {
            if (!isHovered && !isVideoPlaying) { // check if not hovering or playing video before triggering click
                $('.js-navigate.js-right').trigger('click');
            }
        }, 7400);
        add_slide_progress();
    });

    $("body").on("play","video", function() {
        isVideoPlaying = true;
        clearInterval(myInterval);
        $('.digital-lab-slider').find('.digital-lab-slide-progress svg path').css('animation-play-state', 'paused');
    });

    $("body").on("pause ended","video", function() {
        isVideoPlaying = false;
        clearInterval(myInterval);
        //Set new Interval
        myInterval = setInterval(function () {
            if (!isHovered && !isVideoPlaying) { // check if not hovering or playing video before triggering click
                $('.js-navigate.js-right').trigger('click');
            }
        }, 7400);
        add_slide_progress();
    });

    $("body").on("click",".js-navigate", function() {
        //Initialize the Slide Circle Progress
        add_slide_progress();

        //Get current slide
        current = $(".digital-lab-slide.active");

        //Remove the active slide
        $(current).removeClass("active");

        //Find next slide

        //Change the background Colors
        $('.digital-lab-slide-wrapper .digital-lab-slide-image').css('background-color', $(current).find('.digital-lab-slide-background').css('background-color'));
        $('.digital-lab-slide-wrapper .digital-lab-slide-content').css('background-color', $(current).find('.digital-lab-slide-background').css('background-color'));

        //Set active to the next slide
        setTimeout(function() {
            //If not the last slide display the next one
            if (! $(current).is(".digital-lab-slide:last")) {
                //set the next slide to active
                $(current).next(".digital-lab-slide").addClass("active");

                //increase the counter of current slide
                index = index + 1;

                //display the index
                $('.slide-count-active').text('0'+index);
            } else {
                reverse_to_first();
            }
        }, 200);

        //Clear the Interval
        clearInterval(myInterval);

        //Set new Interval
        myInterval = setInterval(function () {
            $('.js-navigate.js-right').trigger('click');
        },7400);
    });

    function reverse_to_first() {
        $('.digital-lab-slide.active').removeClass("active");
        first_slide.addClass("active");
        index = 1;
        $('.slide-count-active').text('0'+index);
    }




function add_slide_progress() {
	
	if( $('.digital-lab-slide-progress').length ){
		$('.digital-lab-slide-progress').remove();
	}
	
	
	$('.navigation').append('<div class="digital-lab-slide-progress"><svg viewBox="-10 -10 220 220"><g fill="none" stroke-width="6" transform="translate(100,100)"><path d="M 0,-100 A 100,100 0 0,1 86.6,-50" /><path d="M 86.6,-50 A 100,100 0 0,1 86.6,50" /><path d="M 86.6,50 A 100,100 0 0,1 0,100" /><path d="M 0,100 A 100,100 0 0,1 -86.6,50" /><path d="M -86.6,50 A 100,100 0 0,1 -86.6,-50" /><path d="M -86.6,-50 A 100,100 0 0,1 0,-100" /></g></svg><svg viewBox="-10 -10 220 220"><path d="M200,100 C200,44.771525 155.228475,0 100,0 C44.771525,0 0,44.771525 0,100 C0,155.228475 44.771525,200 100,200 C155.228475,200 200,155.228475 200,100 Z" stroke-dashoffset="629"></path></svg></div>');
 
	
}



})( jQuery );