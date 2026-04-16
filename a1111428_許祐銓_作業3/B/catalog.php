<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>商品目錄</title>
</head>
<body>

    <h2>商品目錄</h2>

    <form action="savecart.php" method="post">
        商品:iPhone 18<br>
        價格:45000<br>
        <input type="hidden" name="id" value="P001">
        <input type="hidden" name="name" value="iPhone 18">
        <input type="hidden" name="price" value="45000">
        <input type="submit" value="加入購物車">
    </form>
    
    <hr>

    <form action="savecart.php" method="post">
        商品:AirPods Pro<br>
        價格:$6000<br>
        <input type="hidden" name="id" value="P002">
        <input type="hidden" name="name" value="AirPods Pro">
        <input type="hidden" name="price" value="6000">
        <input type="submit" value="加入購物車">
    </form>

    <hr>

    <form action="savecart.php" method="post">
        商品:Macbook air<br>
        價格:40000<br>
        <input type="hidden" name="id" value="P003">
        <input type="hidden" name="name" value="Macbook air">
        <input type="hidden" name="price" value="40000">
        <input type="submit" value="加入購物車">
    </form>

    <CENTER>
        <A HREF="shoppingcart.php">前往查看我的購物車</A>
    </CENTER>   
</body>
</html>
