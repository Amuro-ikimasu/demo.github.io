<?php
require_once("connection.php");
header("Content-type: text/html; charset=utf-8");
$c_id = $_POST["c_id"];
$c_pwd = $_POST["c_pwd"];

$link = connect();
$sql= "SELECT * FROM client Where c_id = '$c_id' AND c_pwd ='$c_pwd'";
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
    setcookie("c_id",$c_id,time()+60*60*24*3);
    setcookie("c_pwd",$c_pwd,time()+60*60*24*3);
    header("location:client_main.php");

}
?>