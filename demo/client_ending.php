<?php

$c_id = $_COOKIE["c_id"];
$p_name = $_POST["p_name"];
$p_type = $_POST["p_type"]; 
$p_location = $_POST["p_location"]; 
$p_price = $_POST["p_price"]; 
$p_remark = $_POST["p_remark"]; 
$p_time = $_POST["p_time"];
$timing = date("Y-m-d H:i:s");
$p_id = $_POST["p_id"];

//若購物車是空的，就顯示尚未選購產品
if (empty($_COOKIE["p_id_list"])) {
  echo "<script type='text/javascript'>";
  echo "alert('您尚未加入任何任務');";
  echo "history.back();";
  echo "</script>";
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

<script>
  function end() {

    var result=confirm("確定接單?");

    if(result==true){

      alert("接單成功!");
      submit();

    }else{
      alert("取消接單");
    }
  }
</script>
</head>

<body>

  <table align="center">
    <tr>
      <td><a href="case_list.php">產品列表</a></td>
      <td><a href="shopping_car.php">檢視購物車</a></td>
      <td><a href="end.php">結帳</a></td>
    </tr>
  </table>

  <table align="center" margin=0>
    <tr>
      <td>
        <h3 align="center">注意事項</h3>
        <ol type="1">
          <li>
            <h1>確認資料</h1>
          </li>
          <li>
            <h2>確認任務內容是否正確後,再按下確認鍵</h2>
          </li>
          <li>
            <h1>付錢</h1>
          </li>
        </ol>
      </td>
    </tr>
  </table>


  <hr>
  <table border="1" rules="cols" align="center" cellpadding="5">
    <tr>
      <th colspan="4" align="Center">任務資料</th>
    </tr>
    <tr ">
      <td colspan=" 4">
      接案人：<?php echo $_COOKIE["name"] ?>
      </td>
    </tr>
    <tr>
      <td colspan="4">
      電話：
      </td>
    </tr>
    <tr>
      <td colspan="4">地址：

      </td>
    </tr>
    <tr>
      <td colspan="4" align="center">訂單細目</td>
    </tr>
    <tr align="center">
      <td>任務編號</td>
      <td>名稱</td>
      <td>價格</td>
      <td>地點</td>

    </tr>


    <?php
    
    //取得購物車資料
    $p_id_array = explode(",", $_COOKIE["p_id_list"]);
    $p_name_array = explode(",", $_COOKIE["p_name_list"]);
    $p_price_array = explode(",", $_COOKIE["p_price_list"]);
    $p_location_array = explode(",", $_COOKIE["p_location_list"]);


    //顯示購物車內容
    // $total = 0;
    // for ($i = 0; $i < count($p_id_array); $i++) {

      //計算總計
      // $total += $p_price_array[$i];

      //顯示各欄位資料
      echo "<tr >";
      echo "<td align='center' >" . $p_id_array[$i] . "</td>";
      echo "<td align='center'>$" . $p_name_array[$i] . "</td>";
      echo "<td align='center'>" . $p_price_array[$i] . "</td>";
      echo "<td align='center'>" . $p_location_array[$i] . "</td>";
      echo "</tr>";
    // }
    // echo "<tr align='right' >";
    // echo "<td colspan='4'>總金額 = " . $total . "</td>";
    // echo "</tr>";
    ?>
  </table>

  <table align="center">
    <tr >
      <td>
        <input type="button" onclick="end()" value="確定要買?">
      </td>
    </tr>

  </table>
</body>

</html>