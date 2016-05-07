<?php
return array(
	'DB_TYPE'   => 'mysqli',
   	'DB_HOST'   => getenv('MYSQL_HOST'), // 服务器地址
    	'DB_NAME'   => 'seer2tool', // 数据库名
    	'DB_USER'   => getenv('MYSQL_USER'), // 用户名
    	'DB_PWD'    => getenv('MYSQL_PASSWORD'), // 密码
    	'DB_PORT'   => getenv('MYSQL_PORT'), // 端口
	'DB_PREFIX' => 'seer2tool_',
        'LOG_RECORD'=>true, //开启日志记录
        'LOG_EXCEPTION_RECORD' => true, //记录异常
        'LOG_LEVEL'        => 'EMERG,ALERT,CRIT,ERR,WARN,NOTIC,INFO,DEBUG,SQL',
        'DB_FIELDS_CACHE'  => false,  //关闭数据库字段缓存
        'APP_FILE_CASE'    => true, //关闭数据库字段缓存
        'TMPL_CACHE_ON'    => false, //关闭模版缓存
        'SHOW_ERROR_MSG'   => true, //显示错误信息
        'SHOW_PAGE_TRACE'  => True, // 显示Trace信息
);
?>
