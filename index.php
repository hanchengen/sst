<?php
/**
 *  应用入口文件 
 */
//框架入口文件
$iweb = dirname(__FILE__)."/lib/iweb.php";
//配置文件
$config = dirname(__FILE__)."/config/config.php";
require($iweb);
//启动程序
IWeb::createWebApp($config)->run();
?>
