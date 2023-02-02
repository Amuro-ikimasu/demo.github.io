<?php
  //清除 cookie 內容
  setcookie("t_id", "");
  setcookie("t_pwd", "");
	
  //將使用者導回主網頁
  header("location:index.html");
  exit();
?>