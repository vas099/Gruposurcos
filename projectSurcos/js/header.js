$(window).scroll(function() {
	if ($(this).scrollTop() > 200){
		$('#header').addClass("sticky");
//		$('#dd1').addClass("sticky");//
	}
	else{
		$('#header').removeClass("sticky");
//		$('#dd1').removeClass("sticky");//
	}
});

$(window).scroll(function() {
	if ($(this).scrollTop() > 400){
		$('#headerGl').addClass("sticky");
		$('#cotainerImg').addClass("sticky");
	}
	else{
		$('#headerGl').removeClass("sticky");
		$('#cotainerImg').removeClass("sticky");
	}
});	