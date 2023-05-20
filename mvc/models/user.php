<?php 
class user extends DB{
    // dang ky
    public function dangky(array $post): bool {
        if (!empty($post)) {
            $data = $post;
    
            if (!empty($data['user_password'] != $data['psw2'])) {
                echo "<script>alert('Mật khẩu và xác nhận mật khẩu không khớp, vui lòng thực hiện lại !');</script>";
                return false;
            }
    
            unset($data['psw2']);
    
            if (array_key_exists("remember", $data)) {
                unset($data["remember"]);
            }
    
            if (empty($data['user_address'])) {
                echo "<script>alert('Địa chỉ không được bỏ trống, vui lòng nhập địa chỉ !');</script>";
                return false;
            }
    
            $data["id_user"] = substr(uniqid(), 0, 8);
            $data["isAdmin"] = 0;
            $data["user_password"] = password_hash($data["user_password"], PASSWORD_BCRYPT);
    
            $sql = "INSERT INTO `user` (`id_user`, `user_name`, `user_password`, `email`, `phone_number`, `user_address`, `isAdmin` ) 
                VALUES (:id_user, :user_name, :user_password, :email, :phone_number, :user_address, :isAdmin)";
            return $this->insert($sql, $data);
        } else {
            return false;
        }
    }
    // dang nhap
    public function dangnhap (array $post) : bool{
        if(!empty($post)){
            $data=$post;
            if (array_key_exists("remember", $data)) {
                unset($data["remember"]);
            }
            $sql = "SELECT * FROM `user` WHERE `user_name` = ?";
            $user = $this->read($sql, [$data["user_name"]], "single");
            
            if (!empty($user) && password_verify($data["password"], $user["user_password"])) {
                setcookie("id_user", $user["id_user"], time() + (86400 * 30), "/");
                setcookie("user_name", $user["user_name"], time() + (86400 * 30), "/");
                return true;
            } else {
                return false;
            }
        } else{
            return false;
        }
    }

    // lay tat ca nguoi dung
    public function getAllUsers() : array {
        $sql = "SELECT * FROM `user`";
        return $this->read($sql);
    }

    // dem sl nguoi dung
    public function getCountUsers() : array {
        $sql = "SELECT * FROM `user`";
        return $this->read($sql, [], "count");
    }

    //lay nguoi dung theo id
    public function getUserById(string $id) : array {
        $sql = "SELECT * FROM `user` WHERE `id_user` = ?";
        return $this->read($sql, [$id], "single");
    }

    // cap nhat thong tin user
    public function updateUser(string $id, array $data) : int|false {
        
        // Chuẩn bị câu truy vấn SQL và binding các tham số
        $sql = "UPDATE `user`
        SET `email` = :email, `phone_number` = :phone_number, `user_address` = :user_address
        WHERE `id_user` = :id_user";
        $params = [
            ':email' => $data['email'],
            ':phone_number' => $data['phone_number'],
            ':user_address' => $data['user_address'],
            ':id_user' => $id,
        ];
        return $this->update($sql, $params);
    }

    //cap nhat quyen admin
    public function updateAdmin(string $id, array $data) : int|false {
        
        // Chuẩn bị câu truy vấn SQL và binding các tham số
        $sql = "UPDATE `user`
        SET `isAdmin` = :isAdmin
        WHERE `id_user` = :id_user";
        $params = [
            ':isAdmin' => $data['isAdmin'],
            ':id_user' => $id,
        ];
        return $this->update($sql, $params);
    }
}