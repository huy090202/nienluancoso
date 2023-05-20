<?php
class product extends DB {

    //them san pham 
    public function addProduct(array $post) : bool {
        if (isset($post)) {
            $data = $post;

            $data["id_product"] = substr(uniqid(), 0, 8);
            $data["price"] = +$data["price"];
            $data["allQuantityPro"] = +$data["allQuantityPro"];

            $sql = "INSERT INTO `product` (`id_product`, `product_name`, `price`, `image`,`allQuantityPro`, `describe_pro`, `id_type` ) 
            VALUES (:id_product, :product_name, :price, :image, :allQuantityPro, :describe_pro, :id_type)";
            return $this->insert($sql, $data);
        } else {
            return false;
        }
    } 

    //hien thi tat ca san pham
    public function getAllProducts() : array {
        $sql = "SELECT * FROM `product`";
        return $this->read($sql);
    }

    //lay san pham theo id
    public function getProductById(string $id) : array {
        $sql = "SELECT * FROM `product` WHERE `id_product` = ?";
        return $this->read($sql, [$id], "single");
    }

    /**
     * lay san pham gioi han
     * 
     * @param int $lenght so san pham can lay
     * @param int $start vi tri bat dau lay
     * @return array
     */

    public function getProductAllLimit(int $length, int $start = 6) : array {
        $sql = "SELECT * FROM `product` LIMIT :length OFFSET :start ";
        $query = $this->db->prepare($sql);
        $query->bindParam(':length', $length, \PDO::PARAM_INT);
        $query->bindParam(':start', $start, \PDO::PARAM_INT);
        $query->execute();
       
        return $query->fetchAll();
    }

    //lay san pham gio hang theo loai
    public function getProductPin() : array {
        $sql = "SELECT *  FROM `product` WHERE `id_type` = '642c49cf' ORDER BY `id_product` DESC LIMIT 9";
        return $this->read($sql);
    }
    public function getProductSac() : array {
        $sql = "SELECT *  FROM `product` WHERE `id_type` = '642c47ca' ORDER BY `id_product` DESC LIMIT 9";
        return $this->read($sql);
    }
    public function getProductOp() : array {
        $sql = "SELECT *  FROM `product` WHERE `id_type` = '642c47e2' ORDER BY `id_product` DESC LIMIT 9";
        return $this->read($sql);
    }
    public function getProductTai() : array {
        $sql = "SELECT *  FROM `product` WHERE `id_type` = '642c47d6' ORDER BY `id_product` DESC LIMIT 9";
        return $this->read($sql);
    }

    /**
    * xoa theo id
    *
    * @param string $id
    * @return boolean
    */
    public function deleteProductById(string $id) : bool {
        $sql = "DELETE FROM `product` WHERE `id_product` = ?";
        return $this->delete($sql, [$id]);
    }

    //sua san pham
    public function updateProductById(string $id, array $data): int | false {
        $params = $data;
        $params["price"] = +$params["price"];
        $params["allQuantityPro"] = +$params["allQuantityPro"];
        $params["id_product"] = $id;
        $sql = "UPDATE `product` 
        SET `product_name` = :product_name, `price` = :price, `image` = :image,`allQuantityPro` = :allQuantityPro, `describe_pro` = :describe_pro, `id_type` = :id_type
        WHERE `id_product` = :id_product";
        return $this->update($sql, $params);
    }

    //tim kiem san pham
    public function searchPro($search) :array {
        $sql = "SELECT * FROM `product` WHERE `product_name` LIKE :search";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //xoa san pham da duoc them vao gio hang
    public function deleteProCartById(string $id) : bool {
        if(isset($_SESSION['cart'])) {
            foreach($_SESSION['cart'] as $key => $val) {
                if($val['id_product'] === $id) {
                    unset($_SESSION['cart'][$key]);
                    return true;
                }
            }
        }
        return false;
    }
    
}
?>