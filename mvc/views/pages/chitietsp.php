<div class="container">
    <?php 
        if(!empty($data["product"])) {
            $product = $data["product"];
            echo '
                <div class="row main">
                    <div class="col-6">
                        <div class="main-slide">
                            <img src="/nienluancoso/'.$product['image'].'" alt="" class="main-slide__img" />
                            <div class="main-slide__control prev">
                                <i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="main-slide__control next">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="main-listImg d-flex">
                            <div>
                                <img src="/nienluancoso/'.$product['image'].'" alt="" />
                            </div>
                            <div>
                                <img src="/nienluancoso/public/images/sanpham/sp2.jpg" alt="" />
                            </div>
                            <div>
                                <img src="/nienluancoso/public/images/sanpham/sp3.jpg" alt="" />
                            </div>
                            <div>
                                <img src="/nienluancoso/public/images/sanpham/sp4.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <nav class="main-nav">
                            <ol class="d-flex">
                                <li class="main-nav__item">
                                    <a href="trangchu">Trang Chủ</a>
                                </li>
                                <li class="main-nav__item">/ Chi Tiết Sản Phẩm</li>
                            </ol>
                        </nav>
                        <p class="main-p1">'.$product['product_name'].'</p>
                        <span class="main-price">'.$product['price'].' ₫</span>
                        <p class="main-p2">
                            '.$product['describe_pro'].'
                        </p>
                        <form class="main-formPay" method="post">
                            <div class="main-addCart d-flex justify-content-start align-items-center">
                                <div class="main-btnAdded">
                                    <input type="hidden" name="id_product" value="'.$product['id_product'].'" />
                                    <input type="hidden" name="price" value="'.$product['price'].'" />
                                    <input class="minus main-btnAdded__control" type="button" value="-" />
                                    <input aria-label="quantity" class="main-btnAdded__input" max="9999" min="1" name="quantity"
                                        type="number" value="1" />
                                    <input class="plus main-btnAdded__control" type="button" value="+" />
                                </div>
                                <button type="submit" class="main-btn">Thêm Vào Giỏ</button>
                            </div>
                        </form>
                        <div class="row sonCol">
                            <div class="col-6 sonRow">
                                <p class="main-titlePay">Tính Phí Tự Động</p>
                                <div class="imgPay d-flex">
                                    <div>
                                        <img src="/nienluancoso/public/images/chitietsp/1.jpg" alt="" />
                                    </div>
                                    <div>
                                        <img src="/nienluancoso/public/images/chitietsp/2.jpg" alt="" />
                                    </div>
                                    <div>
                                        <img src="/nienluancoso/public/images/chitietsp/3.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="imgPay d-flex">
                                    <div>
                                        <img src="/nienluancoso/public/images/chitietsp/4.jpg" alt="" />
                                    </div>
                                    <div>
                                        <img src="/nienluancoso/public/images/chitietsp/5.jpg" alt="" />
                                    </div>
                                    <div>
                                        <img src="/nienluancoso/public/images/chitietsp/6.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 sonRow">
                                <p class="main-titlePay">Thanh Toán</p>
                                <div class="imgPay d-flex">
                                    <div>
                                        <img src="/nienluancoso/public/images/chitietsp/7.jpg" alt="" />
                                    </div>
                                    <div>
                                        <img src="/nienluancoso/public/images/chitietsp/8.jpg" alt="" />
                                    </div>
                                    <div>
                                        <img src="/nienluancoso/public/images/chitietsp/9.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="imgPay d-flex">
                                    <div>
                                        <img src="/nienluancoso/public/images/chitietsp/10.jpg" alt="" />
                                    </div>
                                    <div>
                                        <img src="/nienluancoso/public/images/chitietsp/11.jpg" alt="" />
                                    </div>
                                    <div>
                                        <img src="/nienluancoso/public/images/chitietsp/12.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mainBtn">
                            <button type="button" class="main-bottomBtn leftBtn">
                                Mô Tả
                            </button>
                            <button type="button" class="main-bottomBtn rightBtn">
                                Đánh Giá (0)
                            </button>
                        </div>
                        <div class="main-title">
                            <h4>Lorem...</h4>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero maxime at molestias labore reiciendis sequi fugiat
                                ducimus nulla autem voluptates asperiores expedita quo, dolores mollitia. Non dolorum voluptas ut fugit.
                            </p>
                            <h4>Lorem...</h4>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero maxime at molestias labore reiciendis sequi fugiat
                                ducimus nulla autem voluptates asperiores expedita quo, dolores mollitia. Non dolorum voluptas ut fugit.
                            </p>
                        </div>
                        <div class="main-hide">
                            <p class="main-hide__p">Đánh Giá</p>
                            <p>Chưa có đánh giá nào.</p>
                            <div class="main-evaluate">
                                <p class="main-hide__p">
                                    Hãy là người đầu tiên nhận xét “Bao Da Pin Dự Phòng Anker
                                    10050 - A7096081”
                                </p>
                                <p style="font-weight: bold">Đánh giá của bạn</p>
                                <div class="main-evaluate__star d-flex">
                                    <div class="star1">
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <span>|</span>
                                    <div class="star2">
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <span>|</span>
                                    <div class="star3">
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <span>|</span>
                                    <div class="star4">
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <span>|</span>
                                    <div class="star5">
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <form class="main-form" action="#" method="post" enctype="application/x-www-form-urlencoded">
                                    <div class="form-group ">
                                        <label class="main-label" for="exampleFormControlTextarea1">Nhận xét của bạn *</label>
                                        <textarea type="textarea" class="form-control borderInput main-form__input"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="main-label" for="exampleFormControlInput1">Tên *</label>
                                                <input type="text" class="form-control borderInput main-form__input" />
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="main-label" for="exampleFormControlInput1">Email *</label>
                                                <input type="email" class="form-control borderInput main-form__input" />
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="main-evaluateBtn">Gửi Đi</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-12">
                        <h4 style="text-transform: uppercase; font-weight: bold" class="text-center">
                            Sản Phẩm Tương Tự
                        </h4>
                    </div>
                </div>
                <div class="row position-relative main-btn__show2">
                    <div class="my-5 main-btn__prev2 position-absolute">
                        <i class="fa-solid fa-angle-left"></i>
                    </div>
                    <div class="my-5 main-btn__next2 position-absolute">
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
            ';
        }
    ?>
    <div class="w-100 carousel main-slideshow2">
        <?php 
            if(!empty($data['allProducts'])){
                foreach($data['allProducts'] as $allProducts) {
                    echo '
                    <div class="carousel-cell">
                    <div class="card" style="width: 100%; border: none">
                        <a class="cardA" href="/nienluancoso/sanpham/describeProduct/'.$allProducts['id_product'].'">
                            <img class="card-img-top" src="/nienluancoso/'.$allProducts['image'].'" alt="Card image cap" />
                            <div class="card-body text-center">
                                <p class="card-title">
                                '.$allProducts['product_name'].'
                                </p>
                                <p class="card-text">'.$allProducts['price'].' ₫</p>
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