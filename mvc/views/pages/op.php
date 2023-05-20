<div class="container">
    <div class="row">
        <div class="col-sm-12 d-flex justify-content-between align-items-center main-top">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="tranfchu">Trang Chủ</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="sanpham">Sản Phẩm</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Ốp Lưng
                    </li>
                </ol>
            </nav>
            <div class="main-filter">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle main-show" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Lọc Sản Phẩm Theo Giá
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Dưới 500k</a>
                        <a class="dropdown-item" href="#">Từ 500k đến dưới 1000k</a>
                        <a class="dropdown-item" href="#">Từ 1000k Trở Lên</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-12">
            <div class="list-group main-list">
                <h5>Danh Mục Sản Phẩm</h5>
                <a href="pin" class="list-group-item list-group-item-action">Pin Dự Phòng</a>
                <a href="sac" class="list-group-item list-group-item-action">Sạc</a>
                <a href="tainghe" class="list-group-item list-group-item-action">Tai nghe</a>
                <a href="op" class="list-group-item list-group-item-action">Ốp Lưng</a>
            </div>
            <div class="list-group main-list">
                <h5>Sản Phẩm</h5>
                <?php 
                    if(!empty($data['product'])){
                        foreach($data['product'] as $product1) {
                            echo '
                                <a href="/nienluancoso/sanpham/describeProduct/'.$product1['id_product'].'" class="list-group-item list-group-item-action">
                                    <div class="main-news d-flex align-items-center">
                                        <img src="/nienluancoso/'.$product1['image'].'" alt="Card image cap" />
                                        <div class="main-news__title d-flex flex-column">
                                            <p>'.$product1['product_name'].'</p>
                                            <p class="this-p">'.$product1['price'].' ₫</p>
                                        </div>
                                    </div>
                                </a>
                            ';
                        }
                    }
                ?>
            </div>
        </div>
        <div class="col-lg-9 col-md-12">
            <div class="row">
                <?php 
                    if(!empty($data['product'])){
                        foreach($data['product'] as $product1) {
                            echo '
                                <div class="col-sm-3 pb-4">
                                    <div class="card">
                                        <a class="cardA" href="/nienluancoso/sanpham/describeProduct/'.$product1['id_product'].'">
                                            <img class="card-img-top" src="/nienluancoso/'.$product1['image'].'" alt="Card image cap" />
                                            <div class="card-body text-center">
                                                <p class="card-title">
                                                '.$product1['product_name'].'
                                                </p>
                                                <p class="card-text">'.$product1['price'].' ₫</p>
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
    </div>
</div>