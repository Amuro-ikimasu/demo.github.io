<?php
  //清除 cookie 內容
  setcookie("c_id", "");
  setcookie("c_pwd", "");
	
  //將使用者導回主網頁
  header("location:index.html");
  exit();
?>