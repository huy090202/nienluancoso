<div class="container">
    <form method="post" class="productForm" enctype="application/x-www-form-urlencoded">
        <h3 class="text-center h3">Cập Nhật Thông Tin Người Dùng</h3>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Email:</b></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nhập vào email" name="email" required title="Nhập vào email" value="<?php if (isset($data['updateUserById']) && !empty($data['updateUserById'])) {
                    echo $data['updateUserById']['email'];
                } ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Số điện thoại:</b></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nhập vào số điện thoại" name="phone_number" required title="Nhập vào số điện thoại" value="<?php if (isset($data['updateUserById']) && !empty($data['updateUserById'])) {
                    echo $data['updateUserById']['phone_number'];
                } ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Địa chỉ:</b></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nhập vào địa chỉ" name="user_address" required title="Nhập vào địa chỉ" value="<?php if (isset($data['updateUserById']) && !empty($data['updateUserById'])) {
                    echo $data['updateUserById']['user_address'];
                } ?>">
        </div>
        <a href="/nienluancoso/nguoidung" class="btn btn-danger">Trở lại</a>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>