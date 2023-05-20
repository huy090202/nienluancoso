<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã hóa đơn</th>
                <th scope="col">Ngày lập</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                if (!empty($data['bill'])) {
                    foreach ($data['bill'] as $bill) {
                        echo '<tr>
                            <th scope="row">'.$bill['id_bill'].'</th>
                            <td><p>'.$bill['date_create'].'</p></td>
                            <td><p>'.$bill['statusBill'].'</p></td>
                            <td><p>'.$bill['user_name'].'</p></td>
                            <td>
                            <div class="d-flex">
                                <a href="/nienluancoso/admin/confirmBill/'.$bill['id_bill'].'" class="btn btn-primary mr-1">Xác nhận</a>
                                <a href="/nienluancoso/admin/showDetailBill/'.$bill['id_bill'].'" class="btn btn-success mr-1">Xem</a>
                                <a href="/nienluancoso/admin/deleteBill/'.$bill['id_bill'].'" class="btn btn-danger">Hủy</a>
                            </div>
                        </td>
                        </tr>';
                    }
                }
            ?>
        </tbody>
    </table>
</div>