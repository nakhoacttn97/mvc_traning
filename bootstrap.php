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

// check connect database
if(!empty($config['database'])){
    $db_config = array_filter($config['database']);
    if(!empty($db_config)){
        require_once "core/Connection.php";
        //$conn = Connection::getInstance($config);  // se goi ben trong class khac
        //var_dump($conn);
        require_once "core/Database.php";
        $db = new Database();
    }
}

require_once("core/BaseController.php");    //Load Base Controller


/** 
 * Window -> \
 * Linux + Apache -> /
 * 
 * Note handle http:
 *      + can su dung strtolower de chuyen doi IN HOA -> chu thuong
 */