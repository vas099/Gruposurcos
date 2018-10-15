$( document ).scroll(function() {
	var dd = $ ('.fade');
	var head = $ ('#header');
	var wrap = $ ('.text');

	if ($(this).scrollTop() > 200){
		head.addClass("sticky");
		dd.addClass("sticky");
		wrap.addClass("sticky");
	}
	else{
		head.removeClass("sticky");
		dd.removeClass("sticky");
		wrap.removeClass("sticky");
	}
});

$( document ).scroll(function() {
	if ($(this).scrollTop() > 400){
		$('#headerGl').addClass("sticky");
		$('#cotainerImg').addClass("sticky");
		$('#cotainerImgCat').addClass("sticky");
	}
	else{
		$('#headerGl').removeClass("sticky");
		$('#cotainerImg').removeClass("sticky");
		$('#cotainerImgCat').removeClass("sticky");
	}
});	
