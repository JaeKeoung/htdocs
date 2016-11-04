<!DOCTYPE html>
<?php
    include_once 'config.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="replace.php" method="post">
            <table>
                <tr>
                    <th>제목: <input type="hidden"></th>
                    <th>작성자: </th>
                </tr>
            </table>
            <input type="submit" value="삭제">
            <input type="submit" value="수정">
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
