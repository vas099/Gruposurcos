
$(window).scroll(function() {
	if ($(this).scrollTop() > 150){
		$('#left2').css("display", "block");
		$('#right2').css("display", "block");
		$('#left2').addClass("sticky");
		$('#right2').addClass("sticky");
	}
	else{

	}
});

$(window).scroll(function() {
	if ($(this).scrollTop() > 400){
		$('#textFut').css("display", "block");
		$('#textFut').addClass("sticky");
	}
	else{

	}
});