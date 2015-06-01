require.config({
    paths: {
        jquery: './lib/jquery-1.11.3.min',
        bootstrap:'./lib/bootstrap.min',
        validation: './lib/bootstrap3-validation',
        search:'./lib/search',
        jwplayer:'./video/jwplayer'
    },
    shim: {
    	bootstrap: {
            deps: ['jquery'],
        },
    	validation:{
    		deps: ["jquery","bootstrap"],
    	},
    	search: {
	    	deps: ["jquery","validation"],
    		}
    }
});
require(['jquery','bootstrap','validation','search','jwplayer'], function($) {
	$(function(){
		jwplayer("player").setup({
			  skin: "http://localhost/src/js/video/glow.zip",//皮肤地址
			  flashplayer: "http://localhost/src/js/video/player.swf",
			  image: "http://localhost/src/js/video/bg.jpg",//开始的图片
			  width: 600,//宽度
			  height:400,//高度
			  levels: [{file: "http://localhost/src/js/video/greenco.flv"}]//视频路径
			})
	});
});
