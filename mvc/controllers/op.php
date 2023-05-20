<?php



define('LENGTH', 12);
class op extends Controller{

    function loading(){
        
        $product = ($this->model('product'))->getProductOp(LENGTH);

        $this->view('index', [
            'page'=> 'op',
            'css' => 'sanpham',
            'title'=> 'Sản Phẩm - Ốp Lưng',
            'product' => $product
        ]);
    }
    
}
?>