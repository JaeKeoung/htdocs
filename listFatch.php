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
            .t_chk {position: absolute; margin-left: 322px;}
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $(".t_chk").click(function() {
                    if($(this).prop("checked")) {
                        $(".chk").prop("checked",true);
                    } else {
                        $(".chk").prop("checked",false);
                    }
                });
            });
        </script>
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
        $i = 0;
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
                <td><input type="checkbox" name="member[]" class="chk" value="<?php echo $me_id ?>"></td>
            </tr>
        <?php
        $i++;
            }
        ?>
        <input type="checkbox" class="t_chk">
        <input type="submit" value="삭제">
        </form>
        </table>
    </body>
</html>
