<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;500&family=Sarabun&display=swap" rel="stylesheet">

<title>My Home Page</title>

<style>
body, html {
    background-size: cover;
    font-family: 'Kanit', sans-serif;
}

a{
    text-decoration: none;
    color: black;
}

img, H2{
    display: inline;
}

.row {
    display: flex;
}

.column {
    flex: 50%;
}

table{
    border-collapse: collapse;
    width: 350px;
    margin: auto;
    background: #ffffffcc;
}

table, th, td{
    border: 1px solid black;
    padding: 10px;
    text-align: center;
    font-size: 18px;
}

.center{
    text-align: center;
}
</style> 

</head>

<body background="./31.PNG">

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
    <br/><br/><br/><br/>


<?php
    // ชื่อ-สกุลตัวพิมพ์เล็ก
    $fullname = "sitthisak phaisanphiphak";

    // แยกชื่อ–สกุล
    list($firstname, $lastname) = explode(" ", $fullname);

    // แปลงให้ตัวพิมพ์ใหญ่
    $firstname = strtoupper($firstname);
    $lastname  = strtoupper($lastname);

    // ตั้งชื่อเล่น
    $nickname = $firstname;

    // ปีเกิด
    $birthYear = 2007;

    // คำนวณอายุ
    $currentYear = date("Y");
    $age = $currentYear - $birthYear;

    // วันที่อัปเดต
    $update = date("Y-m-d");
?>

<div class="center">
<h2>My Profile</h2>
</div>

<table>
    <tr>
        <td>Firstname</td>
        <td><?php echo $firstname; ?></td>
    </tr>
    <tr>
        <td>Lastname</td>
        <td><?php echo $lastname; ?></td>
    </tr>
    <tr>
        <td>Nickname</td>
        <td><?php echo $nickname; ?></td>
    </tr>
    <tr>
        <td>Age</td>
        <td><?php echo $age; ?></td>
    </tr>
    <tr>
        <td>Update</td>
        <td><?php echo $update; ?></td>
    </tr>
</table>

<br/><br/><br/><br/><br/>

</body>
</html>
