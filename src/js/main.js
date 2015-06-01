require.config({
    paths: {
        jquery: 'http://www.greenco.com.cn/src/js/lib/jquery-1.11.3.min',
        bootstrap:'http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min'
    }
});
require(['jquery','bootstrap'], function($) {
   console.log($("#test"));
});