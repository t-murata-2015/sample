<?php

  $pdo = new PDO("mysql:dbname=blog;charset=utf8", "root");
  $st = $pdo->query("SELECT * FROM post ORDER BY no DESC");
  $posts = $st->fetchAll();
  for ($i = 0; $i < count($posts); $i++) {
    $st_co = $pdo->query("SELECT * FROM comment WHERE post_no={$posts[$i]['no']} ORDER BY no DESC");
    $posts[$i]['comments'] = $st_co->fetchAll();
  }

$posts = json_encode($posts);

  require 'blog_gamelike.html';
?>