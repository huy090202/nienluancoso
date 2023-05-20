<div class="container">
    <form class="productForm">
        <h3 class="text-center h3">Nội dung liên hệ</h3>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Tên nguời liên hệ:</b></label>
            <input type="text" readonly class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="id_user" value="<?php if (!empty($data['showUser'])) {
                    foreach ($data['showUser'] as $showUser) {
                        if($data['contact']['id_user'] == $showUser['id_user']) {
                            echo ''.$showUser['user_name'].'';
                        }
                    }
                } ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Email:</b></label>
            <input type="text" readonly class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="id_user" value="<?php if (!empty($data['showUser'])) {
                    foreach ($data['showUser'] as $showUser) {
                        if($data['contact']['id_user'] == $showUser['id_user']) {
                            echo ''.$showUser['email'].'';
                        }
                    }
                } ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Số điện thoại:</b></label>
            <input type="text" readonly class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="id_user" value="<?php if (!empty($data['showUser'])) {
                    foreach ($data['showUser'] as $showUser) {
                        if($data['contact']['id_user'] == $showUser['id_user']) {
                            echo ''.$showUser['phone_number'].'';
                        }
                    }
                } ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Địa chỉ:</b></label>
            <input type="text" readonly class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="id_user" value="<?php if (!empty($data['showUser'])) {
                    foreach ($data['showUser'] as $showUser) {
                        if($data['contact']['id_user'] == $showUser['id_user']) {
                            echo ''.$showUser['user_address'].'';
                        }
                    }
                } ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1"><b>Nội dung liên hệ:</b></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content" readonly>
                <?php if (isset($data['contact']) && !empty($data['contact'])) {
                    echo $data['contact']['content'];} ?></textarea>
        </div>
        <a href="/nienluancoso/admin/showContact" class="btn btn-danger">Trở lại</a>
    </form>
</div>