<div class="container">
    <form method="post" class="productForm" enctype="application/x-www-form-urlencoded">
        <h3 class="text-center h3">Chi tiết hóa đơn</h3>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Tên người mua:</b></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_user"
                readonly value="<?php if (!empty($data['showUser'])) {
                    foreach ($data['showUser'] as $showUser) {
                        if($data['getBillById']['id_user'] == $showUser['id_user']) {
                            echo ''.$showUser['user_name'].'';
                        }
                    }
                } ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Email người mua:</b></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_user"
                readonly value="<?php if (!empty($data['showUser'])) {
                    foreach ($data['showUser'] as $showUser) {
                        if($data['getBillById']['id_user'] == $showUser['id_user']) {
                            echo ''.$showUser['email'].'';
                        }
                    }
                } ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Số điện thoại người mua:</b></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_user"
                readonly value="<?php if (!empty($data['showUser'])) {
                    foreach ($data['showUser'] as $showUser) {
                        if($data['getBillById']['id_user'] == $showUser['id_user']) {
                            echo ''.$showUser['phone_number'].'';
                        }
                    }
                } ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Địa chỉ người mua:</b></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_user"
                readonly value="<?php if (!empty($data['showUser'])) {
                    foreach ($data['showUser'] as $showUser) {
                        if($data['getBillById']['id_user'] == $showUser['id_user']) {
                            echo ''.$showUser['user_address'].'';
                        }
                    }
                } ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Tên sản phẩm:</b></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="id_product" readonly value="<?php if (!empty($data['showPro'])) {
                    foreach ($data['showPro'] as $showPro) {
                        if($data['getDetailBillById']['id_product'] == $showPro['id_product']) {
                            echo ''.$showPro['product_name'].'';
                        }
                    }
                } ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Giá sản phẩm:</b></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="id_product" readonly value="<?php if (!empty($data['showPro'])) {
                    foreach ($data['showPro'] as $showPro) {
                        if($data['getDetailBillById']['id_product'] == $showPro['id_product']) {
                            echo ''.$showPro['price'].'';
                        }
                    }
                } ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Ngày mua:</b></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="date_create" readonly value="<?php if (isset($data['getBillById']) && !empty($data['getBillById'])) {
                    echo $data['getBillById']['date_create'];
                } ?>">
        </div>
        <a href="/nienluancoso/admin/showBill" class="btn btn-primary">Trở lại</a>
    </form>
</div>