<?php
include 'Authentication.php';
if (isset($_POST['submit'])) {
    $authentication = new Authentication();
    $memberResult = $authentication->isMemberExists($_POST["username"]);
    if (empty($memberResult)) {
        $username_error = 'Incorrect Username';
    }
    else {
        if(!password_verify($_POST['user_pass'], $memberResult[0]["member_password"])) {
            $password_error = 'Incorrect Password';
        }
        if(empty($username_error) && empty($password_error)) {
            $_SESSION['username'] = $memberResult[0]["member_name"];
            header('location:dashboard.php');
        }
    }
}
?>