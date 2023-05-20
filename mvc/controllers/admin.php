<?php



class admin extends Controller{

    //neu la admin thi co the vao trang admin
    public function __construct() {
        if(isset($_COOKIE['id_user'])){
            $user = ($this->model('user'))->getUserById($_COOKIE['id_user']);
            if(!empty($user) ){
                if($user['isAdmin'] != 1){
                    redirect('/nienluancoso/trangchu');
                }
            }
        } else {
            redirect('/nienluancoso/dangnhap');
        }
    }

    //cap nhat quyen admin
    function updateAdmin(string $id) {
        $getAdminById = ($this->model('user'))->getUserById($id);

        if (!$getAdminById) {
            die('User không tồn tại');
        }
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = array(
                'isAdmin' => $_POST['isAdmin'],
            );
            $updateAdminById = ($this->model('user'))->updateAdmin($id, $data);

            if($updateAdminById) {
                redirect('/nienluancoso/admin/user');
            } else {
                echo "<script>alert('Sửa quyền thất bại, vui lòng thực hiện lại!');</script>";
            }
        }
        

        $this->view('isAdmin', [
            'page'=> 'admin',
            'css' => 'admin',
            'adminChild' => 'updateAdmin',
            'getAdminById' => $getAdminById
        ]);

    }

    //hien thi tat ca loai
    function typeShow() {
        $type = ($this->model('typeOfProduct'))->getAllType();

        $this->view('isAdmin', [
            'page'=> 'admin',
            'css' => 'admin',
            "type" => $type,
            "adminChild" => "adminType",
        ]);

    }

    //them mot loai moi
    function addType(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST)) {
                $callAddType = ($this->model('typeOfProduct'))->addType($_POST);
                $_POST = [];

                if ($callAddType) {
                    redirect('/nienluancoso/admin/typeShow');
                } else {
                    echo "<script>alert('Thêm Loại Thất Bại, Vui Lòng Thực Hiện Lại!');</script>";
                }
            }
        }

        $this->view('isAdmin', [
            'page'=> 'admin',
            'css' => 'admin',
            'adminChild' => 'addType'
        ]);
    }

    //sua loai
    function updateTypeById(string $id) {
        $getTypeById = ($this->model('typeOfProduct'))->getAllTypeId($id);

        if (!$getTypeById) {
            die('Loại không tồn tại');
        }
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = array(
                'name_type' => $_POST['name_type'],
            );
            $updateTypeById = ($this->model('typeOfProduct'))->updateTypeById($id, $data);

            if($updateTypeById) {
                redirect('/nienluancoso/admin/typeShow');
            } else {
                echo "<script>alert('Sửa loại thất bại, vui lòng thực hiện lại!');</script>";
            }
        }
        

        $this->view('isAdmin', [
            'page'=> 'admin',
            'css' => 'admin',
            'adminChild' => 'updateType',
            'getTypeById' => $getTypeById
        ]);

    }

    //xoa loai
    function deleteType(string $id) {
        if(strlen($id) == 0) {
            redirect('/nienluancoso/admin/typeShow');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $delete = ($this->model('typeOfProduct'))->deleteTypeById($id);
            if($delete) {
                redirect('/nienluancoso/admin/typeShow');
            } else{
    
                echo "<script>alert('Xóa Loại thất bại, vui lòng thực hiện lại!');</script>";
            }
        }

        $this->view('isAdmin', [
            'page'=> 'admin',
            'css' => 'admin',
            'adminChild' => 'confirmDelete'
        ]);

    }

    //hien thi tat ca san pham
    function productShow() {
        $product = ($this->model('product'))->getAllProducts();
        $productArr = [];
        if(!empty($product)){
            foreach($product as $pro) {
                $type = ($this->model('typeOfProduct'))->getAllTypeId($pro['id_type']);
                $pro['name_type'] = $type['name_type'];
                $productArr[] = $pro;
            }
        }

        $this->view('isAdmin', [
            'page'=> 'admin',
            'css' => 'admin',
            "product" => $productArr,
            "adminChild" => "adminProduct",
        ]);
    }

    //them mot san pham moi
    function addProduct() {
        $type = ($this->model('typeOfProduct'))->getAllType();
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST)) {
                if (isset($_FILES['image'])) {
                    // Upload file to server
                    move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $_FILES['image']['name']);
                    // Set image path
                    $_POST['image'] = 'uploads/' . $_FILES['image']['name'];
                }
                $callProduct = ($this->model('product'))->addProduct($_POST);
                $_POST = [];

                if ($callProduct) {
                    redirect('/nienluancoso/admin/productShow');
                } else {
                    echo "<script>alert('Thêm Sản Phẩm Thất Bại, Vui Lòng Thực Hiện Lại!');</script>";
                }
            }
        }

        $this->view('isAdmin', [
            'page'=> 'admin',
            'css' => 'admin',
            'type' => $type,
            'adminChild' => 'addProduct'
        ]);

    }

    //sua san pham
    function updateProduct(string $id) {
        $showType = ($this->model('typeOfProduct'))->getAllType();
        $product = ($this->model('product'))->getAllProducts();
        $productArr = array();
        if(!empty($product)){
            foreach($product as $pro) {
                $type = ($this->model('typeOfProduct'))->getAllTypeId($pro['id_type']);
                $pro['name_type'] = $type['name_type'];
                $productArr[] = $pro;
            }
        }
        
        $getProById = ($this->model('product'))->getProductById($id);

        if (!$getProById) {
            die('Sản phẩm không tồn tại');
        }
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = array(
                'product_name' => $_POST['product_name'],
                'price' => $_POST['price'],
                'image' => $_POST['image'],
                'allQuantityPro' => $_POST['allQuantityPro'],
                'describe_pro' => $_POST['describe_pro'],
                'id_type' => $_POST['id_type']
            );
            $updateProductById = ($this->model('product'))->updateProductById($id, $data);

            if($updateProductById) {
                redirect('/nienluancoso/admin/productShow');
            } else {
                echo "<script>alert('Sửa sản phẩm thất bại, vui lòng thực hiện lại!');</script>";
            }
        }
        

        $this->view('isAdmin', [
            'page'=> 'admin',
            'css' => 'admin',
            'showType' => $showType,
            'adminChild' => 'updateProduct',
            'getProById' => $getProById
        ]);

    }

    //xoa san pham
    function deleteProduct(string $id) {
        if(strlen($id) == 0) {
            redirect('/nienluancoso/admin/productShow');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $delete = ($this->model('product'))->deleteProductById($id);
            if($delete) {
                redirect('/nienluancoso/admin/productShow');
            } else{
    
                echo "<script>alert('Xóa sản phẩm thất bại, vui lòng thực hiện lại!');</script>";
            }
        }

        $this->view('isAdmin', [
            'page'=> 'admin',
            'css' => 'admin',
            'adminChild' => 'confirmDelete'
        ]);

    }

    //hien thi tat ca user
    function user() {
        $user = ($this->model('user'))->getAllUsers();

        $this->view('isAdmin', [
            'page'=> 'admin',
            'css' => 'admin',
            "user" => $user,
            "adminChild" => "adminUser",
        ]);

    }

    //hien thi tat ca bill
    function showBill() {
        
        $bill = ($this->model('bill'))->getAllBills();
        $billArr = [];
        if(!empty($bill)){
            foreach($bill as $bi) {
                $user = ($this->model('user'))->getUserById($bi['id_user']);
                $bi['user_name'] = $user['user_name'];
                $billArr[] = $bi;
            }
        }

        $this->view('isAdmin', [
            'page'=> 'admin',
            'css' => 'admin',
            "bill" => $billArr,
            "adminChild" => "adminBill",
        ]);

    }

    //xac nhan bill
    function confirmBill (string $id) {
        $getBillById = ($this->model('bill'))->getAllBillById($id);

        if (!$getBillById) {
            die('Loại không tồn tại');
        }
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = array(
                'statusBill' => $_POST['statusBill'],
            );
            $updateBillById = ($this->model('bill'))->updateBillById($id, $data);

            if($updateBillById) {
                redirect('/nienluancoso/admin/showBill');
            } else {
                echo "<script>alert('Sửa trạng thái bill thất bại, vui lòng thực hiện lại!');</script>";
            }
        }
        

        $this->view('isAdmin', [
            'page'=> 'admin',
            'css' => 'admin',
            'adminChild' => 'updateBill',
            'getBillById' => $getBillById
        ]);
    }

    //xem chi tiet bill
    function showDetailBill (string $id) {
        $showUser = ($this->model('user'))->getAllUsers();
        $showPro = ($this->model('product'))->getAllProducts();
        $showBill = ($this->model('bill'))->getAllBills();
        $showBillArr = [];
        $showDetailBill = ($this->model('bill'))->getAllDetailBills();
        $showDetailBillArr = [];
        if(!empty($showDetailBill)){
            foreach($showDetailBill as $show) {
                $product = ($this->model('product'))->getProductById($show['id_product']);
                $data1 = [
                    $show['product_name'] = $product['product_name'],
                    $show['price'] = $product['price'],
                ];
                $showDetailBillArr[] = $data1;
            }
            if(!empty($showBill)) {
                foreach($showBill as $bi) {
                    $user = ($this->model('user'))->getUserById($bi['id_user']);
                    $data2 = [
                        $bi['user_name'] = $user['user_name'],
                        $bi['email'] = $user['email'],
                        $bi['phone_number'] = $user['phone_number'],
                        $bi['user_address'] = $user['user_address'],
                    ];
                    $showBillArr[] = $data2;
                }
            }
            $getBillById = ($this->model('bill'))->getAllBillById($id);

            if (!$getBillById) {
                die('Hóa đơn không tồn tại');
            }
        }
        $getDetailBillById = ($this->model('bill'))->getDetailBillById($id);
        
        if (!$getDetailBillById) {
            die('Chi tiết hóa đơn không tồn tại');
        }
        $this->view('isAdmin', [
            'page'=> 'admin',
            'css' => 'admin',
            "showPro" => $showPro,
            "showUser" => $showUser,
            "getDetailBillById" => $getDetailBillById,
            "getBillById" => $getBillById,
            'adminChild' => 'showDetailBill',
        ]);
    }

    //huy bill
    public function deleteBill($billId) {
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $delete = ($this->model('bill'))->deleteBillAndDetails($billId);
            if($delete) {
                redirect('/nienluancoso/admin/showBill');
            } else{
    
                echo "<script>alert('Hủy hóa đơn thất bại, vui lòng thực hiện lại!');</script>";
            }
        }
        $this->view('isAdmin', [
            'page'=> 'admin',
            'css' => 'admin',
            'adminChild' => 'confirmDeleteBill'
        ]);
    }

    //hien thi tat ca lien he
    function showContact() {
        $contact = ($this->model('contact'))->getAllContacts();
        $contactArr = [];
        if(!empty($contact)){
            foreach($contact as $con) {
                $user = ($this->model('user'))->getUserById($con['id_user']);
                $con['user_name'] = $user['user_name'];
                $contactArr[] = $con;
            }
        }

        $this->view('isAdmin', [
            'page'=> 'admin',
            'css' => 'admin',
            "contact" => $contactArr,
            "adminChild" => "adminContact",
        ]);

    }

    //xem lien he
    function seeContact(string $id) {
        $showUser = ($this->model('user'))->getAllUsers();
        $showContact = ($this->model('contact'))->getAllContacts();
        $showContactArr = [];
        if(!empty($showContact)){
            foreach($showContact as $show) {
                $user = ($this->model('user'))->getUserById($show['id_user']);
                $data = [
                    $show['user_name'] = $user['user_name'],
                    $show['email'] = $user['email'],
                    $show['user_address'] = $user['user_address'],
                    $show['phone_number'] = $user['phone_number'],
                ];
                $showContactArr[] = $data;
            }
        }

        $contact = ($this->model('contact'))->getContactById($id);
        

        $this->view('isAdmin', [
            'page'=> 'admin',
            'css' => 'admin',
            "showUser" => $showUser,
            "contact" => $contact,
            "adminChild" => "seeContact",
        ]);

    }

    //xoa lien he 
    function deletecontact(string $id) {
        if(strlen($id) == 0) {
            redirect('/nienluancoso/admin/showContact');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $delete = ($this->model('contact'))->deleteContactById($id);
            if($delete) {
                redirect('/nienluancoso/admin/showContact');
            } else{
    
                echo "<script>alert('Xóa liên hệ thất bại, vui lòng thực hiện lại!');</script>";
            }
        }

        $this->view('isAdmin', [
            'page'=> 'admin',
            'css' => 'admin',
            'adminChild' => 'confirmDeleteContact'
        ]);

    }

    function loading(){
        $user = ($this->model('user'))->getAllUsers();
        
        $this->view('isAdmin', [
            'page'=> 'admin',
            'title'=> 'Anker - My Admin',
            'css' => 'admin',
            "getAllUsers" => $user,
        ]);
    }
    
}
?>