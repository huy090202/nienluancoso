<?php

define('DB_HOST', 'localhost');
define('DB_PORT', '3366');
define('DB_DATABASE', 'nienluancoso');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '090202');    

class DB{

    protected $db;

    function __construct(){
        try {
            $dsn = "mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_DATABASE;
            $this->db = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    
    /**
     * them du lieu
     *
     * @param string $sql
     * @param array $data mang khong tuan tu
     * @return boolean
     */
    public function insert(string $sql, array  $data) : bool {
        try{
            
            if(!empty($data)) {
                $query = $this->db->prepare($sql);
                return $query->execute($data);     //tuong ung value

            }
            return false;
        } catch(PDOException $e){
            echo "Lỗi Thêm: " . $e->getMessage();
            return false;
        }
    }

    /**
     * doc du lieu
     *
     * @param string $sql cau truy van
     * @param array $data lua chon khac
     * @param string $return_type kieu tra ve
     * @return array | int
     */
    public function read(string $sql, array $data = [], string $return_type = "all") : array | int {
        try{
            $query = $this->db->prepare($sql);
            if(!empty($data)) {
                $query->execute($data);     //tuong ung value
            } else {
                $query->execute(); 
                
            }

            if($return_type == "all"){
                return $query->fetchAll();
            } else if ($return_type=="count") {
                return $query->rowCount();
            }
            return $query->fetch();

        } catch(PDOException $e){
            echo "lỗi Đọc: " . $e->getMessage();
            return [];
        }
    }

     /**
     * cap nhat du lieu
     *
     * @param string $sql
     * @param array $data
     * @return integer|false
     */
    public function update(string $sql, array $data) : int|false{
        try{
            if(!empty($data)){
                $query = $this->db->prepare($sql);
                $update = $query->execute($data);
                return $update ? $query->rowCount() : false;
            }else return false;
        }catch (PDOException $e) {
            echo "lỗi Cập Nhật: " . $e->getMessage();
            return false;
        }
    }

    /**
     * xoa du lieu
     *
     * @param string $sql
     * @param array $data
     * @return boolean
     */
    public function delete(string $sql, array $data) : bool {
        try {
            if(!empty($data)){
                $query = $this->db->prepare($sql);
                return $query->execute($data);
            }
            return false;
        } catch (PDOException $e) {
            echo "Lỗi Xóa: " . $e->getMessage();
            return false;
        }
    }

}