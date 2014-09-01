<?php
# 全局变量
define("DS",DIRECTORY_SEPARATOR);
define('DOMAIN','http://www.ibixiong.com');
//define('OSSDOMAIN','http://ibixiongtest.oss.aliyuncs.com');
define('OSSDOMAIN','http://ibixiong.oss.aliyuncs.com');
define('UPLOAD_BUCKET', 'ibixiong');
define("APPLICATION_PATH",realpath((phpversion() >= "5.3"? __DIR__: dirname(__FILE__)).'/../'));
# 加载配置文件
$app = new Yaf_Application(APPLICATION_PATH . "/conf/application.ini");
$app->bootstrap()->run();