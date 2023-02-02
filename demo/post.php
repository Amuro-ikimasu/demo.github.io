<?php
  require_once("connection.php");
  
  $c_id = $_COOKIE["c_id"];
  $p_name = $_POST["p_name"];
  $p_type = $_POST["p_type"]; 
  $p_location = $_POST["p_location"]; 
  $p_price = $_POST["p_price"]; 
  $p_remark = $_POST["p_remark"]; 
  $p_time = $_POST["p_time"];
  $timing = date("Y-m-d H:i:s");


  //發派任務通知 
  // function function_alert($message) { 
  //   // Display the alert box  
  //   echo "<script>alert('$message');</script>"; 
  // } 

  //建立資料連接
  $link = connect();
			
  //執行SQL查詢
  // if (strtotime(now())>strtotime($p_time)){
    $sql = "INSERT INTO `post`(`c_id`, `p_name`, `p_type`, `p_location`, `p_price`, `p_remark`, `p_time`, `p_quant`) 
          VALUES('$c_id','$p_name','$p_type','$p_location','$p_price','$p_remark','$p_time','1')";

  $result = execute_sql($link, "ubuntu", $sql);

  // }else{
  //   echo "錯誤的任務日期";
  // }
  

  //關閉資料連接
  mysqli_close($link);
  
  //將網頁重新導向
  // function_alert("已發派任務囉!");
  header("location:case_list_history.php");
  exit();
?>