(function(){
	$(function(){
		var count = $('.phone').length;
		var i = Math.floor(Math.random()*count);
		$('.phone').eq(i).removeClass('hide');
	})
})()