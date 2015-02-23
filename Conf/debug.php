<?php
if (getenv('coding_demo'))
{
	return array(
		'DB_TYPE'   => 'mysql',
		'DB_HOST'   => getenv('debug_dbhost'),
		'DB_NAME'   => getenv('debug_dbname'),
		'DB_USER'   => getenv('debug_dbuser'),
		'DB_PWD'    => getenv('debug_dbpwd'),
		'DB_PORT'   => getenv('debug_dbport'),
		'DB_PREFIX' => 'seer2tool_',
);
}else{
	return array(
		'DB_TYPE'   => 'mysql',
		'DB_HOST'   => 'localhost',
		'DB_NAME'   => 'seer2tool',
		'DB_USER'   => 'root',
		'DB_PWD'    => 'root',
		'DB_PORT'   => 3306,
		'DB_PREFIX' => 'seer2tool_',
);
}
?>