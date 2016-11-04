<!DOCTYPE html>
<?php
include_once 'config.php';
    $sql = 'select * from member';
    $stmh = $pdo->prepare($sql);
    $stmh->execute();
    $result = $stmh->fetchAll();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <th>번호</th>
                <th>제목</th>
                <th>작성자</th>
            </tr>
        <?php
        $i = 0;
            foreach ($result as $row) {
        ?>
            <form action="view.php" method="post">
            <tr>
                <input type="hidden" name="name" value="<?=$row['idx']?>">
                <td><?=$row['idx']?></td>
                <input type="hidden" value="<?=$row['title']?>">
                <td><a herf="#"><?=$row['title']?></a></td>
                <input type="hidden" value="<?=$row['name']?>">
                <td><?=$row['name']?></td>
            </tr>
        <?php
        $i++;
            }
        ?>
        </form>
        </table>
    </body>
</html>
