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
        <?php
        include_once 'db.php';

        $name = $_POST['name'];

        $gender = $_POST['gender'];
        $sdate = $_POST['sdate'];
        $edate = $_POST['edate'];
// generate key
        $key = '';
        srand();
        for ($i = 0; $i < 12; $i++) {
            $key = $key . rand(0, 9);
        }
//echo $key;
        $format = "INSERT INTO locks (id, user, gender, sdate, edate, doorkey)"
                . "VALUES (NULL,'%s','%d','%s','%s','%s') ";
        $sql = sprintf($format, $name, $gender, $sdate, $edate, $key);
        //mysql_query($sql);

// 查詢所有資料
        $query = "SELECT * FROM locks";
        $result = mysql_query($query);
        ?>
        <table border="1">
            <tr>
                <td>旅客姓名</td>
                <td>性別</td>
                <td>入住日期</td>
                <td>退房日期</td>
                <td>天數</td>
                <td>秘鑰</td>
            </tr>
            <?php
            //print_r($result);
            while ($row = mysql_fetch_assoc($result)) {
                ?>
                <tr>
                    <?php
                    echo '<td>' . $row['user'] . "</td> ";
                    if ($row['gender'] == 0) {
                        $gstr = '女';
                    } else
                        $gstr = '男';
                    echo '<td>' . $gstr . "</td> ";
                    echo '<td>' . $row['sdate'] . "</td> ";
                    echo '<td>' . $row['edate'] . "</td> ";
                    echo '<td>' . (intval($row['edate'])-intval($row['sdate'])) . "</td> ";
                    echo '<td>' . $row['doorkey'] . "</td> ";
                    ?>
                </tr>
                <?php
            }
            ?>

        </table>
    </body>
</html>
