<?php


$user_ID = "c";
$user_PWD = "123";

if(isset($_POST["input_ID"])&&isset($_POST["input_PWD"])){
    $input_ID=$_POST["input_ID"];
    $input_PWD=$_POST["input_PWD"];

    if ($input_ID == $user_ID && $input_PWD == $user_PWD) {
        header("Location: homework0320.php");
        exit();
    }else{
        echo "登入失敗，將重返登入頁面...";
        header("Refresh:1;url=login.php");
        exit();
    }
}

?>
