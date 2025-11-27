<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;500&display=swap" rel="stylesheet">
<title>PHP 1</title>

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

<body background="./24.PNG">
    
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
<h2 align="center">ตัวอย่างการใช้ตัวแปร + ฟังก์ชัน</h2>

<?php
    // ตัวแปร
    $name = "Sitthisak";
    $num1 = 123;
    $num2 = 77;

     function add($a, $b){
        return $a + $b;
    }

    $len = strlen($name);
?>

<b>ชื่อ:</b> <?php echo $name; ?><br>
<b>อักษรตัวใหญ่:</b> <?php echo strtoupper($name); ?><br>
<b>อักษรตัวเล็ก:</b> <?php echo strtolower($name); ?><br>
<b>จำนวนตัวอักษรในชื่อ:</b> <?php echo $len; ?><br>
<b>ผลบวกของตัวเลข <?php echo $num1; ?> + <?php echo $num2; ?> = </b> <?php echo add($num1, $num2); ?><br>
</div>

</body>
</html>
