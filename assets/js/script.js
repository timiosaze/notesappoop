$(document).ready(function(){
	$('.data-list').click(function(){
		$action = $(this).children(".actions");
		$date = $(this).children(".data-text").children(".date");
		$notaction = $(this).siblings().children(".actions");
		$notdate = $(this).siblings().children(".data-text").children(".date");
		$notaction.fadeOut();
		$notdate.slideUp();
		$date.fadeToggle();
		$action.slideToggle();
	})
});