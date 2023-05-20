<?php


define('LENGTH', 16);
class sanpham extends Controller{
    
    //chi tiet san pham
    function describeProduct($id){
        
        //them san pham vao gio hang
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_COOKIE['id_user'])) {
                $this->addCart($_POST);
                $_POST = [];
                redirect('/nienluancoso/giohang');
            } else {
                echo '<script>alert("Bạn chưa đăng nhập, vui lòng đăng nhập và thực hiện lại!");</script>';
            }
        }

        if(strlen($id) == 0){
            redirect('/nienluancoso/trangchu');
        }
        $data = ($this->model('product'))->getProductById($id);
        $allProducts = ($this->model('product'))->getAllProducts();

        $this->view('index', [
            'page'=> 'chitietsp',
            'css' => 'chitietsp',
            'title'=> 'Anker - Chi Tiết Sản Phẩm',
            'js' => 'chitietsp',
            'product' => $data,
            'allProducts' => $allProducts
        ]);
    }

    function loading(){
        
        
        $product = ($this->model('product'))->getProductAllLimit(LENGTH);

        $this->view('index', [
            'page'=> 'sanpham',
            'css' => 'sanpham',
            'title'=> 'Anker - Sản Phẩm',
            'product' => $product,
        ]);
    }
    
}
?>