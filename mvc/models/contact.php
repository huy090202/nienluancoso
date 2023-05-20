<?php 
    class contact extends DB {

        //them lien he
        public function addContact (array $post) : string{
            $data = $post;
            $data["id_contact"] = substr(uniqid(), 0, 8);
            $sql = "INSERT INTO `contact` (`id_contact`, `content`, `id_user`) 
            VALUES (:id_contact, :content, :id_user)";
            return $this->insert($sql, $data); 
            
        }

        //hien thi lien he
        public function getAllContacts() : array {
            $sql = "SELECT * FROM `contact`";
            return $this->read($sql);
        }

        //lay lien he theo id
        public function getContactById(string $id) : array {
            $sql = "SELECT * FROM `contact` WHERE `id_contact` = ?";
            return $this->read($sql, [$id], "single");
        }

        /**
        * xoa theo id
        *
        * @param string $id
        * @return boolean
        */
        public function deleteContactById(string $id) : bool {
            $sql = "DELETE FROM `contact` WHERE `id_contact` = ?";
            return $this->delete($sql, [$id]);
        }
    }
?>