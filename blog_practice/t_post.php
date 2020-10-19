<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>記事投稿 | Special Blog</title>
    <link rel="stylesheet" href="blog.css">
</head>

<body>
    <form method="post" action="post.php">
        <div class="post">
            <h2>記事投稿</h2>
            <p>緯度</p>
            <p><input type="text" name="lat" size="20" value="<?php echo $lat ?>"></p>
            <p>経度</p>
            <p><input type="text" name="lng" size="20" value="<?php echo $lng ?>"></p>
            <p>題名</p>
            <p><input type="text" name="title" size="40" value="<?php echo $title ?>"></p>
            <p>本文</p>
            <p><textarea name="content" rows="8" cols="40"><?php echo $content ?></textarea></p>
            <p><input name="submit" type="submit" value="投稿"></p>
            <p><br><?php echo $error ?></p>
            <p><br><button type="button" onclick="location.href='http://localhost/sample/blog_practice/blog_gamelike.php'">マップ画面</button></p>
            <p><br><button type="button" onclick="location.href='http://localhost/sample/blog_practice/index.php'">記事一覧</button></p>
        </div>
    </form>
</body>

</html>
