<?php



class hethong extends Controller{

    function loading(){
        
        $this->view('index', [
            'page'=> 'hethong',
            'title'=> 'Anker - Hệ Thống Cửa Hàng',
            'css' => 'hethong'
        ]);
    }
    
}
?>