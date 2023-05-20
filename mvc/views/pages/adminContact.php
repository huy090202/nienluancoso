<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã liên hệ</th>
                <th scope="col">Nội dung liên hệ</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                if (!empty($data['contact'])) {
                    foreach ($data['contact'] as $contact) {
                        echo '<tr>
                            <th scope="row">'.$contact['id_contact'].'</th>
                            <td><p>'.$contact['content'].'</p></td>
                            <td><p>'.$contact['user_name'].'</p></td>
                            <td>
                            <div class="d-flex">
                                <a href="/nienluancoso/admin/seeContact/'.$contact['id_contact'].'" class="btn btn-success mr-1">Xem</a>
                                <a href="/nienluancoso/admin/deletecontact/'.$contact['id_contact'].'" class="btn btn-danger">Hủy</a>
                            </div>
                        </td>
                        </tr>';
                    }
                }
            ?>
        </tbody>
    </table>
</div>