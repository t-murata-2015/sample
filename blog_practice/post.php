<?php
  $error = $title = $content = '';
  if (@$_POST['submit']) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
      
    $title = htmlspecialchars($title,ENT_QUOTES,'UTF-8');
    $content = htmlspecialchars($content,ENT_QUOTES,'UTF-8');
    $lat = htmlspecialchars($lat,ENT_QUOTES,'UTF-8');
    $lng = htmlspecialchars($lng,ENT_QUOTES,'UTF-8');
      
    if (!$title) $error .= 'タイトルがありません。<br>';
    if (mb_strlen($title) > 80) $error .= 'タイトルが長すぎます。<br>';
    if (!$content) $error .= '本文がありません。<br>';
    if (!$lat) $error .= '緯度がありません。<br>';
    if (!$lng) $error .= '経度がありません。<br>';
    if (!$error) {
      $pdo = new PDO("mysql:dbname=blog;charset=utf8", "root");
      $st = $pdo->query("INSERT INTO post(title,content,lat,lng) VALUES('$title','$content','$lat','$lng')");
      header('Location: index.php');
      exit();
    }
  }
  require 't_post.php';
?>