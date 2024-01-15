<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/insert.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <br>
    <div class="main">
<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1517439-final';
    const USER = 'LAA1517439';
    const PASS = 'Pass0127';
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('insert into Camera(name, maker_id, category_id, path) values (?,?,?,?)');
        $sql->execute([$_POST['name'],$_POST['maker'],$_POST['category'],$_POST['path']]);
        echo'<h1 class="title">追加が完了しました</h1>';
?>
<button onclick="location.href='all.php'">一覧</button>
</div>

</body>
</html>