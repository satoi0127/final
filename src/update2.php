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
    $sql=$pdo->prepare('select * from Camera where id=?');
    $sql->execute([$_POST['id']]);
    echo'<div class="main">';
    echo'<h1>更新</h1><br>';
    foreach($sql as $row){
        $mid = $row['maker_id'];
        $cid = $row['category_id'];
        echo'<table class="table" border="1" cellpadding="10"cellspacing="0">';
        echo'<form action="update3.php" method="post">';
        echo '<input type="hidden" name="id" value="',$row['id'],'">';
        echo'<tr><td class="td1">名前</td><td class="td2">';
        echo'<input type="text" size="30" class="text_box" name="name"value="',$row['name'],'">';
        echo'</td></tr>';
        echo'<tr><td class="td1">メーカID</td><td class="td2">';
        echo'<select name="maker" id="maker">';
        foreach($pdo->query('select * from Maker') as $row){
            if($row['maker_id'] == $mid){
                echo'<option value="',$row['maker_id'],'" selected>',$row['maker_name'],'</option>';
            }else{
                echo'<option value="',$row['maker_id'],'">',$row['maker_name'],'</option>';
            }
        }
        echo'</select>';
        echo'</td></tr>';
        echo'<tr><td class="td1">カテゴリID</td><td class="td2">';
        echo'<select name="category" id="category">';
        foreach($pdo->query('select * from Category') as $row){
            if($row['category_id'] == $cid){
                echo'<option value="',$row['category_id'],'" selected>',$row['category_name'],'</option>';
            }else{
                echo'<option value="',$row['category_id'],'">',$row['category_name'],'</option>';
            }
        }
        echo'</td ></tr>';
        echo'</table>';
        }
        echo'<button class="update" type="submit">更新</button>';
        echo'</form>';
       
    ?>
    <button onclick="location.href='update.php'">戻る</button>
    </div>
</body>
</html>