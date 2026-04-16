<?php
session_start();
if (isset($_POST["id"])) {
    $id = $_POST["id"];

    if (isset($_SESSION["Cart"][$id])) {
            unset($_SESSION["Cart"][$id]);
        }
}
header("Location: shoppingcart.php");
exit();

?>
