<?php
        $server = "localhost";
        $username = "RoomKeys";
        $password = "123456";
        $dbname = 'RoomKeys';
        $link = mysql_connect($server, $username, $password);
        if (!$link) {
            die('連線失敗');
        }
       // echo '連線成功';
        $db = mysql_selectdb($dbname, $link);
        mysql_query("SET NAMES 'utf8'");
        if (!$db) {
            die('資料庫無法開啟');
        }
        
     

