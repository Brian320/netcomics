var swiper = new Swiper('.swiper-container.slider', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 0,
    loop: true,
    autoplay: 4000,
    keyboardControl: true
});
$(document).ready(function(){
	//BUSCADOR
	$(document).on("click", ".nc_search", function(e) {
		e.stopPropagation();
		$("#search_box").addClass("active");
		$("#search_input").focus();
	});
	$(document).on("click", ".close_search", function() {
		$("#search_box").removeClass("active");
	});
	//ACCIONES DE LA TECLA ESCAPE
	$(document).keyup(function(e) {
	     if (e.keyCode == 27) {
	        if($("#search_input").is(":focus")) {
	        	$(".close_search").click();
	        }
	    }
	});
});