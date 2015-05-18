<?php
return array(
	'logs'=>array(
		'path'=>'logs/log',
		'type'=>'file'
	),
	'DB'=>array(
		'type'=>'mysqli',
        'tablePre'=>'test_',
		'read'=>array(
			array('host'=>'localhost:3306','user'=>'root','passwd'=>'root','name'=>'iweb'),
		),

		'write'=>array(
			'host'=>'localhost:3306','user'=>'root','passwd'=>'root','name'=>'iweb',
		),
	),
	'interceptor' => array('themeroute@onCreateController','layoutroute@onCreateView'),
	'langPath' => 'language',
	'viewPath' => 'views',
	'skinPath' => 'skin',
    'classes' => 'classes.*',
    'rewriteRule' =>'url',
	'theme' => array('pc' => 'default','mobile' => 'mobile'),
	'skin' => array('pc' => 'default','mobile' => 'default'),
	'timezone'	=> 'Etc/GMT-8',
	'upload' => 'upload',
	'dbbackup' => 'backup/database',
	'safe' => 'cookie',
	'safeLevel' => 'none',
	'lang' => 'zh_sc',
	'debug'=> true,
	'configExt'=> array('site_config'=>'config/site_config.php'),
	'encryptKey'=>'568ab0cec12831f68ec0dfa24cf3278f',
);
?>