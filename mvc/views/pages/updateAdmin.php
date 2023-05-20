<div class="container">
    <form method="post" class="productForm" enctype="application/x-www-form-urlencoded">
        <h3 class="text-center h3">Cập Nhật Quyền Quản Trị</h3>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Quyền:</b></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nhập vào 0 hoặc 1" name="isAdmin" pattern="[0-1]" required title="Nhập vào 0 hoặc 1" value="<?php if (isset($data['getAdminById']) && !empty($data['getAdminById'])) {
                    echo $data['getAdminById']['isAdmin'];
                } ?>">
        </div>
        <a href="/nienluancoso/admin/user" class="btn btn-danger">Trở lại</a>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>