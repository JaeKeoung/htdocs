<!DOCTYPE html>
<?php
    include 'test1.php';
    $sql = 'select * from member';
    $stmh = $pdo->prepare($sql);
    $stmh->excute();
    $result = $stmh->fetchAll();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            tr {background: #ccffff;}
            th {border: 1px solid black;}
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>id</th>
                <th>password</th>
                <th>name</th>
                <th>phoneNumber</th>
            </tr>
        <?php
            $i = 0;
            foreach ($result as $row) {
        ?>
            <form action="" method="post">
                <tr>
                <input type="hidden" name="name" value='<?=$row['name']?>'>
                </tr>
        <?php
            }
            $i++;
        ?>
        </form>
        </table>
    </body>
</html>
