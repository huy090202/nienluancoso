<?php 
class typeOfProduct extends DB {
    
    //lay tat ca loai
    public function getAllType() : array {
        $sql = "SELECT * FROM `typeofproduct`";
        return $this->read($sql);
    }

    //lay loai theo id
    public function getAllTypeId(string $id) : array {
        $sql = "SELECT * FROM `typeofproduct` WHERE id_type = ?";
        return $this->read($sql, [$id], "single");
    }

    //them loai
    public function addType(array $post) : bool {
        if (isset($post)) {
            $data = $post;

            $data["id_type"] = substr(uniqid(), 0, 8);

            $sql = "INSERT INTO `typeofproduct` (`id_type`, `name_type`) VALUES (:id_type, :name_type)";
            return $this->insert($sql, $data);
        } else {
            return false;
        }
    } 

    //sua loai
    public function updateTypeById(string $id, array $data): int | false {
        $params = $data;
        $params["id_type"] = $id;
        $sql = "UPDATE `typeofproduct` 
        SET `name_type` = :name_type WHERE `id_type` = :id_type";
        return $this->update($sql, $params);
    }

    /**
    * xoa theo id
    *
    * @param string $id
    * @return boolean
    */
    public function deleteTypeById(string $id) : bool {
        $sql = "DELETE FROM `typeofproduct` WHERE `id_type` = ?";
        return $this->delete($sql, [$id]);
    }
}

?>