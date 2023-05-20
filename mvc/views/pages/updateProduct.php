<div class="container">
    <form method="post" class="productForm" enctype="application/x-www-form-urlencoded">
        <h3 class="text-center h3">Cập Nhật Sản Phẩm</h3>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Tên sản phẩm:</b></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nhập vào tên sản phẩm" name="product_name" title="Nhập vào tên sản phẩm cần thay đổi"
                value="<?php if (isset($data['getProById']) && !empty($data['getProById'])) {
                    echo $data['getProById']['product_name'];
                } ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Giá sản phẩm:</b></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nhập vào giá sản phẩm" name="price" title="Nhập vào giá sản phẩm cần thay đổi" value="<?php if (isset($data['getProById']) && !empty($data['getProById'])) {
                    echo $data['getProById']['price'];
                } ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Ảnh sản phẩm:</b></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nhập vào link sản phẩm" name="image" title="Nhập vào link sản phẩm cần thay đổi" value="<?php if (isset($data['getProById']) && !empty($data['getProById'])) {
                    echo $data['getProById']['image'];
                } ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Số lượng sản phẩm:</b></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nhập vào số lượng sản phẩm" name="allQuantityPro"
                title="Nhập vào số lượng sản phẩm cần thay đổi" value="<?php if (isset($data['getProById']) && !empty($data['getProById'])) {
                    echo $data['getProById']['allQuantityPro'];
                } ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1"><b>Chi tiết sản phẩm:</b></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                placeholder="Nhập vào chi tiết sản phẩm" name="describe_pro"
                title="Nhập vào chi tiết sản phẩm cần thay đổi"><?php if (isset($data['getProById']) && !empty($data['getProById'])) {
                    echo $data['getProById']['describe_pro'];
                } ?></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1"><b>Loại sản phẩm:</b></label>
            <select class="form-control" id="exampleFormControlSelect1" name="id_type"
                title="Chọn loại sản phẩm cần thay đổi">
                <?php
                    if (!empty($data['showType'])) {
                        foreach ($data['showType'] as $showType) {
                            $param = "";
                            if($data['getProById']['id_type'] == $showType['id_type']) {
                                $param .= "selected";
                            }
                            echo '<option value="'.$showType['id_type'].'" '.$param.'>'.$showType['name_type'].'</option>';
                        }
                    } 
                ?>
            </select>
        </div>
        <a href="/nienluancoso/admin/productShow" class="btn btn-danger">Trở lại</a>
        <button type="submit" class="btn btn-primary">Sửa</button>
    </form>
</div>