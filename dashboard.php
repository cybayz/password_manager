<?php 
session_start();
?>
<style>
.member-dashboard {
    padding: 40px;
    background: #D2EDD5;
    color: #555;
    border-radius: 4px;
    display: inline-block;
}

.member-dashboard a {
    color: #09F;
    text-decoration: none;
}
</style>
<div class="member-dashboard">
    Hi <?php echo $_SESSION['username']; ?>, You have Successfully logged in!. <a href="logout.php">Logout</a>
</div>