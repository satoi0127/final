<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1517439-final';
    const USER = 'LAA1517439';
    const PASS = 'Pass0127';
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<h1>カメラ一覧</h1>
<table border="1">
            <tr>
                <th>ID</th><th>名前</th><th>メーカー名</th><th>カテゴリ</th><th>画像</th>
            </tr>
        <?php
        $pdo=new PDO($connect, USER, PASS);
        foreach($pdo->query('select * from Camera,Maker,Category where Camera.maker_id=Maker.maker_id and Camera.category_id=Category.category_id') as $row){
            echo'<tr>';
            echo'<td>',$row['id'],'</td>';
            echo'<td>',$row['name'],'</td>';
            echo'<td>',$row['maker_name'],'</td>';
            echo'<td>',$row['category_name'],'</td>';
            echo'<td><img src="img/'.$row['path'].'" class="item"></td>';
            echo'</tr>';
        }
        ?>
        </table>
</body>
</html>