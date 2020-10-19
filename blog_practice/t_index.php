<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" charset="utf-8">
    <title>Special Blog</title>
    <link rel="stylesheet" href="blog.css">
</head>

<body>
    <h1>記事一覧</h1>
    <?php 
    foreach ($posts as $post) { ?>
    <div class="post">
        <h2><?php echo $post['title'] ?></h2>
        <p><?php echo nl2br($post['content']) ?></p>
        <?php foreach ($post['comments'] as $comment) { ?>
        <div class="comment">
            <h3><?php echo $comment['name'] ?></h3>
            <p><?php echo nl2br($comment['content']) ?></p>
        </div>
        <?php } ?>
        <p class="commment_link">
            投稿日：<?php echo $post['time'] ?>　
            <a href="comment.php?no=<?php echo $post['no'] ?>">コメント</a>
        </p>
    </div>
    <?php } ?>
    <div class="post">
        <br>
        <p><button type="button" onclick="location.href='http://localhost/sample/blog_practice/blog_gamelike.php'">マップ画面</button></p>
        <p><br><button type="button" onclick="location.href='http://localhost/sample/blog_practice/post.php'">入力画面</button></p>
    </div>
</body>

</html>
