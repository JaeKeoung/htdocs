<?php
include_once 'listFatch.php';
$sql = "delete from member where name='{$_POST['name']}'";
$pdo->query($sql);
?>
<script>
    location.href='listFatch.php';
</script>