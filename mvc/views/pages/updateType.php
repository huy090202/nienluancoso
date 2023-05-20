<div class="container">
    <form method="post" class="productForm" enctype="application/x-www-form-urlencoded">
        <h3 class="text-center h3">Cập Nhật Loại Sản Phẩm</h3>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Tên Loại:</b></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nhập vào tên loại" name="name_type" required title="Nhập vào tên loại" value="<?php if (isset($data['getTypeById']) && !empty($data['getTypeById'])) {
                    echo $data['getTypeById']['name_type'];
                } ?>">
        </div>
        <a href="/nienluancoso/admin/typeShow" class="btn btn-danger">Trở lại</a>
        <button type="submit" class="btn btn-primary">Sửa</button>
    </form>
</div>