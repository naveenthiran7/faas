<?php
session_start();
if(isset($_SESSION['userid'])) {
    include './db.php';
    mysqli_query($link, "delete from cart where userid='$_SESSION[userid]'");
}
session_destroy();
header("Location:index.php");
?>