<?php



define('LENGTH', 12);
class tainghe extends Controller{

    function loading(){
        
        $product = ($this->model('product'))->getProductTai(LENGTH);

        $this->view('index', [
            'page'=> 'tainghe',
            'css' => 'sanpham',
            'title'=> 'Sản Phẩm - Tai Nghe',
            'product' => $product
        ]);
    }
    
}
?>