<?php
return array(
    'URL_MODEL'          => '2', //URL模式
    'SESSION_AUTO_START' => true, //是否开启session
    'URL_CASE_INSENSITIVE' =>true,
    'URL_HTML_SUFFIX'       => NULL,
    'URL_404_REDIRECT'      =>  '__ROOT__/404.html',
    'OUTPUT_ENCODE'         =>  true,
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'seer2tool', // 数据库名
    'DB_USER'   => '', // 用户名
    'DB_PWD'    => '', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'seer2tool_', // 数据库表前缀
	'DB_CHARSET'  => 'utf8',
	'TMPL_PARSE_STRING'  =>array(
     '__PUBLIC__' => '/Common',
	 '__CSS__' => '/Common/css',
     '__JS__' => '/Common/js',
	 '__IMAGE__' => '/Common/images',
     '__UPLOAD__' => '/Uploads',
 )
);
?>