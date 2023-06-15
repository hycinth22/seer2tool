<?php
return array(
		'DB_TYPE'   => 'mysql',
		'DB_HOST'   => 'localhost',
		'DB_NAME'   => 'seer2tool',
		'DB_USER'   => 'root',
		'DB_PWD'    => 'root',
		'DB_PORT'   => 3306,
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