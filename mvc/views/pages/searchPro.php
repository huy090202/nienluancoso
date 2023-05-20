<div class="container">
    <p class="title text-left">Kết Quả Tìm Kiếm:</p>
    <div class="row searchProRow">
        <?php 
            if(!empty($data['products'])){
                foreach($data['products'] as $product) {
                    echo '
                        <div class="col-sm-3 pb-4">
                            <div class="card">
                                <a class="cardA" href="/nienluancoso/sanpham/describeProduct/'.$product['id_product'].'">
                                    <img class="card-img-top" src="/nienluancoso/'.$product['image'].'" alt="Card image cap" />
                                    <div class="card-body text-center">
                                        <p class="card-title">
                                        '.$product['product_name'].'
                                        </p>
                                        <p class="card-text">'.$product['price'].'₫</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    ';
                }
            } else {
                echo '<p>No products found.</p>';
            }
        ?>
    </div>
</div>