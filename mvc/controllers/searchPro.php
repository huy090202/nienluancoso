<?php



class searchPro extends Controller{

    function loading(){
        
        $this->view('index', [
            'page'=> 'searchPro',
            'css' => 'searchPro',
            'title'=> 'Anker - Tìm Kiếm',
        ]);
    }
    
}
?>