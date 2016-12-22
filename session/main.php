<!DOCTYPE html>
<?php
    include_once 'config.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <title>main</title>
        <style>
            *{margin: 0px; padding: 0px}
            #sign_in_form {margin-bottom: 50px;}
            form {margin-left: 10px;}
            form input {margin-bottom: 5px;}
        </style>
    </head>
    <body>
        <form action="signIn.php" method="post" id="sign_in_form">
            <label for="id_input">아이디</label>
            <input name="SIid" type="text" id="id_input" maxlength="15"><br/>
            <label for="password_input">비밀번호</label>
            <input name="SIpassword" type="text" id="password_input" maxlength="15"><br/>
            <label for="nickname_input">별명</label>
            <input name="SInickname" type="text" id="nickname_input" maxlength="15"><br/>
            <input type="submit" value="회원가입">
        </form>
        <form action="logIn.php" method="post" id="log_in_form">
            <label for="login_id">아이디</label>
            <input name="LIid" type="text" id="login_id" maxlength="15"><br/>
            <label for="login_password">비밀번호</label>
            <input name="LIpassword" type="text" id="login_password" maxlength="15"><br/>
            <input type="submit" value="로그인">
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
