<?php
require "DBController.php";
class Authentication {
    function isMemberExists($userName) {
        $db_handle = new DBController();
        $query = "SELECT * FROM members WHERE member_name = ?";
        $result = $db_handle->runQuery($query, 's', array($userName));
        return $result;
    }
}
?>