<?php 
include('src/DB.php');
use astute\CodeIgniterDB as CI;
$db_data = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'database_username',
	'password' => 'database_user_password',
	'database' => 'database_name',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => TRUE,
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
$db =& CI\DB($db_data);
