<?php



class nguoidung extends Controller{
    
    //Cap nhat thong tin nguoi dung
    function updateUserById(string $id) {
        $updateUserById = ($this->model('user'))->getUserById($id);

        if (!$updateUserById) {
            die('Người dùng không tồn tại');
        }
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = array(
                'email' => $_POST['email'],
                'phone_number' => $_POST['phone_number'],
                'user_address' => $_POST['user_address'],
            );
            $updateTypeById = ($this->model('user'))->updateUser($id, $data);

            if($updateTypeById) {
                redirect('/nienluancoso/nguoidung');
            } else {
                echo "<script>alert('Cập nhật thông tin người dùng thất bại, vui lòng thực hiện lại!');</script>";
            }
        }
        

        $this->view('isUser', [
            'page'=> 'nguoidung',
            'css' => 'nguoidung',
            'userChild' => 'updateUser',
            'updateUserById' => $updateUserById,
        ]);

    }

    function loading(){
        $user = ($this->model('user'))->getUserById($_COOKIE['id_user']);
        $this->view('isUser', [
            'page'=> 'nguoidung',
            'css' => 'nguoidung',
            'title'=> 'Anker - Người Dùng',
            'getUserById'=>$user
        ]);
    }
    
}
?>