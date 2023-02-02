<?php
require_once("connection.php");
header("Content-type: text/html; charset=utf-8");
$t_id = $_POST["t_id"];
$t_pwd = $_POST["t_pwd"];

$link = connect();
$sql= "SELECT * FROM taker Where t_id = '$t_id' AND t_pwd ='$t_pwd'";
$result = execute_sql($link,"ubuntu",$sql);

if (mysqli_num_rows($result) ==0){
    mysqli_free_result($result);
    mysqli_close($link);

    echo "<script type='text/javascript'>;";
    echo "alert('帳號密碼錯誤,笨!');";
    echo "history.back();";
    echo "</script>";

}
else
{
    $id = mysqli_fetch_object($result) ->id;
    mysqli_close($link);
    setcookie("t_id",$t_id,time()+60*60*24*3);
    setcookie("t_pwd",$t_pwd,time()+60*60*24*3);
    header("location:take_main.php");

}
?>