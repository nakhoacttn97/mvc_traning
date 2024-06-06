<?php
class Connection{
    private static $instance = NULL;

    private function __construct($config){
        // Connect to database
        
        try{
            // Cau hinh DSN
            $dsn = 'mysql:dbname='.$config['db'].';host='.$config['host'];

            // Cau hinh $options
            /**
             *  - Cau hinh utf8
             *  - Cau hinh ngoai le kh truy van bi loi
             */
            $option = [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];
            // Cau lenh ket noi
            $con = new PDO($dsn, $config['user'], $config['pass'], $option);
        }catch(Exception $exception){
            $mess = $exception->getMessage();

            if(preg_match('/Acsess denied for user/', $mess)){
                die('Connect database failed ! Error!');
            }

            if(preg_match('/Unknown database/', $mess)){
                die('Not found database');
            }
        }
    }

    public static function getInstance($config){
        if(self::$instance == NULL){
            self::$instance = new Connection($config);
        }

        return self::$instance;
    }
}