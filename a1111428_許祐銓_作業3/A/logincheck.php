<?php
session_start();

$s_ID = "c";
$s_PWD = "123";

$a_ID = "admin";
$a_PWD = "123456";

$t_ID ="t";
$t_PWD ="123";

$input_ID=$_POST["input_ID"];
$input_PWD=$_POST["input_PWD"];
$input_role = $_POST["role"];

$date =strtotime("+1 day",time());


if($input_role == "student" && $input_ID == $s_ID && $input_PWD == $s_PWD){
    $_SESSION["login"]="student";
    setcookie("uName",$input_ID,$date);
    header("Location: user_page.php");     
    exit();
}else if($input_role == "admin" && $input_ID == $a_ID && $input_PWD == $a_PWD){
    $_SESSION["login"]="admin";
    setcookie("uName",$input_ID,$date);
    header("Location: admin_page.php");
    exit();
}else if($input_role == "teacher" && $input_ID == $t_ID && $input_PWD == $t_PWD){
    $_SESSION["login"]="teacher";
    setcookie("uName",$input_ID,$date);
    header("Location: teacher_page.php");
    exit();
}else{
    echo "登入失敗，將重返登入頁面...";
        header("Refresh:1;url=logout1.php");
        exit();
}
