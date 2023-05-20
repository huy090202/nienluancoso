<?php



class lienhe extends Controller{

    function loading(){
        
        if(isset($_COOKIE['id_user'])) {
            $user = ($this->model('user'))->getUserById($_COOKIE['id_user']);
        } else {
            redirect('/nienluancoso/dangnhap');
        }

        $addContact = $this->model('contact');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST)) {                
                $_POST['id_user'] = $_COOKIE['id_user'];
                $callContact = $addContact->addContact($_POST);
                $_POST = [];
                if ($callContact) {
                    redirect('/nienluancoso/lienhe');
                } else {
                    echo "<script>alert('Liên Hệ Thất Bại, Vui Lòng Thực Hiện Lại!');</script>";
                }
            }
        }
        
        $this->view('index', [
            'page'=> 'lienhe',
            'title'=> 'Anker - Liên Hệ Và Sủa Chữa',
            'css' => 'lienhe',
            'js' => 'dangky',
            'getContact'=>$addContact,
            'getUserById' => $user
        ]);
    }
    
}
?>