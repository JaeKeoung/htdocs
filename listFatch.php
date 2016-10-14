<!DOCTYPE html>
<?php
    include_once 'kccdb.php';
    $sql = 'select * from member';
    $stmh = $pdo->prepare($sql);
    $stmh->execute();
    $result = $stmh->fetchAll();
?>
<html>
    <head>
        <style>
            td {text-align: left; padding: 5px;}
            th {text-align: center; padding: 5px; background-color: #ffc0cb;}
            table {border-collapse: collapse; margin: 5px;}
            table, th, td {border: 1px solid #000;}
        </style>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <th>name</th>
                <th>id</th>
                <th>password</th>
                <th>phoneNumber</th>
            </tr>
        <?php
            foreach ($result as $row) {
        ?>
            <form action="fatchList.php" method="post">
            <tr>
            <input type="hidden" name="name" value="<?=$row['name']?>">
                <td><?=$row['name']?></td>
                <input type="hidden" value="<?=$row['id']?>">
                <td><?=$row['id']?></td>
                <input type="hidden" value="<?=$row['password']?>">
                <td><?=$row['password']?></td>
                <input type="hidden" value="<?=$row['phoneNumber']?>">
                <td><?=$row['phoneNumber']?></td>
                <td><button>삭제</button></td>
            </tr>
            </form>
        <?php
            }
        ?>
        </table>
        
    </body>
</html>
