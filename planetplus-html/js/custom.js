/* scroll down start */

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