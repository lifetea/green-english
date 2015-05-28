(function(){
	$(function(){
		var count = $('.phone').length;
		var i = Math.floor(Math.random()*count);
		$('.phone').eq(i).removeClass('hide');
		
		$('#code').click(function(){
			$(this).attr("src","Code?r="+Math.random());
		});
		
		$("form").validation();
		$("button[type='submit']").on('click',function(event){
			event.preventDefault();
			$("#airFlow").val();
			// 2.最后要调用 valid()方法。 
			if ($("form").valid(this,"error!")==false ||  !$("#airFlow").val()&&!$("#pressure").val()){
				return false;
			}else{
				$("form").submit();
			}
		});
	})
})()