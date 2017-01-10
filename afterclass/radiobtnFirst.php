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
        <form action="viewRadiobtnFirst.php" method="post">
            <label for="sex">성별</label> <br/>
            <input type="radio" name="sex" value="남">남 <br/>
            <input type="radio" name="sex" value="여">여 <br/>
            <br/>
            <label for="school">학교</label> <br/>
            <input type="radio" name="school" value="인문계">인문계 <br/>
            <input type="radio" name="school" value="특성화">특성화 <br/>
            <input type="radio" name="school" value="특목고">특목고 <br/>
            <button type='submit'>전송</button>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
