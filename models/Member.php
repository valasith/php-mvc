<?php 
require_once("config/DatabaseController.php");
class Member
{
    private $db_handle;
    
    function __construct() {
        $this->db_handle = new DatabaseController();
    }
    
    function addMember($firstname, $lastname) {
        $query = "INSERT INTO member (firstname, lastname) VALUES (?, ?)";
        $paramType = "ss";
        $paramValue = array(
            $firstname,
            $lastname
        );
        
        $insertId = $this->db_handle->insert($query, $paramType, $paramValue);
        return $insertId;
    }
    
    function editMember($firstname, $lastname, $member_id) {
        $query = "UPDATE member SET firstname = ?,lastname = ? WHERE id = ?";
        $paramType = "ssi";
        $paramValue = array(
            $firstname,
            $lastname,
            $member_id
        );
        
        $this->db_handle->update($query, $paramType, $paramValue);
    }
    
    function deletemember($member_id) {
        $query = "DELETE FROM member WHERE id = ?";
        $paramType = "i";
        $paramValue = array(
            $member_id
        );
        $this->db_handle->update($query, $paramType, $paramValue);
    }
    
    function getMemberById($member_id) {
        $query = "SELECT * FROM member WHERE id = ?";
        $paramType = "i";
        $paramValue = array(
            $member_id
        );
        
        $result = $this->db_handle->runQuery($query, $paramType, $paramValue);
        return $result;
    }
    
    function getAllMember() {
        $sql = "SELECT * FROM member ORDER BY id";
        $result = $this->db_handle->runBaseQuery($sql);
        return $result;
    }
}
?>