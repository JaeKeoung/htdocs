<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="select" action="birthview.php" method="post">
            <select name="birthYear" id="">
                <option value="" selected>년도</option>
            <?php
                /*for($i = 0; $i < 10; $i++){
                    //10년단위
                    for($j = 0; $j < 10; $j++){
                        //1년단위
                        print "<option value='19".$i.$j."'>19".$i.$j."</option>:";
                    }
                }
                
                for($i = 0; $i < 2; $i++){
                    //10년단위
                    for($j = 0; $j < 7; $j++){
                        //1년단위
                        print "<option value='20".$i.$j."'>20".$i.$j."</option>:";
                    }
                }*/
                for($i = 1917; $i <= 2016; $i++) {
                    print "<option value='".$i."'>".$i."</option>";
                }
                
            ?>
            </select>
               
            <select name="birthMonth" id="">
                <option value="" selected>월</option>
            <?php
                for($i = 1; $i < 13; $i++){
                    print "<option value='".$i."'>".$i."</option>";
                }
                
            ?>
                
            </select>
            
            <select name="birthDay" id="">
                <option value="" selected>일</option>
            <?php
                for($i = 1; $i < 32; $i++){
                    print "<option value='".$i."'>".$i."</option>";
                }
                
            ?>
                
            </select>
            <input type="submit" value="송신">
        </form>
        
    </body>
</html>
