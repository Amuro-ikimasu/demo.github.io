<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
<table align="center">
        <tr>
            <td><a href="case_list.php">任務列表</a></td>
            <td><a href="shopping_car.php">檢視購物車</a></td>
            <td><a href="take_ending.php">結帳</a></td>
        </tr>
    </table>

    <table border="1" align="center">
        <tr height="30" align="center">
            <td>文章編號</td>
            <td>標題</td>
            <td>價格</td>
            <td>小計</td>
        </tr>

        <?php

        // require_once("connection.php"); 
        // $link = connect();
        // $sql = "SELECT ";
        // $result = execute_sql($link, "ubuntu", $sql);
        
        $t_id = $_COOKIE["t_id"];
        

        //若購物車是空的，就顯示 "目前購物車內沒有任何產品及數量" 訊息
        if (empty($_COOKIE["t_id_list"])) {
            echo "<tr align='center'>";
            echo "<td colspan='6'>目前購物車內沒有任何產品及數量！</td>";
            echo "</tr>";
        } else {

            //取得購物車資料
            $p_id_array = explode(",", $_COOKIE["p_id_list"]);
            $p_name_array = explode(",", $_COOKIE["p_name_list"]);
            $p_price_array = explode(",", $_COOKIE["p_price_list"]);

            //顯示購物車內容
            $total = 0;
            for ($i = 0; $i < count($p_id_array); $i++) {

                //計算總計
                $total += $p_price_array[$i];

                //顯示各欄位資料
                echo "<form>";
                echo "<tr border='1'>";
                echo "<td align='center'>" . $p_id_array[$i] . "</td>";
                echo "<td align='center'>" . $p_name_array[$i] . "</td>";
                echo "<td align='center'>$" . $p_price_array[$i] . "</td>";
                echo "</tr>";
                echo "</form>";
            }


            echo "<tr align='right' border='1' >";
            echo "<td colspan='6'>總金額 = " . $total . "</td>";
            echo "</tr>";
            echo "<tr align='center'>";

            /*echo "<td colspan='6'>" . "<br><input type='button' value='退回所有產品'onClick=\"javascript:window.open('del.php','_self')\">";
            上面是本來的用法 還會讀到外面的某一個檔案執行php動作 我換一個方式可以在我們網頁執行 
            邏輯就是 按下按鈕的時候他會執行在網址後面加上del=true
            這樣就可以用get去確認有沒有得到值
            得到的話就執行下面的函數 沒有得到的話就不管
            購物車歸零的邏輯也是一樣
            */

            echo "<td colspan='6'>" . "<input type='button' value='不想買了' onClick=location.href='case_list.php?del=true'>";
            echo "</td>";
            echo "<td colspan='6>" . "<input type='button' value = '確認接單' onClick=location.href='take_ending.php?confirm=true'>";
            echo "</tr>";
        }

        if (isset($_GET['del'])) {
            del();
            header("location:shop.php");
        }

        function  del()
        {
            $link = connect();

            setcookie("p_id_list", "");
            setcookie("p_name_list", "");
            setcookie("p_price_list", "");

            $sql = "UPDATE `post` SET `p_quant`=1  WHERE 1";
            execute_sql($link, "ubuntu", $sql);
        }

        //原本想在這個頁面就結帳寫入DB
        // function confirm(){ 
        //     $link = connect();
        //     $sql2 = "SELECT `post`";
        //     $sql2 = "INSERT INTO `order_list`(`c_id`, `t_id`, `o_date`) 
        //     VALUES('$c_id','$t_id',now());
        //     UPDATE `post` SET `p_ordered`=1  WHERE 1";

        //     execute_sql($link, "ubuntu", $sql);
        // }

        ?>
    </table>
</body>

</html>