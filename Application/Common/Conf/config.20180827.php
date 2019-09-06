<?php
require dirname(__FILE__).'/secure.php';
if(!defined('WHERECOME')){
	define('WHERECOME','HOME');
}
return array(
	'DB_TYPE'              => DB_TYPE,
	'DB_HOST'              => '192.168.1.2',
	'DB_NAME'              => 'tjyhy',
	'DB_USER'              => 'root',
	'DB_PWD'               => '111111',
	'DB_PORT'              => '3306',
	'DB_PREFIX'            => 'tw_',
	'ACTION_SUFFIX'        => '',
	'MULTI_MODULE'         => true,
	'MODULE_DENY_LIST'     => array('Common', 'Runtime'),
	'MODULE_ALLOW_LIST'    => array('Home', 'Mobile', 'Admin'),
	'DEFAULT_MODULE'       => WHERECOME,
	'URL_CASE_INSENSITIVE' => false,
	'URL_MODEL'            => 2,
	'LANG_SWITCH_ON' => true,   // 开启语言包功能
	'LANG_AUTO_DETECT' => true, // 自动侦测语言 开启多语言功能后有效
	'DEFAULT_LANG' => 'zh-cn', // 默认语言
	'LANG_LIST'        => 'zh-cn,en-us', // 允许切换的语言列表 用逗号分隔
	'VAR_LANGUAGE'     => 'l', // 默认语言切换变量
	'think_email' => array(
		'smtp_host' => 'smtp.mxhichina.com', //SMTP服务器
		'smtp_port' => '465', //SMTP服务器端口
		'smtp_user' => 'admin@xxx.ren', //SMTP服务器用户名
		'smtp_pass' => 'xxx', //SMTP服务器密码
		'from_email' => 'admin@xxx.ren',
		'from_name' => '合约交易', //发件人名称
		'reply_email' => '', //回复EMAIL（留空则为发件人EMAIL）
		'reply_name' => '', //回复名称（留空则为发件人名称）
		'session_expire'=>'72',
	),
);
?>
