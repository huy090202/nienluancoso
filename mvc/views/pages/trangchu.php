<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="public/images/slide/slide1.jpg" alt="First slide" />
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="public/images/slide/slide2.jpg" alt="Second slide" />
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="public/images/slide/slide3.jpg" alt="Third slide" />
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container">
    <h3 class="text-center" style="margin: 20px 0">Sản Phẩm Bán Chạy</h3>
    <div class="row py-10 position-relative main-btn__show1">
        <div class="my-5 main-btn__prev1 position-absolute">
            <i class="fa-solid fa-angle-left"></i>
        </div>
        <div class="my-5 main-btn__next1 position-absolute">
            <i class="fa-solid fa-angle-right"></i>
        </div>
        <div class="w-100 carousel main-slideshow1">
            <?php 
                if(!empty($data['product'])){
                    foreach($data['product'] as $product1) {
                        echo '
                            <div class="carousel-cell">
                                <div class="card" style="width: 100%; border: none">
                                    <a class="cardA" href="/nienluancoso/sanpham/describeProduct/'.$product1['id_product'].'">
                                        <img class="card-img-top" src="/nienluancoso/'.$product1['image'].'" alt="Card image cap" />
                                        <div class="card-body text-center">
                                            <p class="card-title">
                                            '.$product1['product_name'].'
                                            </p>
                                            <p class="card-text">'.$product1['price'].'₫</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        ';
                    }
                }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <a href="sanpham">
                <div class="main-banner">
                    <img src="public/images/trangchu/banner3.jpg" alt="" />
                    <button class="main-banner__btn main-active">Mua Ngay</button>
                </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a href="sanpham">
                <div class="main-banner">
                    <img src="public/images/trangchu/banner2.jpg" alt="" />
                    <button class="main-banner__btn1 main-active">Mua Ngay</button>
                </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a href="sanpham">
                <div class="main-banner">
                    <img src="public/images/trangchu/banner1.jpg" alt="" />
                    <button class="main-banner__btn1 main-active">Mua Ngay</button>
                </div>
            </a>
        </div>
    </div>
    <h3 class="text-center" style="margin: 20px 0">Sản Phẩm Mới</h3>
    <div class="row py-10 position-relative main-btn__show2">
        <div class="my-5 main-btn__prev2 position-absolute">
            <i class="fa-solid fa-angle-left"></i>
        </div>
        <div class="my-5 main-btn__next2 position-absolute">
            <i class="fa-solid fa-angle-right"></i>
        </div>
        <div class="w-100 carousel main-slideshow2">
            <?php 
                if(!empty($data['product'])){
                    foreach($data['product'] as $product1) {
                        echo '
                        <div class="carousel-cell">
                        <div class="card" style="width: 100%; border: none">
                            <a class="cardA" href="/nienluancoso/sanpham/describeProduct/'.$product1['id_product'].'">
                                <img class="card-img-top" src="/nienluancoso/'.$product1['image'].'" alt="Card image cap" />
                                <div class="card-body text-center">
                                    <p class="card-title">
                                    '.$product1['product_name'].'
                                    </p>
                                    <p class="card-text">'.$product1['price'].'₫</p>
                                </div>
                            </a>
                        </div>
                    </div>
                        ';
                    }
                }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <a href="sanpham">
                <div class="main-banner">
                    <img src="public/images/trangchu/banner4.jpg" alt="" />
                    <button class="main-banner__btn2 main-active">Mua Ngay</button>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="sanpham">
                <div class="main-banner">
                    <img src="public/images/trangchu/banner5.jpg" alt="" />
                    <button class="main-banner__btn2 main-active">Mua Ngay</button>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="sanpham">
                <div class="main-banner">
                    <img src="public/images/trangchu/banner6.jpg" alt="" />
                    <button class="main-banner__btn2 main-active">Mua Ngay</button>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="main-pay d-flex justify-content-center align-items-center">
            <div class="main-pay__son">
                <img src="public/images/trangchu/lazada.jpg" alt="" />
            </div>
            <div class="main-pay__son">
                <img src="public/images/trangchu/tiki.jpg" alt="" />
            </div>
            <div class="main-pay__son">
                <img src="public/images/trangchu/shopee.jpg" alt="" />
            </div>
            <div class="main-pay__son">
                <img src="public/images/trangchu/sendo.jpg" alt="" />
            </div>
            <div class="main-pay__son">
                <img src="public/images/trangchu/adayroi.jpg" alt="" />
            </div>
        </div>
    </div>
</div>