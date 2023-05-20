<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã loại</th>
                <th scope="col">Tên loại</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                if (!empty($data['type'])) {
                    foreach ($data['type'] as $type) {
                        echo '<tr>
                            <th scope="row">'.$type['id_type'].'</th>
                            <td>'.$type['name_type'].'</td>
                            <td>
                            <div class="d-flex">
                                <a href="/nienluancoso/admin/updateTypeById/'.$type['id_type'].'" class="btn btn-primary mr-1">Sửa</a>
                                <a href="/nienluancoso/admin/deleteType/'.$type['id_type'].'" class="btn btn-danger">Xóa</a>
                            </div>
                        </td>
                        </tr>';
                    }
                }
            ?>
        </tbody>
    </table>
</div>