<?php


class chitietsp extends Controller{

    

    function loading(){

        $this->view('index', [
            'page'=> 'chitietsp',
            'css' => 'chitietsp',
            'title'=> 'Anker - Chi Tiết Sản Phẩm',
            'js' => 'chitietsp',
        ]);
    }
}