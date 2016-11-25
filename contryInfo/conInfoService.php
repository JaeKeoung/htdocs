<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>contryInfo</title>
        <link rel="stylesheet" href="css/contry.css">
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div id="wrap">
            <h1><header>국가별 기본정보 조회</header></h1>
            <div id="put_name">
                <form>
                    <input type="text" maxlength="30" size="40" name="contry" id="contry_name" placeholder="정보를 원하는 국가의 이름을 적어주십시오.">
                </form>
                <input type="button" id="search_info" value="검색">
            </div>
            
            <div id="contents">
                <div id="map_show">
                    
                </div>
                
                <div id="contry_info">
                    
                </div>
            </div>
        
        </div>
    </body>
</html>
