<?php 
    class Bill extends DB {

        //hien thi all bill
        public function getAllBills() : array {
            $sql = "SELECT * FROM `bill`";
            return $this->read($sql);
        }
        
        //tao bill
        public function addBill(string $id_user) : string {
            $data = [];
            $data["id_bill"] = substr(uniqid(), 0, 8);
            $data["statusBill"] = 0; //0 la chua xac nhan, 1 la da xac nhan
            $data["id_user"] = $id_user;
            $sql = "INSERT INTO `bill` (`id_bill`, `statusBill`, `id_user`) 
            VALUES (:id_bill, :statusBill, :id_user)";
            $hihi = $this->insert($sql, $data); 
            if ($hihi === false) {
                return '';
            }
            return $data["id_bill"];
        }

        //tao chi tiet bill
        public function addDetailBill(array $post) : bool {
            if(!empty($post)){
                $data = $post;
    
                $sql = "INSERT INTO `detailBill` (`id_bill`, `id_product`, `quantityPro`) 
                VALUES (:id_bill, :id_product, :quantityPro)";
                return $this->insert($sql, $data);
            } else{
                return false;
            }
        }

        //lay bill theo id
        public function getAllBillById(string $id) : array {
            $sql = "SELECT * FROM `bill` WHERE `id_bill` = ?";
            return $this->read($sql, [$id], "single");
        }

        //xac nhan bill

        public function updateBillById(string $id, array $data): int | false {
            $params = $data;
            $params["id_bill"] = $id;
            $sql = "UPDATE `bill` 
            SET `statusBill` = :statusBill WHERE `id_bill` = :id_bill";
            return $this->update($sql, $params);
        }

        //lay chi tiet bill
        public function getAllDetailBills() : array {
            $sql = "SELECT * FROM `detailBill`";
            return $this->read($sql);
        }

        //xem chi tiet bill
        public function getDetailBillById(string $id) : array {
            $sql = "SELECT * FROM `detailBill` WHERE `id_bill` = ?";
            return $this->read($sql, [$id], "single");
        }

        //huy bill
        public function deleteBillAndDetails(string $id_bill) : bool {
            $this->db->beginTransaction();
            try {
                $sql = "DELETE FROM `detailBill` WHERE id_bill = ?";
                $query = $this->db->prepare($sql);
                $query->execute([$id_bill]);
    
                $sql = "DELETE FROM `bill` WHERE id_bill = ?";
                $query = $this->db->prepare($sql);
                $query->execute([$id_bill]);
                
                $this->db->commit();
                return true;
            } catch (PDOException $e) {
                $this->db->rollBack();
                echo "Không thể xóa dữ liệu theo bookId: " . $e->getMessage();
                return false;
            } 
        }
    }
?>