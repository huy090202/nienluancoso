<?php



class dangnhap extends Controller{

    function loading(){
        
        $user = $this->model('user');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST)) {
                //luu user_name vao session de hien thi o trang admin
                if (isset($_POST['user_name'])) {
                    $_SESSION['user_name'] = $_POST['user_name'];
                }
                //dang nhap
                $callUser = $user->dangnhap($_POST);
                $_POST = [];

                if ($callUser) {
                    if(isset($_COOKIE['id_user'])) {
                        $user = ($this->model('user'))->getUserById($_COOKIE['id_user']);
                        if(!empty($user)) {
                            if ($user['isAdmin'] == 1) {
                                redirect('/nienluancoso/admin');
                            } else {
                                redirect('/nienluancoso/trangchu');
                            }
                        }
                    }
                    redirect('/nienluancoso/trangchu');
                } else {
                    echo "<script>alert('Đăng Nhập Thất Bại, Vui Lòng Thực Hiện Lại!');</script>";
                }
            }
        }

        $this->view('index', [
            'page'=> 'dangnhap',
            'title'=> 'Anker - Đăng Nhập',
            'css' => 'dangnhap',
            'js' => 'dangnhap'
        ]);
    }
    
}
?>