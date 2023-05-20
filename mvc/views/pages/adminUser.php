<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã khách hàng</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Email</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Quyền quản trị</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                if (!empty($data['user'])) {
                    foreach ($data['user'] as $user) {
                        echo '<tr>
                            <th scope="row">'.$user['id_user'].'</th>
                            <td>'.$user['user_name'].'</td>
                            <td>'.$user['email'].'</td>
                            <td>'.$user['phone_number'].'</td>
                            <td>'.$user['user_address'].'</td>
                            <td>'.$user['isAdmin'].'</td>
                            <td>
                                <div class="d-flex">
                                <a href="/nienluancoso/admin/updateAdmin/'.$user['id_user'].'" class="btn btn-primary">Cập nhật quyền</a>
                                </div>
                            </td>
                        </tr>';
                    }
                }
            ?>
        </tbody>
    </table>
</div>