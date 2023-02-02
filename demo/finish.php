<?php

require_once("connection.php");

$t_id = $_COOKIE["t_id"];
$c_id = $_GET["c_id"];
$timing = date("Y-m-d H:i:s");

//若購物車是空的，就顯示尚未選購產品
if (empty($_COOKIE["p_id_list"])) {
  echo "<script type='text/javascript'>";
  echo "alert('您尚未加入任何任務');";
  echo "history.back();";
  echo "</script>";
}


//建立資料連接
$link = connect();

//執行SQL查詢
$sql =" INSERT INTO order_list(c_id, t_id, o_date) VALUES ('$c_id','$t_id','$timing')";
        $result = execute_sql($link,"ubuntu",$sql);
// $sql = "SELECT * FROM `post` ORDER BY `p_id` DESC";
$result = execute_sql($link, "ubuntu", $sql);

?>


