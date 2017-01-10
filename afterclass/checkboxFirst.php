<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="viewCheckboxFirst.php" method="post">
            <label for="hobby">나의 취미</label> <br/>
            <input type="checkbox" name="hobby[]" value="스포츠">스포츠 <br/>
            <input type="checkbox" name="hobby[]" value="게임">게임 <br/>
            <input type="checkbox" name="hobby[]" value="영화 감상">영화 감상 <br/>
            <input type="checkbox" name="hobby[]" value="독서">독서 <br/>
            <button type="submit">전송</button>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
