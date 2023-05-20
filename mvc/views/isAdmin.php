<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phụ kiện Anker - Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="shortcut icon" href="/nienluancoso/public/images/logo.png">
    <link rel="stylesheet" href="/nienluancoso/public/css/isAdmin.css">
    <?php 
        if (isset($data["css"])) {
            echo "<link rel='stylesheet' href='/nienluancoso/public/css/". $data["css"] .".css' />";
        }    
    ?>
</head>

<body>
    <div class="row">
        <div class="col-2 adminPage">
            <div class="adminPageLeft text-center">
                <div class="adminAvatar">
                    <?php 
                        if (isset($_SESSION['user_name'])) {
                            echo '<span>' . $_SESSION['user_name'] . '</span>';
                        }
                    ?>
                </div>
                <ul class="nav d-block adminUl">
                    <a href="/nienluancoso/admin/typeShow" class="nav-link text-left a1">
                        Loại Đã Có
                    </a>
                    <a href="/nienluancoso/admin/addType" class="nav-link text-left a2">
                        Thêm Loại Mới
                    </a>
                    <a href="/nienluancoso/admin/productShow" class="nav-link text-left a3">
                        Sản Phẩm Đã Có
                    </a>
                    <a href="/nienluancoso/admin/addProduct" class="nav-link text-left a4">
                        Thêm Sản Phẩm Mới
                    </a>
                    <a href="/nienluancoso/admin/user" class="nav-link text-left a5">
                        Quản Lý Người Dùng
                    </a>
                    <a href="/nienluancoso/admin/showBill" class="nav-link text-left a6">
                        Quản Lý Hóa Đơn
                    </a>
                    <a href="/nienluancoso/admin/showContact" class="nav-link text-left a7">
                        Liên Hệ / Sửa Chửa
                    </a>
                    <a onclick="logout()" href="/nienluancoso/dangnhap" class="nav-link text-left a8">
                        <i class="fa-solid fa-right-from-bracket"></i> Đăng Xuất
                    </a>
                </ul>
            </div>
        </div>
        <div class="col-10 adminPage">
            <div class="adminPageRight">
                <header id="header" class="d-flex align-items-center justify-content-between">
                    <div class="goHome">
                        <a href="/nienluancoso/trangchu">
                            <i class="fa-sharp fa-solid fa-delete-left"></i>
                            Trang Chủ
                        </a>
                    </div>
                    <div class="adminHeaderRight">
                        <img src="/nienluancoso/public/images/logo.png" alt="admin logo">
                    </div>
                </header>
                <main id="main">
                    <?php require_once "./mvc/views/pages/".$data["page"].".php" ?>
                </main>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script>
    function logout() {
        // Xóa cookie
        document.cookie = "id_user=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        document.cookie = "user_name=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    }
    </script>
</body>

</html>