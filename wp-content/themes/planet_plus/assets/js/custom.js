$(document).ready(function() {
    // Check if the body has the class 'cms-header'
    if ($('body').hasClass('cms-header')) {
        // Add the class 'con-menu' to the element with class 'logo-div'
        $('.logo-div').addClass('con-menu');
    }
});

/* scroll down start */
$(document).ready(function(){
    // $('h2.quote-text span').attr({
    //     'data-aos': 'fade-right',
    //      'data-aos-duration': '2000',
    //     'data-aos-easing': 'ease-in-sine'
        
    // });
AOS.init();
   // Target the span inside the h2 with the class 'quote-text'

});

$(document).ready(function(){
	$(".scroll-down-button").click(function() {
    $('html, body').animate({
        scrollTop: $("#scroll-dw").offset().top
    }, 1000);
	});  
});

/* scroll down end */

/* responsive slide menu start */
$(document).ready(function(){
	$('.responsive-menu #nav-icon4').click(function(){

			$(this).toggleClass('open');
			$('.responsive-menu').slideUp();
			$('.logo-div #nav-icon4').removeClass('open');
			$('html').css('overflow', 'visible');
		});
		jQuery(document).ready(function($) {
			$('.logo-div #nav-icon4').click(function(){
				$(this).toggleClass('open');
				$('.responsive-menu #nav-icon4').addClass('open');
				$('.responsive-menu').slideDown();
				$('html').css('overflow', 'hidden');
			});
		});
 });
/* responsive slide menu end */

 jQuery(document).ready(function(){
    jQuery('.testimonial_inner').owlCarousel({
    loop:true,
    dots: true,
    margin:10,
    nav:true,
    navText : ["<i class='fa-thin fa-arrow-left'></i>","<i class='fa-thin fa-arrow-right'></i>"],
    responsive:{
        0:{
            items:1,
             autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true

        },
        678:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
  });

 $(document).ready(function(){
    /* for ipad */
    if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i))) {
        $(".header-right nav ul li a").each(function() {
            var onClick;
            var firstClick = function() {
                onClick = secondClick;
                return false;
            };
            var secondClick = function() {
                onClick = firstClick;
                return true;
            };
            onClick = firstClick;
            $(this).click(function() {
                return onClick();
            });
        });
    }
});

/* Script on load
----------------------------------*/
$(window).on('load',function() {
    /* sticky footer function */
    StickyFooter()
    
    equalheight('.equal-height');
});

/* Script on scroll
---------------------------------*/
$(window).scroll(function() {

});

/* Script on resize
---------------------------------*/
$(window).resize(function() {
    
    equalheight('.equal-height');
    
    /* sticky footer function */
    setTimeout(function(){
        StickyFooter()
    },50);

});


/* Script all functions
----------------------------------*/

/* sticky footer function */
function StickyFooter(){
    var st = $('footer').outerHeight()
    $('#wrapper').css({
        'margin-bottom':- st,
        'padding-bottom': st
    })
}

// equal height testimonials block
equalheight = function(container){

    var currentTallest = 0,
        currentRowStart = 0,
        rowDivs = new Array(),
        $el,
        topPosition = 0;
    $(container).each(function() {

        $el = $(this);
        $($el).height('auto')
        topPostion = $el.position().top;

        if (currentRowStart != topPostion) {
            for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
            rowDivs.length = 0; // empty the array
            currentRowStart = topPostion;
            currentTallest = $el.height();
            rowDivs.push($el);
        } else {
            rowDivs.push($el);
            currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
        }
        for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
            rowDivs[currentDiv].height(currentTallest);
        }
    });
}

$(document).ready(function() {
    $('.quote-text span').addClass('animated-text');
    function checkVisibility() {
        var $quoteText = $('.quote-text');
        var $span = $quoteText.find('span');
        var windowHeight = $(window).height();
        var scrollTop = $(window).scrollTop();
        var elementOffset = $quoteText.offset().top;
        var elementHeight = $quoteText.outerHeight();

        // Check if the .quote-text element is within the viewport
        if (elementOffset <= scrollTop + windowHeight && elementOffset + elementHeight >= scrollTop) {
            $span.addClass('scrolled');  // Add 'scrolled' class when in view
        } else {
            $span.removeClass('scrolled');  // Remove 'scrolled' class when out of view
        }
    }

    // Initial check
    checkVisibility();

    // Add event listener for scroll
    $(window).on('scroll', checkVisibility);
});

