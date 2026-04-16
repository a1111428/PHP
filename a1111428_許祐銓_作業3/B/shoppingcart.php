<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>我的購物車</title>
</head>
<body>
    <CENTER>
        <h1>您的購物車明細</h1>
    </CENTER>
    <hr>
    <?php
    if(isset($_SESSION["Cart"]) && !empty($_SESSION["Cart"])) {
        $total_money = 0;

        foreach ($_SESSION["Cart"] as $id => $item) {
            $name = $item["name"];
            $price = $item["price"];
            $qty = $item["qty"];
            $subtotal = $price * $qty;
            $total_money = $total_money + $subtotal;

            echo "商品編號：$id<br>";
            echo "商品名稱：$name<br>";
            echo "商品單價：$price<br>";
            echo "購買數量：$qty<br>";
            echo "項目小計：<b>$subtotal</b><br>";
            
            echo "
            <form action='delete.php' method='post'>
                <input type='hidden' name='id' value='$id'>
                <input type='submit' value='從購物車移除'>
            </form>
            <hr>";
        }
        echo "<CENTER><h2>應付總額：<font color='red'>$ $total_money</font></h2></CENTER>";
    } else {
        echo "<CENTER><font color='red'>目前購物車內沒有商品。</font></CENTER>";
    }
    echo "<CENTER><A HREF='catalog.php'>回商品目錄</A></CENTER>";
    ?>
</body>
</html>

