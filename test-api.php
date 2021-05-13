<?php require __DIR__. '/parts-php/config.php'; ?>
<?php
$title = '留言板';
$pageName = 'comment-page';

$c_sql = "SELECT * FROM `test` WHERE 1";
$comment_rows = $pdo->query($c_sql)->fetchAll();






