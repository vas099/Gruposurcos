$( document ).ready(function(){
	var dd = $ ('#dd1');

	dd.animate({
		width: '100%',
		height: '100%',
		opacity: 1.0,
	}, 5000, function(){
		$('._left').fadeIn(2000,
			function(){
				$('._right').fadeIn(2000,
				function(){
					$('._leftBot').fadeIn(2000);
				});
			});
		});
});

