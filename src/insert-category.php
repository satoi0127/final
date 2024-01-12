<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/insert.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="main">
        <form action="insert2-category.php" method="POST">
        <h2>追加</h2>
        <table class="table" border="1" cellpadding="10"cellspacing="0">
        <tr><td class="td1">カテゴリ名前</td><td class="td2">
        <input type="text" size="30" class="text_box" name="category_name" required>
        </td></tr>
        </table>
        <button type="submit" class="insert">追加</button>
</form>
<button onclick="location.href='insert.php'">戻る</button>
    </div>
</body>
</html>