<?php
session_start();

if (isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["price"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $price = $_POST["price"];

    if (isset($_SESSION["Cart"][$id])) {
        $_SESSION["Cart"][$id]["qty"]++;
    } else {
        $_SESSION["Cart"][$id] = array(
            "name" => $name,
            "price" => $price,
            "qty" => 1
        );
    }
}

header("Location: catalog.php");
exit();
?>
