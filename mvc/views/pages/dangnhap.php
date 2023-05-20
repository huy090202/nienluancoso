<main id="main">
    <div class="container text-center">
        <form class="main-form" action="#" method="post" enctype="application/x-www-form-urlencoded">
            <h1 class="main-title text-center">Đăng Nhập</h1>
            <div class="row form-group d-flex align-items-center main-form__group">
                <label class="col-2 main-form__label">Tài khoản: </label>
                <input type="text" class="col-9 form-control main-form__input" name="user_name"
                    placeholder="Nhập tài khoản" title="Vui lòng nhập đúng tên tài khoảng" />
            </div>
            <div class="row form-group d-flex align-items-center main-form__group">
                <label class="col-2 main-form__label">Mật Khẩu: </label>
                <input type="password" class="col-9 form-control main-form__input inputActive" name="password"
                    placeholder="Nhập mật khẩu" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Vui lòng nhập vào mật khẩu ít nhất 8 ký tự có chữ hoa chữ thường" />
            </div>
            <div class="main-form__bottom">
                <b><input type="checkbox" name="remember" /> Ghi nhớ cho lần đăng
                    nhập sau</b>
                <div class="form-bottom__son">
                    <input type="submit" value="Đăng Nhập" class="login" />
                    <input type="reset" value="Hủy" class="exit" />
                </div>
                <b>Bạn chưa có tài khoản? Đăng ký ngay
                    <a href="dangky">Tại Đây.</a></b>
            </div>
        </form>
    </div>
</main>