<?php



class tintuc extends Controller{

    function loading(){
        
        $this->view('index', [
            'page'=> 'tintuc',
            'title'=> 'Anker - Tin Tức',
            'css' => 'tintuc'
        ]);
    }
    
}
?>