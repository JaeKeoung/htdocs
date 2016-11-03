<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="fileUpload.php" method="post" enctype='multipart/form-data'>
       <label for="title">제목</label>
       <input type="text" size="50" maxlength="100"><br/>
       <label for="content">내용</label>
       <textarea name="memo" id="content" cols="55" rows="10"></textarea><br/>
        <label for="fupload">첨부파일</label>
        <input type="file" name="upload" id="fupload"><br/>
        <input type="submit" value="올리기">
    </form>
    <?php
        
    ?>
</body>
</html>