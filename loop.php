<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;500&family=Sarabun&display=swap" rel="stylesheet">
<title>LOOP</title>

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
.content-box{
    background: #ffffffcc;
    width: 500px;
    padding: 20px;
    margin: auto;
    font-size: 20px;
    border-radius: 10px;
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
<br/><br/><br/><br/><br/><br/><br/>

<!-- ใส่ CODE PHP ที่นี่ -->
<div class="content-box">
<h2 align="center">นับถอยหลังวันเกิด</h2>

<?php

// ← เปลี่ยนตรงนี้เป็นจำนวนวันเดือนเกิดของคุณ เช่น 31
$birthMonthDays = 31;

if($birthMonthDays == 30){

    $i = 30;
    while($i >= 0){
        echo $i . "<br>";
        $i -= 10;
    }
    echo "<br><b>Wish you all the happiness in the world!</b>";

}
elseif($birthMonthDays == 31){

    $i = 31;
    while($i >= 1){
        echo $i . "<br>";
        $i -= 5;
    }
    echo "<br><b>May all your dreams come true!</b>";

}
elseif($birthMonthDays == 28 || $birthMonthDays == 29){

    echo "<b>May your life be colorful!</b>";

}
else{

    echo "<b>Invalid!</b>";

}

?>
</div>

</body>
</html>
