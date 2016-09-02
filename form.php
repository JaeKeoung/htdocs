<!document type>
<html>
    <head>
        <meta charset="utf-8">
        <title>텍스트 송신 테스트</title>
    </head>
    <body>
        <form name="form1" method="post" action="view.php">
            <span>아이디 </span>
            <input type="text" name="onName"><br><!--입력하는 네모 그부분-->
            <span>비밀번호 </span>
            <input type="password" name="password"><br>
            <p>본문</p>
            <textarea name="honbun" cols="30" rows="5"></textarea><br>
            나의 취미: <br>
            <input type="checkbox" name="hobby[]" value="스포츠">
            스포츠<br>
            <input type="checkbox" name="hobby[]" value="영화감상">
            영화감상<br>
            <input type="checkbox" name="hobby[]" value="독서">
            독서<br>
            <input type="submit" value="송신"><!--송신버튼-->
        </form>
        <?php
            
        ?>
    </body>
</html>
