<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/insert.css">
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
    ?>
<div class="main">
        <form action="insert2.php" method="POST">
        <br>
        <h1>追加</h1>
        <table class="table" border="1" cellpadding="10"cellspacing="0">
        <tr><td class="td1">名前</td><td class="td2">
        <input type="text" size="30" class="text_box" name="name" required>
        </td></tr>
        <tr><td class="td1">メーカID</td><td class="td2">
        <?php
        echo'<select name="maker" id="maker">';
        foreach($pdo->query('select * from Maker') as $row){
        echo'<option value="',$row['maker_id'],'">',$row['maker_name'],'</option>';
        }
        echo'</select>';
       ?>
        </td></tr>
        <tr><td class="td1">カテゴリID</td><td class="td2">
        <?php
        echo'<select name="category" id="category">';
        foreach($pdo->query('select * from Category') as $row){
        echo'<option value="',$row['category_id'],'">',$row['category_name'],'</option>';
        }
        echo'</select>';
        ?>
        </td ></tr>
        <tr><td class="td1">画像</td><td class="td2">
        <input type="file" class="text_box" name="path" value="" required>
        </td></tr>
        </table>
        <button type="submit" class="insert">追加</button>
        </form>
        <button onclick="location.href='insert-category.php'" class="insert_c">カテゴリ登録</button>
        <button onclick="location.href='index.php'">戻る</button>
    
</div>
</body>
</html>