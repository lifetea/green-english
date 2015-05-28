<?php
return array(
    //'配置项'=>'配置值'
        'LANG_SWITCH_ON'     =>     true,    //开启语言包功能        
        'LANG_AUTO_DETECT'     =>     true, // 自动侦测语言
        'DEFAULT_LANG'         =>     'zh-cn', // 默认语言        
        'LANG_LIST'            =>    'en-us,zh-cn,zh-tw', //必须写可允许的语言列表
        'VAR_LANGUAGE'     => 'l', // 默认语言切换变量
		'SHOW_PAGE_TRACE' =>true,
		//开启全局缓存
		'HTML_CACHE_ON'=>true,
		//全局缓存过期时间
		'HTML_CACHE_TIME'=>60,
		//缓存后缀
		'HTML_FILE_SUFFIX' => '.html',// 默认静态文件后缀
		//缓存规则
		'HTML_CACHE_RULES'=>array(
			//	'About:aboutUs'=>array('{:controller}/{:action}',60),
		)
);