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
      <td><a href="case_list.php">任務列表</a></td>
      <td><a href="shopping_car.php">檢視購物車</a></td>
      <td><a href="client_ending.php">結帳</a></td>
    </tr>
  </table>

  <?php

  include_once("connection.php");
  $link = connect();


  //取得表單資料
  $p_id = $_GET["p_id"];
  $p_name = $_GET["p_name"];
  $p_price = $_GET["p_price"];
  $p_location = $_GET["p_location"];


  //若購物車沒有任何項目，則直接加入產品資料
  if (empty($_COOKIE["p_id_list"])) {
    setcookie("p_id_list", $p_id);
    setcookie("p_name_list", $p_name);
    setcookie("p_price_list", $p_price);
    setcookie("p_location_list", $p_location);
  } else {

    //取得購物車資料 這個語法是會把每個存到的cookie用,隔開 存進去
    $p_id_array = explode(",", $_COOKIE["p_id_list"]);
    $p_name_array = explode(",", $_COOKIE["p_name_list"]);
    $p_price_array = explode(",", $_COOKIE["p_price_list"]);
    $p_location_array = explode(",", $_COOKIE["p_location_list"]);
  }

  //如果選擇的物品沒有在購物車中，則將物品資料加入購物車				
  $p_id_array[] = $p_id;
  $p_name_array[] = $p_name;
  $p_price_array[] = $p_price;
  $p_location_array[] = $p_location;

  //儲存購物車資料		
  setcookie("p_id_list", implode(",", $p_id_array));
  setcookie("p_name_list", implode(",", $p_name_array));
  setcookie("p_price_list", implode(",", $p_price_array));
  setcookie("p_location_list", implode(",", $p_location_array));

  //判斷有接收到點下按鈕 代表賣出 
  if (isset($_GET['buy'])) {
    $sql1 = "UPDATE `post` SET  `p_quant`=0  WHERE `p_id`=$p_id";
    execute_sql($link, "ubuntu", $sql1);
  }

  ?>

  <p align="center">放進去了笑死</p>

</body>

</html>