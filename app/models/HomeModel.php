<?php
/*
    Ke thua tu class Model
    Model do handle data from database
*/
class HomeModel{
    public $_table = 'products';
    
    public function getList(){
        $data =[
            'Item 1',
            'Item 2',
            'Item 3',
        ];
        return $data;
    }

    public function getDetail($id){
        $data =[
            'Item 1',
            'Item 2',
            'Item 3',
        ];
        return $data[$id];
    }
}