<?php
class Controller{

    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function view($view, $data=[]){
        require_once "./mvc/views/".$view.".php";
    }

    //them san pham vao gio hang
    public function addCart(array $post) : void {
        if(!empty($post)) {
            if(!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            } 
            if(empty($_SESSION['cart'])) {
                array_push($_SESSION['cart'], $post); 
            } else {
                $check = [];
                $checkSave = true;
                foreach($_SESSION['cart'] as $value) {
                    if($value['id_product'] == $post['id_product']) {
                        $checkSave = false;
                       $value['quantity'] =+ $value['quantity'];
                       $value['quantity'] += +$post['quantity'];

                    }
                    
                    $check[]= $value;

                }
                if($checkSave) {
                    $check[] = $post;
                }
    
                $_SESSION['cart'] = $check;
            }
        }
    }

}
?>