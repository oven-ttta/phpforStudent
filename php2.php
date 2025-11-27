<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;500&display=swap" rel="stylesheet">
<title>PHP 2</title>

<style>
body, html {
    background-size: cover;
    font-family: 'Kanit', sans-serif;
}
a{
    text-decoration: none;
    color: black;
}
.row { display: flex; }
.column { flex: 50%; }

.box {
    width: 500px;
    background: #ffffffdd;
    padding: 20px;
    margin: 50px auto;
    border-radius: 10px;
    font-size: 20px;
}
</style>
</head>

<body background="./.....png">

<div class="row">
    <div class="column" align="right" style="padding-right: 20px;padding-top: 40px;">
        <a href="home.php"><strong>HOME</strong></a><strong> |
        <a href="php1.php">PHP 1</a> |
        <a href="php2.php">PHP 2</a> |
        <a href="loop.php">LOOP</a> |
        <a href="array.php">ARRAY</a>
        </strong>
    </div>
</div>
<hr/>

<div class="box">
<h2 align="center">ตัวอย่างการใช้คำสั่ง IF – ELSE</h2>

<?php
    $day = date("l");  // Monday, Tuesday, ...
    $message = "";

    if($day == "Monday"){
        $message = "วันนี้วันจันทร์! เริ่มต้นสัปดาห์ใหม่ 💪";
    }
    elseif($day == "Friday"){
        $message = "วันนี้วันศุกร์! อีกนิดก็วันหยุดแล้ว 😄";
    }
    elseif($day == "Sunday"){
        $message = "วันอาทิตย์... พักผ่อนได้เต็มที่!";
    }
    else{
        $message = "วันนี้เป็นวันปกติ 😄";
    }
?>

<b>วันนี้คือ:</b> <?php echo $day; ?><br>
<b>ข้อความ:</b> <?php echo $message; ?><br>

</div>

</body>
</html>
