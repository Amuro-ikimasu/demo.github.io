<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>確認任務</title>
  <script type="text/javascript">
    function check_data() {
      if (document.myForm.p_type.value.length == 0)
        alert("任務類型欄位不可以空白哦！");
      else if (document.myForm.p_location.value.length == 0)
        alert("地點欄位不可以空白哦！");
      else if (document.myForm.p_time.value.length == 0)
        alert("時間欄位不可以空白哦！");
      else if (document.myForm.p_price.value.length == 0)
        alert("價錢欄位不可以空白哦！");
      else
        myForm.submit(); 
      }
    function take(){
        $p_ordered=1
        $sql2="UPDATE post SET `p_ordered`= '$p_ordered' WHERE `p_id`='$p_id'"
        execute_sql($link,"ubuntu",$sql2);

        form_take.submit();
        document.location.href="addcar.php?buy=true.&p_id="
      }
    
  </script>    

</head>

<body>


  <table align="center">
    <tr>
      <td><a href="case.php">產品列表</a></td>
      <td><a href="shopping_car.php">檢視購物車</a></td>
      <td><a href="end.php">結帳</a></td>
    </tr>
  </table>



  <center><img src="fig1.jpg"></center>
  <?php
  require_once("connection.php");

  //取得要顯示之記錄
  $p_id = $_GET["p_id"];

  //建立資料連接
  $link = connect();

  //執行SQL查詢
  $sql = "SELECT * FROM `post` WHERE `p_id` = '$p_id'";
  $result = execute_sql($link, "ubuntu", $sql);

  echo "<table width='800' align='center' cellpadding='3'>";
  echo "<tr height='40'><td colspan='2' align='center'
            bgcolor='#663333'><font color='white'>
            <b>詳情</b></font></td></tr>";

  //顯示原任務的內容
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td bgcolor='#CCFFCC'>類型：" . $row["p_type"] . "　";
    echo "編號：" . $row["p_id"] . "　";
    echo "價錢：" . $row["p_price"] . "　";
    echo "時間：" . $row["p_time"] . "  ";
    echo "地點：" . $row["p_location"] . "</td></tr>";
    echo "<tr height='40'><td bgcolor='CCFFFF'>";
    echo "備註: " . $row["p_remark"] . "</td></tr>";
  }

    echo "<form method='POST' action='addcar.php?buy=true.&p_id=" . $row["p_id"] . "&p_name=" . urlencode($row["p_name"]) . "&p_price=" . $row["p_price"] . "&p_location=" . urlencode($row["p_location"]) . "' >";

    echo "<tr>";
    $quant = $row["p_quant"];

    if ($quant == 1) {
      // echo "<td>" . "<input type='submit' value='我要接單'>" . "</td>";
      // echo "<td>" . "<a href='shop.php'>". "我要接單" ."</a>". "</td>";
      echo "<td>" . "<input type='submit' value='我要接單'" . "</td>";

      //echo "<td>" . "<input type='submit' value='我要接單' onClick=location.href='shop.php?del=true>" . "</td>";
      
    } else {

      echo "<td>" . "<input type='submit' value='任務已被接走囉'  disabled='disabled' >" . "</td>";
      // echo "<td>" . "任務已被接走囉" . "</td>";

      echo "</tr>";
      echo "</form>";
    }

    
    echo "</table>";
  //釋放 $result 佔用的記憶體空間
  mysqli_free_result($result);
  ?>


</body>

</html>