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
        <form method="post" action="viewFirst2.php">
            <label for="name">이름</label> <input type="text" name="name"> <br/>
            <label for="content">본문</label> <br/>
            <textarea name="contents" cols="50" rows="20">
                
            </textarea>
            <button type="submit">전송</button>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
