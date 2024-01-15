<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/All.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1517439-final';
    const USER = 'LAA1517439';
    const PASS = 'Pass0127';
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<div class="main">
<br>
<h1>カメラ一覧</h1><br>
<table border="1" cellpadding="10"cellspacing="0">
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
            echo'<td><img src="img/'.$row['path'].'" width="120px" height="120px"></td>';
            echo'</tr>';
        }
        ?>
        
        </table>
        <button onclick="location.href='index.php'">戻る</button>
    </div>
</body>
</html>