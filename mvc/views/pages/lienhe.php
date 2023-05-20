<!-- <main id="main"> -->
<div class="main-background">
    <img src="public/images/lienhe/background.jpg" alt="" class="main-background__img" />
    <nav class="main-nav text-center">
        <span class="main-nav__span">Liên Hệ / Sửa Chữa</span>
        <ol class="d-flex justify-content-center">
            <li class="main-nav__item">
                <a href="trangchu">Trang Chủ</a>
            </li>
            <li class="main-nav__item upper">/ Liên Hệ</li>
        </ol>
    </nav>
</div>
<div class="container main-contact">
    <div class="row">
        <div class="col-6 main-contact__left">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56591.306797826066!2d105.6050805543846!3d9.760754071384262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0f1d1e88956ef%3A0xef7a6de6658fee0c!2zxJDhuqFpIEjhu41jIEPhuqduIFRoxqEgS2h1IEjDsmEgQW4!5e0!3m2!1svi!2s!4v1678755903220!5m2!1svi!2s"
                width="100%" height="580" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-6 main-contact__right">
            <div class="row">
                <div class="col-4">
                    <img src="public/images/logo.png" alt="" class="contact-right__img" />
                </div>
                <div class="col-8 d-inline">
                    <div class="contact-right__i">
                        <i class="fa-solid fa-location-dot"></i>Hòa Đức, Hòa An, Phụng
                        Hiệp, Hậu Giang
                    </div>
                    <div class="contact-right__i">
                        <i class="fa-solid fa-phone-volume"></i>0788793092
                    </div>
                    <div class="contact-right__i">
                        <i class="fa-solid fa-envelope"></i>huyb2014836@student.ctu.edu.vn
                    </div>
                </div>
            </div>
            <h3 class="contact-right__h3">Sản Phẩm Của Bạn Có Vấn Đề ?</h3>
            <div class="contact-right__form main-form">
                <div class="row form-group">
                    <div class="col-6">
                        <input type="text" class="form-control main-form__input" placeholder="Họ Và Tên"
                            title="Nhập vào họ và tên của bạn" name="user_name" value="<?php if (isset($data['getUserById']) && !empty($data['getUserById'])) {
                    echo $data['getUserById']['user_name'];} ?>" />
                    </div>
                    <div class="col-6">
                        <input type="email" class="form-control main-form__input" placeholder="Email"
                            title="Nhập vào email của bạn" name="email" value="<?php if (isset($data['getUserById']) && !empty($data['getUserById'])) {
                    echo $data['getUserById']['email'];} ?>" />
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-6">
                        <input type="text" class="form-control main-form__input" placeholder="Số Điện Thoại"
                            title="Nhập vào số điện thoại của bạn" name="phone_number" value="<?php if (isset($data['getUserById']) && !empty($data['getUserById'])) {
                    echo $data['getUserById']['phone_number'];} ?>" />
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control main-form__input" placeholder="Địa Chỉ"
                            title="Nhập vào địa chỉ của bạn" name="user_address" value="<?php if (isset($data['getUserById']) && !empty($data['getUserById'])) {
                    echo $data['getUserById']['user_address'];} ?>" />
                    </div>
                </div>
            </div>
            <form method="post" enctype="application/x-www-form-urlencoded">
                <div class="row form-group">
                    <div class="col">
                        <textarea type="textarea" class="form-control main-form__input" rows="5" placeholder="Lời Nhắn"
                            name="content"></textarea>
                    </div>
                </div>
                <button type="submit" class="contact-right__btn">Gửi</button>
            </form>
        </div>
    </div>
</div>
<!-- </main> -->