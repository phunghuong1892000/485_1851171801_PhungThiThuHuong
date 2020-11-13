<?php
session_start();
$masv=$_SESSION['masv'];
require_once "config.php";
delete($masv);

?>

<button> <a href="forum.php">Quay lại forum</a></button>