<div class="container">
    <form method="post" class="productForm" enctype="application/x-www-form-urlencoded">
        <h3 class="text-center h3">Thêm Sản Phẩm Mới</h3>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Tên sản phẩm:</b></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nhập vào tên sản phẩm" name="product_name" required title="Nhập vào tên sản phẩm">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Giá sản phẩm:</b></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nhập vào giá sản phẩm" name="price" required title="Nhập vào giá sản phẩm">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Ảnh sản phẩm:</b></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nhập vào link sản phẩm" name="image" required title="Nhập vào link sản phẩm">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Số lượng sản phẩm:</b></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nhập vào số lượng sản phẩm" name="allQuantityPro" required
                title="Nhập vào số lượng sản phẩm">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1"><b>Chi tiết sản phẩm:</b></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                placeholder="Nhập vào chi tiết sản phẩm" name="describe_pro"
                title="Nhập vào chi tiết sản phẩm"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1"><b>Loại sản phẩm:</b></label>
            <select class="form-control" id="exampleFormControlSelect1" name="id_type" title="Chọn loại sản phẩm">
                <?php
                    if (!empty($data['type'])) {
                        foreach ($data['type'] as $type) {
                            echo '<option value="'.$type['id_type'].'">'.$type['name_type'].'</option>';
                        }
                    } 
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
</div>