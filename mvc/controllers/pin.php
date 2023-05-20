<?php



define('LENGTH', 12);
class pin extends Controller{

    function loading(){
        
        $product = ($this->model('product'))->getProductPin(LENGTH);

        $this->view('index', [
            'page'=> 'pin',
            'css' => 'sanpham',
            'title'=> 'Sản Phẩm - Pin Dự Phòng',
            'product' => $product
        ]);
    }
    
}
?>