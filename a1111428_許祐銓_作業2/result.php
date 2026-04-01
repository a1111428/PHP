<?php

$name = $_POST["name"];
$uID_card = $_POST["uID_card"]; 
$gender = $_POST["gender"];
$phonenum = $_POST["phonenum"];

$ename = $_POST["ename"];
$erelation = $_POST["erelation"];
$ephone = $_POST["ephone"];

$eat = $_POST["eat"];
$comment = $_POST["comment"];


echo "姓名：$name<br>";
echo "身分證字號：$uID_card<br>";
echo "電話：$phonenum<br>";

if ($gender == "male") {
    echo "性別：男性<br>";
} else {
    echo "性別：女性<br>";
}


echo "緊急聯絡人姓名：$ename<br>";
echo "緊急連絡人關係：$erelation<br>";
echo "緊急聯絡人電話：$ephone<br>";

if ($eat == "m") {
    echo "飲食：葷食<br>";
} else {
    echo "飲食：素食<br>";
}

echo "其他事項：";
echo nl2br(strip_tags($comment));

echo "<br>";
?>

<html>
<br>
確認完成，您的姓名是：<?php echo $name ?>
</html>
