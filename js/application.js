$(document).ready(function(){
	$('.flash').click(function(){
		var biaoti=this.name;
		var  rel=this.rel;
		$.layer({
		    type : 2,
		    title : biaoti,
		    iframe : {src :'application_Large.php?rel='+rel},
		    shade : [0.6 , '#222' , true],
		    shadeClose : true,
		    move : ['.xubox_title' , false],
		    area : ['750px' , '530px'],
		    offset : ['50%','']
		});

	 })
})