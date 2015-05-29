(function(){
	$(function(){
		var count = $('.phone').length;
		var i = Math.floor(Math.random()*count);
		$('.phone').eq(i).removeClass('hide');
		
		$('#code').click(function(){
			$(this).attr("src","Code?r="+Math.random());
		});
		
		$("#contactForm").validation();
		$("button[type='submit']").on('click',function(event){
			event.preventDefault();
			// 2.最后要调用 valid()方法。 
			if ($("#contactForm").valid(this,"error!")==false){
				return false;
			}else{
				//console.log($("form"));
				$("#contactForm").submit();
			}
		});
	})
})()