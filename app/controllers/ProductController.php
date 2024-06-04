<?php
class ProductController extends BaseController{
    protected $data;
    public function index(){
        echo 'Danh sach san pham';
    }

    public function list_product(){
        $product = $this->model('ProductModel');
        $dataProduct = $product->getProductList();

        // handle data
        $title = "Danh sach san pham";

        $this->data['sub_content']['product_list'] = $dataProduct;
        $this->data['sub_content']['page_title'] = $title;
        $this->data['page_title'] = $title;
        $this->data['content'] = 'products/list';

        //Render view
        $this->render('layouts/client_layout', $this->data);
    }

    public function detail($id){
        $product = $this->model('ProductModel');
        $this->data['sub_content']['info'] = $product->getDetail($id);
        $this->data['sub_content']['title'] = 'Chi tiet san pham';
        $this->data['page_title'] = 'Chi tiet san pham';
        $this->data['content'] = 'products/details';
        $this->render('layouts/client_layout', $this->data);
    }
}