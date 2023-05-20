<main id="main">
    <div class="container text-center">
        <form class="main-form" action="#" method="post" enctype="application/x-www-form-urlencoded">
            <h1 class="main-title text-center">Đăng Ký</h1>
            <div class="row form-group d-flex align-items-center main-form__group">
                <label class="col-2 main-form__label">Tài khoản: </label>
                <input type="text" class="col-9 form-control main-form__input" name="user_name"
                    placeholder="Nhập vào tên tài khoản" required title="Vui lòng nhập vào tên tài khoản" />
            </div>

            <div class="row form-group d-flex align-items-center main-form__group">
                <label class="col-2 main-form__label">Email: </label>
                <input type="email" class="col-9 form-control main-form__input" name="email" placeholder="Nhập email"
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required title="Vui lòng nhập vào email có @" />
            </div>

            <div class="row form-group d-flex align-items-center main-form__group">
                <label class="col-2 main-form__label">Số Điện Thoại: </label>
                <input type="text" class="col-9 form-control main-form__input" name="phone_number"
                    placeholder="Nhập số điện thoại" pattern="[0-9]{10}" required
                    title="Vui lòng nhập vào số điện thoại có 10 số" />
            </div>

            <div class="row form-group d-flex align-items-center main-form__group">
                <label class="col-2 main-form__label">Mật Khẩu: </label>
                <input type="password" class="col-9 form-control main-form__input inputActive" name="user_password"
                    placeholder="Nhập mật khẩu" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Vui lòng nhập vào mật khẩu ít nhất 8 ký tự có chữ hoa chữ thường" />
            </div>

            <div class="row form-group d-flex align-items-center main-form__group">
                <label class="col-2 main-form__label1">Nhập Lại Mật Khẩu: </label>
                <input type="password" class="col-9 form-control main-form__input inputActive" name="psw2"
                    placeholder="Nhập lại mật khẩu" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required
                    title="Vui lòng nhập vào đúng mật khẩu vừa tạo" />
            </div>

            <div class="row form-group d-flex align-items-center main-form__group">
                <label class="col-2 main-form__label">Địa Chỉ: </label>
                <input type="text" class="col-9 form-control main-form__input inputActive" name="user_address"
                    placeholder="Nhập vào địa chỉ" />
            </div>
            <div class="main-form__bottom">
                <b><input type="checkbox" name="remember" /> Chấp nhận những điều
                    khoản của chúng tôi</b>
                <div class="form-bottom__son">
                    <input type="submit" value="Đăng Ký" class="login" />
                    <input type="reset" value="Hủy" class="exit" />
                </div>
                <b>Đăng nhập ngay
                    <a href="dangnhap">Tại Đây.</a></b>
            </div>
        </form>
    </div>
</main>