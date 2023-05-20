<?php



define('LENGTH', 12);
class sac extends Controller{

    function loading(){
        
        $product = ($this->model('product'))->getProductSac(LENGTH);

        $this->view('index', [
            'page'=> 'sac',
            'css' => 'sanpham',
            'title'=> 'Sản Phẩm - Sạc',
            'product' => $product
        ]);
    }
    
}
?>