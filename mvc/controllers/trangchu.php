<?php


define('LENGTH', 12);
class trangchu extends Controller {

    //tim kiem san pham
    function searchProduct() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $search = isset($_POST['search']) ? $_POST['search'] : '';
            $products = [];
            if (!empty($search)) {
                $products = ($this->model('product'))->searchPro($search);
            }
            $this->view('index', [
                'page'=> 'searchPro',
                'css' => 'searchPro',
                'title'=> 'Anker - Tìm Kiếm',
                'products' => $products, 
                'search' => $search
            ]);
        }
    }
 

    function loading() {
 
        //hien thi sl sp tren header
        $product = [];
        if(isset($_SESSION['cart'])) {
            $product = $_SESSION['cart'];
        }

        $product = ($this->model('product'))->getProductAllLimit(LENGTH);


        $this->view('index', [
            'page'=> 'trangchu',
            'title'=> 'Anker - Trang Chủ',
            'css' => 'trangchu',
            'js' => 'trangchu',
            'product' => $product,
        ]);
    }
    
}
?>