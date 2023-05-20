<div class="container">
    <div class="row">
        <div class="col-12 col-sm-6 col-lg-7">
            <div class="group-table">
                <table class="bang">
                    <thead>
                        <tr class="table_header">
                            <th class="sp">Sản Phẩm</th>
                            <th class="pd7px">Giá</th>
                            <th class="pd7px">Số Lượng</th>
                            <th class="pd7px">Hành Động</th>
                        </tr>
                    </thead>
                    <tbody class="product-cart">
                        <?php 
                            if (!empty($data['product'])) {
                                foreach($data['product'] as $product) {
                                echo '
                                    <tr>
                                        <td>
                                            <div class="cart-product d-flex justify-content-center align-items-center">
                                                <img src="/nienluancoso/'.$product['image'].'" alt="">
                                                <p class="cart-p">'.$product['product_name'].'</p>
                                            </div>
                                        </td>
                                        <td>'.$product['dola'].' ₫</td>
                                        <td>
                                            <input type="number" value="'.$product['quantity'].'" min="1" max="999">
                                        </td>
                                        <td>
                                            <a href="/nienluancoso/giohang/deleteProCart/'.$product['id_product'].'" class="btn btn-danger">Xóa</a>
                                        </td>
                                    </tr>';
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="baoquanhbtn">
                <a href="/nienluancoso/sanpham" class="seen my-2">← Tiếp tục xem sản phẩm</a>
                <button class="update my-2">Cập nhật giỏ hàng</button>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-5">
            <div class="right">
                <div class="r_header">TỔNG SỐ LƯỢNG</div>
                <div class="t_total1">
                    <span>Tổng phụ</span>
                    <span><strong class="total-sup"><?= $data['sumDola'] ?> ₫</strong></span>
                </div>
                <div class="b_total1">
                    <span>Tổng</span>
                    <span><strong class="total-last"><?= $data['sumDola'] ?> ₫</strong></span>
                </div>
                <form method="post">
                    <button class="pay" type="submit">TIẾN HÀNH THANH TOÁN</button>
                </form>
                <div class="endow">
                    <i class="fa-solid fa-tag"></i>
                    <span>Phiếu ưu đãi</span>
                </div>
                <input type="text" class="code" placeholder="Mã ưu đãi" />
                <button class="apply">Áp dụng</button>
            </div>
        </div>
    </div>
</div>