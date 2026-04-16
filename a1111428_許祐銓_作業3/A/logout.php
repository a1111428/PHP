<?php
session_start();

session_destroy();
setcookie("uName", "", time() - 3600);
header("Refresh:0;url=login1.php");


?>
