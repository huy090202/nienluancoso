<div class="container">
    <form method="post" class="productForm" enctype="application/x-www-form-urlencoded">
        <h3 class="text-center h3">Cập Nhật trạng thái bill</h3>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Trạng thái:</b></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nhập trạng thái bill (0 = chưa xác nhận, 1 = xác nhận)" name="statusBill" required
                title="Nhập trạng thái bill (0 = chưa xác nhận, 1 = xác nhận)" pattern="[0-1]" value="<?php if (isset($data['getBillById']) && !empty($data['getBillById'])) {
                    echo $data['getBillById']['statusBill'];
                } ?>">
        </div>
        <a href="/nienluancoso/admin/showBill" class="btn btn-danger">Trở lại</a>
        <button type="submit" class="btn btn-primary">Sửa</button>
    </form>
</div>