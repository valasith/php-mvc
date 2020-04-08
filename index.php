<?php
error_reporting(0);
require_once("config/DatabaseController.php");
require_once("models/Member.php");

$db_handle = new DatabaseController();

// $action = "";
if (! empty($_GET["action"])) {
    $action = $_GET["action"];
}
switch ($action) {
    
    case "member-add":
        if (isset($_POST['add'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $member = new Member();
            $insertId = $member->addMember($firstname, $lastname);
            if (empty($insertId)) {
                $response = array(
                    "message" => "Problem in Adding New Record",
                    "type" => "error"
                );
            } else {
                header("Location: index.php");
            }
        }
        require_once "views/member/create.php";
        break;
    
    case "member-edit":
        $member_id = $_GET["id"];
        $member = new Member();
        
        if (isset($_POST['add'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $member->editMember($firstname, $lastname, $member_id);
            header("Location: index.php");
        }
        
        $result = $member->getMemberById($member_id);
        require_once "views/member/update.php";
        break;
    
    case "member-delete":
        $member_id = $_GET["id"];
        $member = new Member();
        
        $member->deletemember($member_id);
        
        $result = $member->getAllMember();
        require_once "views/member/index.php";
        break;
    
    default:
        $member = new Member();
        $result = $member->getAllMember();
        require_once "views/member/index.php";
        break;
}
?>