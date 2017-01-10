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
        <form action="viewSimpletestFirst.php" method="post">
            <label for="id">아이디</label>
            <input type="text" name="id"> <br/>
            <label for="password">비밀번호</label>
            <input type="text" name="password"> <br/>
             <br/>
            <label for="sex">성별</label> <br/>
            <input type="radio" name="sex" value="남">남 <br/>
            <input type="radio" name="sex" value="여">여 <br/>
             <br/>
            <label for="hobby">취미</label> <br/>
            <input type="checkbox" name="hobby[]" value="독서">독서
            <input type="checkbox" name="hobby[]" value="게임">게임
            <input type="checkbox" name="hobby[]" value="영화 감상">영화 감상 <br/>
            <input type="checkbox" name="hobby[]" value="쇼핑">쇼핑
            <input type="checkbox" name="hobby[]" value="웹서핑">웹서핑
            <input type="checkbox" name="hobby[]" value="뉴스 정독">뉴스 정독
             <br/>
            <button type="submit">전송</button>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
