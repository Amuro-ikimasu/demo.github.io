<?php
  require_once("connection.php");
  $current_time = date("Y-m-d H:i:s");
  $content = $_POST["content"]; 
  $reply_id = $_POST["reply_id"];

  $author = $_COOKIE["p_id"];
  $author = $_COOKIE["t_id"];

  //建立資料連接
  $link = connect();
	
  //執行SQL查詢
  $sql = "INSERT INTO reply_message(author, content, date, reply_id) 
          VALUES($author, $content, $location, $current_time, $reply_id)";

  $result = execute_sql($link, "ubuntu", $sql);


  //關閉資料連接
  mysqli_close($link);
  
  //將網頁重新導向
  header("location:show_news.php?id=" . $o_id);
  exit();
?>