// Preloader
$(window).on('load', function() { // makes sure the whole site is loaded 
  $('#status').fadeOut(); // will first fade out the loading animation 
  $('#preloader').delay(550).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  $('body').delay(550).css({'overflow':'visible'});
})

// Aos Animation
AOS.init();


// show top header

$('.show_topHeader').on("click", function(){
	$('.top_header').toggleClass('open_topheader');
	$(this).addClass('flip_arrow');
});











