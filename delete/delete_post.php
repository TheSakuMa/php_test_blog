<?php 
$pdo = new PDO("mysql:dbname=blog", "root", "root");
$st = $pdo->prepare("DELETE FROM post WHERE title=?");
$st->execute(array($_GET['title']));
?>

