( function( $ ) {

	$(window).load(function(){

		$('.open-search').click(function(e) {
			$('.seach-box-mobile').removeClass('d-none');
		});

		$('.close-search').click(function(e) {
			$('.seach-box-mobile').addClass('d-none');
		});

		$('.search-desktop').click(function() {
			$('#search-bar-desktop').toggleClass('d-none');
		});

		// FANCYBOX

		if(typeof fancybox == "function") {
			$('[data-fancybox]').fancybox({
				slideShow  : false,
				thumbs     : false,
			});
			
		}

		$('.btn-post-review').click(function(){
			$('html, body').animate({
				scrollTop: $("#review-form-page").offset().top -70
			}, 800);
		});

		

		// ANIMATE
		// $(window).scroll(function() {
		// 	$('.animated').each(function(){
		// 		var imagePos = $(this).offset().top;
		// 		var topOfWindow = $(window).scrollTop();
		// 		if (imagePos < topOfWindow+500) {
		// 			$(this).addClass('activate');
		// 			$(this).addClass($(this).data('fx'));
		// 		}
		// 	});
		// });

		// $('.animated-load').each(function(){
		// 	$(this).addClass('activate');
		// 	$(this).addClass($(this).data('fx'));
		// });

		// $(window).scroll(function() {
		//     if (  document.documentElement.clientHeight + $(document).scrollTop() >= document.body.offsetHeight ){
		//     	$('.animated').each(function(){
		//     		$(this).addClass('activate');
		// 			$(this).addClass($(this).data('fx'));
		//     	});
		//     }
		// });

		// OWL
		$('.owl-demo').owlCarousel({
		    autoPlay: 3000,
		    navigation: true,
		    navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		    pagination: true,
		    itemsCustom: [[0, 1], [400, 4], [700, 6], [1000, 8], [1200, 10]]
	 	});

		// jQuery('.carousel-coupons').owlCarousel({
		//     autoPlay: 3000, //Set AutoPlay to 3 seconds
		//     navigation: false,
		//     pagination: true,
		//     itemsCustom: [[0, 1], [768, 2],[992, 3]]
	 // 	});
		jQuery('.carousel-services').owlCarousel({
				autoPlay: 3000,
				navigation: false,
				pagination: true,
				itemsCustom: [[0, 1], [768, 2],[992, 3], [1200, 4]]
		});
		jQuery('.carousel-advantage').owlCarousel({
				autoPlay: 3000,
				navigation: false,
				pagination: true,
				itemsCustom: [[0, 2], [400, 3], [600, 4], [800, 5],[900, 6],[1024, 7]]
		});

		wow = new WOW(
			{
				boxClass: 'wow',
				animateClass: 'animated',
				offset: 200,
				mobile: false,
				live: false
			}
		)
		wow.init();

	});

	$(document).ready(function(){
		// FIT VIDEOS

		if(typeof fitVids == "function") {

			$('#main-content').fitVids();
		}

		// STELLAR
		if(typeof stellar != 'undefined'){
			$.stellar({
				horizontalScrolling: false,
			});
		}
	});

} )( jQuery );

window.onscroll = function() { stickyMenu(); };
var navbar = document.getElementById('main-header');
var sticky = navbar.offsetTop;
function stickyMenu() {
	if (window.pageYOffset >= sticky) {
		navbar.classList.add('sticky-menu');
	} else {
		navbar.classList.remove('sticky-menu');
	}
}