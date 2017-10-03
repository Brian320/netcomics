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
var swiper = new Swiper('.swiper-container.login', {
    pagination: '.swiper-pagination',
    paginationClickable: false,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 0,
    loop: false,
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
	//LOGIN
	$(document).on("click", ".nc-login", function(e){
		e.stopPropagation();
		e.preventDefault();
		var username = $("input[name='username']").val().trim();
		var password = $("input[name='password']").val().trim();
		var remember_me = $("input[name='remember_me']").val();
		var dataForm = {username: username, password: password, remember_me: remember_me};
		if(username != "" && password != "") {
			 $.ajax({
                type: 'POST',
                data: dataForm,
                url: './controllers/login.php',
                success: function(data) {
                    console.log(data);
                    data = JSON.parse(data);
                    if(data.status == 200) {
                    	window.location.href = './';
                    } else {
                    	$(".msg-status").addClass("text-danger").html(data.message);
                    }
                }
            });
		} else {
			$(".msg-status").addClass("text-danger").css("opacity", 1);
		}
		return false;
	});
});