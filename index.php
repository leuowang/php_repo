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
        <form method="POST" action="insert.php">
            <p>
                旅客姓名：<input type="text" name="name">
            </p>
            <p>
                性別：<input type="radio" name="gender" value="0">女
                <input type="radio" name="gender" value="1">男
            </p>
            <p>
                入住日期：<input type="text" name="sdate">
            </p>
            <p>
                退房日期：<input type="text" name="edate">
            </p>
            <input type="submit" value="訂房">
            <input type="reset" value="清除">
        </form>
        <?php
        ?>
    </body>
</html>
