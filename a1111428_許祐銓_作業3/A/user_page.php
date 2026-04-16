<?php

session_start();

if($_SESSION['login']=='student'){
    echo "<h1>Welcome! {$_COOKIE['uName']}</h1><br>";
    echo"<a href='logout1.php'>logout</a>";
    }else{
    echo"<h1>非法進入網頁</h1>";
    header("Refresh:1;url=login1.php");
}

?>
