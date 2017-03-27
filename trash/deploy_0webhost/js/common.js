$(document).ready(function() {
	
	$(".main_menu_btn").click(function() {
	$("#navList").animate({width:'toggle'},350);	
	});
	
	$(window).resize(function() {
    if($(window).width() > 768) 
        $('#navList').show();
	});
		
	//Owl Carousel
	$(".slider").owlCarousel({
		navigation: true,
		items: 3, /* if the default owl-item is not changed it works */
		pagination: false,
		navigationText: ["<img src='images/left_arrow.png'>", "<img src='images/right_arrow.png'>"],
		responsive: true,
		scrollPerPage: true, /* true: if you drag click controll btn with the mouse it scrolls all items at once */   
		itemsDesktop: [1000,3], //5 items between 1000px and 901px
    itemsDesktopSmall: [900,2], // betweem 900px and 601px
    itemsMobile: [510,1]	
	});

	// show border
	/*$(".owl-next").click(function(){
		$(".borderSmall:eq(2)").removeAttr("id");
	});*/

});




