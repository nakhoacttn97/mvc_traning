<?php
define('_DIR_ROOT', __DIR__);

// handle http root
if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on'){
    $web_root = 'https://'.$_SERVER['HTTP_HOST'];
}else{
    $web_root = 'http://'.$_SERVER['HTTP_HOST'];
}


$folder = str_replace(strtolower($_SERVER['DOCUMENT_ROOT']), '', strtolower(_DIR_ROOT));

$web_root = $web_root.$folder;

define('_WEB_ROOT', $web_root);
/**
 * Autoload config
 */
$config_dir = scandir('configs');
if(!empty($config_dir)){
    foreach($config_dir as $item){
        if($item != '.' && $item != '..' && file_exists('configs/'.$item)){
            require_once 'configs/'.$item;
        }
    }
}


require_once('core/Route.php'); //Load Route class
require_once("app/App.php");    //Load App

$db_config = array_filter($config['database']);
var_dump($db_config);
require_once("core/BaseController.php");    //Load Base Controller


/** 
 * Window -> \
 * Linux + Apache -> /
 * 
 * Note handle http:
 *      + can su dung strtolower de chuyen doi IN HOA -> chu thuong
 */