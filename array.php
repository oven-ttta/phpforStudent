<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;500&family=Sarabun&display=swap" rel="stylesheet">
<title>ARRAY</title>

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
<h2 align="center">ตัวอย่างการใช้ Array</h2>

<?php
// Array 1 มิติ
$friends = ["Somchai", "Weerachai", "Surachai", "Adisorn"];

echo "<b>รายชื่อเพื่อน (Array 1 มิติ):</b><br>";
foreach($friends as $value){
    echo "- $value<br>";
}

echo "<br>";

// Array 2 มิติ
$students = [
    ["Suda", "Anna", "John"],
    ["Mike", "Sara", "Tom"]
];

echo "<b>ตัวอย่าง Array 2 มิติ:</b><br>";
echo $students[0][0] . "<br>";
echo $students[0][1] . "<br>";
echo $students[1][2] . "<br>";

?>
</div>

</body>
</html>
