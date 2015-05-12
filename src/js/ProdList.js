(function(){
	$(function() {
		$("#proList tr").click(function(){
			location.href = $(this).attr("data-href");
//			console.log($(this).attr("data-href"));
		});
	});
})()