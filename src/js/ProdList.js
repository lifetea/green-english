(function(){
	$(function() {
		$("#proList tbody tr").click(function(){
				location.href = $(this).attr("data-href");
		});
	});
})()