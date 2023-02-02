<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>任務留言板</title>
    <script type="text/javascript">
      function check_data()
      {
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
      function check_user(){
        
      }
    </script>			
  </head>
  <body>
    <center><img src="fig1.jpg"></center>
    <?php	
      require_once("connection.php");
			
      //取得要顯示之記錄
      $p_id = $_GET["p_id"];
      $o_id = $_GET["o_id"];
      $author = $_COOKIE["c_id"] || $_COOKIE["t_id"];
				
      //建立資料連接
      $link = connect();
			
      //執行SQL查詢
      $sql = "SELECT * FROM `order_list` WHERE `o_id` = '$o_id'";
      $result = execute_sql($link, "ubuntu", $sql);
				
      echo "<table width='800' align='center' cellpadding='3'>";
      echo "<tr height='40'><td colspan='2' align='center'
            bgcolor='#663333'><font color='white'>
            <b>討論主題</b></font></td></tr>";	 
						  
      //顯示原討論主題的內容
      while ($row = mysqli_fetch_assoc($result))
      {
        echo "<tr>";
        echo "<td bgcolor='#CCFFCC'>編號：" . $row["o_id"] . "　";
        echo "案主：" . $row["p_id"] . "　";		
        echo "<tr height='40'><td bgcolor='CCFFFF'>";
        echo "</td></tr>";
      }
			
      echo "</table>";		
			
      //釋放 $result 佔用的記憶體空間
      mysqli_free_result($result);

      //執行 SQL 命令
      $sql = "SELECT * FROM `order_list` WHERE o_id = $o_id";
      $result = execute_sql($link, "ubuntu", $sql);
      
    
      if (mysqli_num_rows($result) <> 0)
      {
        echo "<hr>";
        echo "<table width='800' align='center' cellpadding='3'>";
        echo "<tr height='40'><td colspan='2' align='center'
              bgcolor='#99CCFF'><font color='#FF3366'>
              <b>回覆案主</b></font></td></tr>";
							 
        //顯示回覆主題的內容
        while ($row = mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td bgcolor='#FFFF99'>名稱：" . $row["o_id"] . "　";
          echo "案主：" . $row["c_id"] . "　";
          echo "時間：" . $row["p_time"] . "</td></tr>";				
          echo "<tr><td bgcolor='CCFFFF'>";
          echo "接案時間：" . $row["o_date"] . "　";
          echo $row["p_remark"] . "</td></tr>";
        }
				
        echo "</table>";			
      }

      // 釋放記憶體空間
      mysqli_free_result($result);
      mysqli_close($link);
    ?>
 <hr>
 <form name="myForm" method="post" action="post_reply.php">
      <input type="hidden" name="reply_id" value="<?php echo $reply_id ?>">
      <table border="0" width="800" align="center" cellspacing="0">
        <tr bgcolor="#0084CA" align="center">
          <td colspan="2"><font color="white">請在此輸入您的回覆</font></td>
        </tr>
        <tr bgcolor="#D9F2FF">
          <td width="15%"><?php echo $author?></td>
          <td width="85%"><input name="author" type="text" size="50"></td>
        </tr>
        <tr bgcolor="#D9F2FF">
          <td width="15%">內容</td>
          <td width="85%"><textarea name="content" cols="50" rows="5"></textarea></td>
        </tr>
        <tr>
          <td colspan="2" height="40" align="center">
            <input type="submit" value="回覆討論" onClick="check_data()">   
            <input type="reset" value="重新輸入">
          </td>
        </tr>  
      </table>                   
    </form>
  </body>                                                                                 
</html>