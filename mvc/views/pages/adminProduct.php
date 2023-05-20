<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã sản phẩm</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Chi tiết sản phẩm</th>
                <th scope="col">Loại sản phẩm</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                if (!empty($data['product'])) {
                    foreach ($data['product'] as $product) {
                        echo '<tr>
                            <th scope="row">'.$product['id_product'].'</th>
                            <td><p>'.$product['product_name'].'</p></td>
                            <td>
                                <div>
                                '.$product['price'].'₫
                                </div>
                            </td>
                            <td><img class="tableImg" src="/nienluancoso/'.$product['image'].'" alt=""></td>
                            <td><p>'.$product['allQuantityPro'].'</p></td>
                            <td><p>'.$product['describe_pro'].'</p></td>
                            <td><p>'.$product['name_type'].'</p></td>
                            <td>
                            <div class="d-flex">
                                <a href="/nienluancoso/admin/updateProduct/'.$product['id_product'].'" class="btn btn-primary mr-1">Sửa</a>
                                <a href="/nienluancoso/admin/deleteProduct/'.$product['id_product'].'" class="btn btn-danger">Xóa</a>
                            </div>
                        </td>
                        </tr>';
                    }
                }
            ?>
        </tbody>
    </table>
</div>