<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/update2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<br>
<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1517439-final';
    const USER = 'LAA1517439';
    const PASS = 'Pass0127';
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('update Camera set name=?, maker_id=?, category_id=? where id=?');
    $sql->execute([$_POST['name'],$_POST['maker'],$_POST['category'],$_POST['id']]);
    $sql=$pdo->prepare('select * from Camera,Maker,Category where Camera.maker_id=Maker.maker_id and Camera.category_id=Category.category_id and id=?');
    $sql->execute([$_POST['id']]);
    
    echo'<div class="main">';
    echo'<h1>更新が完了しました</h1>';
    echo'<table border="1" cellpadding="10"cellspacing="0">';
    foreach($sql as $row){
        echo'<tr>';
        echo'<td>',$row['id'],'</td>';
        echo'<td>',$row['name'],'</td>';
        echo'<td>',$row['maker_name'],'</td>';
        echo'<td>',$row['category_name'],'</td>';
        echo'<td><img src="img/'.$row['path'].'" width="120px" height="120px"></td>';
        echo'</tr>';
    }
    echo'</table>';
    ?>
    <button onclick="location.href='all.php'">一覧表示</button>
</div>
    </body>
    </html>