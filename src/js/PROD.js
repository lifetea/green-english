(function(){
	$(function() {
		$(".pro-item").quickpaginate({
			perpage : 15,//每页显示条数,
			pager : $("#page_text")
		})
	});
	
	$(function(){
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
		}) 
	});
})()