<?php



class giohang extends Controller{

    //xoa san pham khoi gio hang
    function deleteProCart (string $id) {
        if(strlen($id) == 0) {
            redirect('/nienluancoso/giohang');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $delete = ($this->model('product'))->deleteProCartById($id);
            if($delete) {
                redirect('/nienluancoso/giohang');
            } else{
                echo "<script>alert('Xóa sản phẩm thất bại, vui lòng thực hiện lại!');</script>";
            }
        }
        $this->view('index', [
            'page'=> 'deleteProCart',
            'title'=> 'Anker - Giỏ Hàng',
            'css' => 'giohang',
        ]);
    }

    function loading(){
        $bill = $this->model('bill');
        $product = [];
        if(isset($_SESSION['cart'])) {
            $product = $_SESSION['cart'];

        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $billId = $bill->addBill($_COOKIE['id_user']);
            if ($billId) {
                $checkBill = false;
                if (count($product) > 0) {
                    foreach ($product as $haha) {
                        $data =  [
                            'id_product' => $haha['id_product'],
                            'id_bill' => $billId,
                            'quantityPro' => +$haha['quantity']
                        ];
                        $checkBill=($this->model('bill'))->addDetailBill($data);
                    }
                }
                if (!$checkBill) {
                    echo "<script>alert('Tạo chi tiết bill Thất Bại, Vui Lòng Thực Hiện Lại!');</script>";
                } else {
                    $_SESSION['cart'] = [];
                    redirect('/nienluancoso/sanpham');
                }
            } else {
                echo "<script>alert('Tạo bill Thất Bại, Vui Lòng Thực Hiện Lại!');</script>";
            }
        }

        
        
       
        $numbers = [];
        $sumDola = 0;
       
        if(count($product)>0){
            foreach($product as $val){
                $one = ($this->model('product'))->getProductById($val['id_product']);
                $val['dola'] = +$val['price']*+$val['quantity'];
                $sumDola+=  $val['dola'];
                $numbers[] = [...$one, ...$val];
            }   
        }
        $this->view('index', [
            'page'=> 'giohang',
            'title'=> 'Anker - Giỏ Hàng',
            'css' => 'giohang',
            'js' => 'giohang',
            'product' => $numbers,
            'sumDola' => $sumDola
        ]);
    }
    
}
?>