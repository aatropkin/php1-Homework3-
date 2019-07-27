

<?php
include __DIR__ . '/array.php';
$id =$images[$_GET['id']];
?>
<img src="/img/<?= $id ?>"><br>
<a href="/gallery.php">Назад</a>
