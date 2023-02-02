<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table align="center">
        <tr>
            <td><a href="case.php">產品列表</a></td>
            <td><a href="shopping_car.php">檢視購物車</a></td>
            <td><a href="end.php">結帳</a></td>
        </tr>
    </table>


    <?php
    include("connection.php");
    $link = connect(); //連接資料庫
    $sql = "SELECT * FROM `post` WHERE 1"; //sql語法
    $result = execute_sql($link, "ubuntu", $sql); //執行資料庫
    $total = mysqli_num_rows($result); //總共有幾筆資料
    $fs = mysqli_num_fields($result); // 幾個欄位
    ?>


    <table border="1" align="center">
        <tr>
            <td>訂單編號</td>
            <td>任務名稱</td>
            <td>價格</td>
            <td>任務詳情</td>
            <td>加入購物車</td>
        </tr>


        <?php
        setcookie("name", "阿家"); //測試名子

        //讀取全部文章 編號 標題 價格 
        for ($i = 0; $i < $total; $i++) {
            $row = mysqli_fetch_assoc($result);
            //裡面我有放入一個buy=true 用意是submit之後傳送到addcar裡面 去做判斷 這個商品被買了 執行那邊的sql語法 讓數量歸零 其他的就是傳過去存成cookie
            echo "<form method='POST' action='addcar.php?buy=true.&p_id=" . $row["p_id"] . "&p_name=" . urlencode($row["p_name"]) . "&p_price=" . $row["p_price"] . "' >";

            $quant = $row["p_quant"]; //判斷賣了沒的值 簡單來說就是數量 

            echo "<tr align='center'>";
            echo "<td>" . $row["p_id"] . "</td>";
            echo "<td>" . $row["p_name"] . "</td>";
            echo "<td>" . $row["p_price"] . "</td>";
            echo "<td>" . $row["p_remark"] . "</td>";


            $id = $row["p_id"];


            // 判斷還沒賣出去 數量1就是還有 賣出去的話 我就會將數量歸0
            if ($quant == 1) {
                echo "<td>" . "<input type='submit' value='加入購物車' >" . "</td>";
            } else {
                echo "<td>" . "<input type='submit' value='賣完了白痴'  disabled='disabled' >" . "</td>";
            }

            echo "</tr>";
            echo "</form>";
        }

        ?>
    </table>
</body>
</html>