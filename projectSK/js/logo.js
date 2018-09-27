$(function() {
 
$(window).scroll(function() {
 
if($(this).scrollTop() != -1) {
 
$('.logo').fadeIn();
 
} else {
 
$('.logo').fadeOut();
 
}
 
});
 
$('.logo').click(function() {
 
$('body,html').animate({scrollTop:-1},1000);
 
});
 
});