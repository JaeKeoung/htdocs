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
        <form action="viewSelectFirst.php" method="post">
            <label for=""></label>
            <select name="city" id="city">
                <option value="">----행정구역을 선택해주십시오----</option>
                <option value="서울">서울특별시</option>
                <option value="대전">대전광역시</option>
                <option value="대구">대구광역시</option>
                <option value="부산">부산광역시</option>
                <option value="제주">제주특별자치도</option>
            </select>
            <button type="submit">전송</button>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
