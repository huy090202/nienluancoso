<?php



class dangky extends Controller{

    function loading(){
        
        $user = $this->model('user');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST)) {
                $callUser = $user->dangky($_POST);
                $_POST = [];

                if ($callUser) {
                    redirect('/nienluancoso/dangnhap');
                } else {
                    echo "<script>alert('Đăng Ký Thất Bại, Vui Lòng Thực Hiện Lại!');</script>";
                }
            }
        }

        $this->view('index', [
            'page'=> 'dangky',
            'title'=> 'Anker - Đăng Ký',
            'css' => 'dangky'
        ]);
    }
    
}
?>