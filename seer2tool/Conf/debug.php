<?php
return array(
    'URL_MODEL'          => '2', //URL模式
    'SESSION_AUTO_START' => true, //是否开启session
    'URL_CASE_INSENSITIVE' =>true,
    'URL_HTML_SUFFIX'       => NULL,
    'URL_404_REDIRECT'      =>  '',
    'OUTPUT_ENCODE'         =>  true,
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => getenv('debug_dbhost'), // 服务器地址
    'DB_NAME'   => getenv('debug_dbname'), // 数据库名
    'DB_USER'   => getenv('debug_dbuser'), // 用户名
    'DB_PWD'    => getenv('debug_dbpwd'), // 密码
    'DB_PORT'   => getenv('debug_dbport'), // 端口
    'DB_PREFIX' => 'seer2tool_', // 数据库表前缀
);
?>