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
    $sql=$pdo->prepare('insert into Camera(name, maker_id, category_id, path) values (?,?,?,?)');
        $sql->execute([$_POST['name'],$_POST['maker'],$_POST['category'],$_POST['path']]);
        echo'<h2>追加が完了しました</h2>';
        echo'<table border="1" cellpadding="10"cellspacing="0">';
            echo'<tr>';
            echo'<td>',$_POST['name'],'</td>';
            echo'<td>',$_POST['maker_name'],'</td>';
            echo'<td>',$_POST['category_name'],'</td>';
            echo'<td><img src="img/'.$_POST['path'].'" width="60px" height="60px"></td>';
            echo'</tr>';
        echo'</table>';
?>
    

</body>
</html>