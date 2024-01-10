<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="main">
        <form action="insert2.php" method="POST">
        <h2>追加</h2>
        <table class="table" border="1" cellpadding="10"cellspacing="0">
        <tr><td class="td1">名前</td><td class="td2">
        <input type="text" size="30" class="text_box" name="name" required>
        </td></tr>
        <tr><td class="td1">メーカID</td><td class="td2">
        <input type="text" size="30" class="text_box" name="maker" required>
        </td></tr>
        <tr><td class="td1">カテゴリID</td><td class="td2">
        <input type="text" size="30" class="text_box" name="category" required>
        </td ></tr>
        <tr><td class="td1">画像</td><td class="td2">
        <input type="file" class="text_box" name="path" value="" required>
        </td></tr>
        </table>
        <button type="submit" class="insert">追加</button>
    </form>
        
    
</div>
</body>
</html>