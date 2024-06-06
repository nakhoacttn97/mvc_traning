<?php

use FTP\Connection as FTPConnection;

class Connection{
    private static $instance = NULL;

    private function __construct(){
        // Connect to database
    }

    public static function getInstance(){
        if(self::$instance == NULL){
            self::$instance = new Connection();
        }

        return self::$instance;
    }
}