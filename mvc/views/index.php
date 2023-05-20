<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="shortcut icon" href="/nienluancoso/public/images/logo.png">
    <link rel="stylesheet" href="/nienluancoso/public/css/hf.css">
    <?php 
        if (isset($data["css"])) {
            echo "<link rel='stylesheet' href='/nienluancoso/public/css/". $data["css"] .".css' />";
        }        
    ?>
</head>

<body>
    <header id="header">
        <div class="row">
            <div class="d-flex align-items-center header">
                <div class="col-md-2">
                    <img src="/nienluancoso/public/images/logo.png" alt="" class="head-logo" />
                </div>
                <div class="col-md-8">
                    <form class="head-form d-flex" method="post" action="/nienluancoso/trangchu/searchProduct">
                        <input type="text" list="topics" class="head-input form-control" placeholder="Search..."
                            title="Enter your search" name="search"
                            value="<?= isset($data['search']) ? htmlspecialchars($data['search']) : '' ?>" />
                        <datalist id=topics>
                            <?php 
                                if(!empty($data['product'])) {
                                    $product = $data['product'];
                                    echo '
                                    <option value="'.$product['product_name'].'"></option>
                                    ';
                                }
                            ?>
                        </datalist>
                        <button type="submit" class="head-search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
                <div class="col-md-2 d-flex justify-content-end">
                    <div class="dropdown">
                        <button class="btn btn-secondary head-user head-user__show" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa-solid fa-user"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php 
                                if(isset($_COOKIE['id_user'])) {
                                    echo '<a onclick="logout()" class="dropdown-item" href="/nienluancoso/dangnhap">Đăng Xuất</a>
                                    <a class="dropdown-item" href="/nienluancoso/nguoidung">Thông Tin Cá Nhân</a>';
                                } else {
                                    echo '<a class="dropdown-item" href="/nienluancoso/dangnhap">Đăng Nhập</a>';

                                }
                            ?>
                        </div>
                    </div>
                    <div class=" head-cart d-flex justify-content-center align-items-center" title="Giỏ hàng">
                        <a href="/nienluancoso/giohang" class="head-cart__a">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <?php
                                if (isset($_SESSION['cart'])) {
                                    echo '<span>'.(count($_SESSION['cart'])).'</span>';
                                } else {
                                    echo '<span>0</span>';
                                }
                            ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="head-nav">
                <ul class="head-nav__ul d-flex justify-content-center">
                    <li class="head-nav__item">
                        <a href="/nienluancoso/trangchu">Trang Chủ</a>
                    </li>
                    <li class="haed-nav__item1">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle head-nav__show" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Sản Phẩm
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/nienluancoso/pin">Pin Dự Phòng</a>
                                <a class="dropdown-item" href="/nienluancoso/sac">Sạc</a>
                                <a class="dropdown-item" href="/nienluancoso/tainghe">Tai Nghe</a>
                                <a class="dropdown-item" href="/nienluancoso/op">Ốp Lưng</a>
                            </div>
                        </div>
                    </li>
                    <li class="head-nav__item">
                        <a href="/nienluancoso/tintuc">Tin Tức</a>
                    </li>
                    <li class="head-nav__item">
                        <a href="/nienluancoso/lienhe">Liên Hệ / Sửa Chữa</a>
                    </li>
                    <li class="head-nav__item">
                        <a href="/nienluancoso/hethong">Hệ Thống Cửa Hàng</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <main id="content">
        <?php require_once "./mvc/views/pages/".$data["page"].".php" ?>
    </main>
    <footer id="footer">
        <div class="footer">
            <div class="row">
                <div class="col-sm-4">
                    <div class="footer-logo">
                        <img src="/nienluancoso/public/images/logo.png" alt="" />
                    </div>
                    <div class="footer-address">
                        <p>Số Điện Thoại: 0788793092</p>
                        <p>
                            Zalo:
                            <a
                                href="https://id.zalo.me/account?continue=https%3A%2F%2Fchat.zalo.me%2F%3Fnull">0788793092</a>
                        </p>
                        <p>
                            Địa Chỉ:
                            <a
                                href="https://www.google.com/search?rlz=1C1UEAD_viVN992VN992&tbs=lf:1,lf_ui:1&tbm=lcl&sxsrf=ALiCzsZqpLUiP4d_s1z8kN_v6RcML5vlWw:1672409620254&q=%E1%BA%A4p+Th%E1%BB%A7+%C4%90%E1%BB%A9c,+X%C3%A3+H%C3%B2a+An,+Huy%E1%BB%87n+Ph%E1%BB%A5ng+Hi%E1%BB%87p,+T%E1%BB%89nh+H%E1%BA%ADu+Giang&rflfq=1&num=10&ved=2ahUKEwir6dWqw6H8AhUFT3wKHc-vBogQtgN6BAgeEAY#rlfi=hd:;si:,9.848044052864049,105.63629444573951;mv:[[9.876456990694022,105.84228809808326],[9.725569920694824,105.54703052972388],null,[9.801022036050336,105.69465931390357],12]">Hòa
                                Đức, Hòa An, Phụng Hiệp, Hậu Giang</a>
                        </p>
                        <p>
                            Email:
                            <a
                                href="https://accounts.google.com/v3/signin/identifier?dsh=S-66243553%3A1672409788869720&authuser=0&continue=https%3A%2F%2Fmail.google.com&ec=GAlAFw&hl=vi&service=mail&flowName=GlifWebSignIn&flowEntry=AddSession">huyb2014836@student.ctu.edu.vn</a>
                        </p>
                        <p>Giờ mở cửa: 8:00 - 20:00 (làm việc cả thứ 7, chủ nhật)</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="footer-content text-center">
                        <h3>NỘI DUNG</h3>
                        <p>
                            <a href="/nienluancoso/trangchu">Trang Chủ</a>
                        </p>
                        <p>
                            <a href="/nienluancoso/sanpham">Sản Phẩm</a>
                        </p>
                        <p>
                            <a href="/nienluancoso/tintuc">Tin Tức</a>
                        </p>
                        <p>
                            <a href="/nienluancoso/lienhe">Bảo Hành</a>
                        </p>
                        <p>
                            <a href="/nienluancoso/hethong">Hệ Thống Cửa Hàng</a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h3 class="footer-title">FACEBOOK</h3>
                    <div class="footer-fb">
                        <img src="/nienluancoso/public/images/fb.jpg" alt="" class="footer-img" />
                        <div class="fb-share">
                            <a href="https://www.facebook.com/">
                                <i class="fa-brands fa-facebook-f"></i> Theo dõi trang
                            </a>
                            <a href="https://www.facebook.com/">
                                <i class="fa-solid fa-share"></i> Chia sẽ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
    function logout() {
        // Xóa cookie
        document.cookie = "id_user=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        document.cookie = "user_name=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    }
    </script>
    <?php
    if (isset($data["js"])) {
        echo "<script src='/nienluancoso/public/js/". $data["js"] .".js'></script>";
    }
    ?>
</body>

</html>