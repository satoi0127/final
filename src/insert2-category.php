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
    $sql=$pdo->prepare('insert into Category(category_name) values (?)');
        $sql->execute([$_POST['category_name']]);
        echo'<h2>追加が完了しました</h2>';
        $sql=$pdo->prepare('select * Category where and category_name=?');
        $sql->execute([$_POST['category_name']]);
        echo'<table border="1" cellpadding="10"cellspacing="0">';
        echo'<tr>
                <th>カテゴリID</th><th>カテゴリ名</th>
            </tr>';
        foreach($sql as $row){
            echo'<tr>';
            echo'<td>',$row['id'],'</td>';
            echo'<td>',$row['category_name'],'</td>';
            echo'</tr>';
        }
        echo'</table>';    
?>

</body>
</html>