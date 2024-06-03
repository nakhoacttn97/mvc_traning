<?php
class ProductModel{
    public function getProductList(){
        return [
            'Product 1',
            'Product 2',
            'Product 3',
            'Product 4'
        ];
    }

    public function getDetail($id){
        $data = [
            'Product 6',
            'Product 7',
            'Product 8',
            'Product 9'
        ];

        return $data[$id];
    }
}