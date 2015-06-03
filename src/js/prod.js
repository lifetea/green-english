require.config({
    paths: {
        jquery: "./lib/jquery-1.11.3.min",
        bootstrap:"./lib/bootstrap.min",
        validation: "./lib/bootstrap3-validation",
        search:"./lib/search",
        quickpaginate:"./lib/jquery.quickpaginate"
    },
    shim: {
    	bootstrap: {
            deps: ["jquery"],
        },
    	validation:{
    		deps: ["jquery","bootstrap"],
    	},
    	quickpaginate:{
    		deps: ["jquery","bootstrap"],
    	},
    	search: {
	    	deps: ["jquery","validation"],
    		}
    }
});
require(["jquery","bootstrap","validation","search","quickpaginate"], function($) {
	$(function(){
		$(".pro-item").quickpaginate({
			perpage : 15,//每页显示条数,
			pager : $("#page_text")
		})
	});
});
