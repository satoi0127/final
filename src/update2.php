<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1517439-final';
    const USER = 'LAA1517439';
    const PASS = 'Pass0127';
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('select * from Camera where id=?');
    $sql->execute([$_POST['id']]);
    foreach($sql as $row){
    echo'<div class="main">';
        echo'<table class="table" border="1" cellpadding="10"cellspacing="0">';
        echo'<form action="update3.php" method="post">';
        echo '<input type="hidden" name="id" value="',$row['id'],'">';
        echo'<tr><td class="td1">名前</td><td class="td2">';
        echo'<input type="text" size="30" class="text_box" name="name"value="',$row['name'],'">';
        echo'</td></tr>';
        echo'<tr><td class="td1">メーカID</td><td class="td2">';
        echo'<input type="number" size="30" class="text_box" name="maker" value="',$row['maker_id'],'">';
        echo'</td></tr>';
        echo'<tr><td class="td1">カテゴリID</td><td class="td2">';
        echo'<input type="number" size="30" class="text_box" name="category" value="',$row['category_id'],'">';
        echo'</td ></tr>';
        echo'</table>';
        }
        echo'<button class="sarch" type="submit">更新</button>';
        echo'</form>';
    ?>
    <button onclick="location.href='update.php'">戻る</button>
    </div>
</body>
</html>