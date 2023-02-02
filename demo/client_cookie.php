<?php
require_once ("connection.php");

if(isset($_COOKIE["c_id"])){
    $link=connect();
    $cookie_cid=$_COOKIE["c_id"];
    $cookie_cpwd=$_COOKIE["c_pwd"];
    $sql="select * from client where c_id='$cookie_cid' and c_pwd='$cookie_cpwd'";
    $row=execute_sql($link,"ubuntu",$sql);
    if(mysqli_num_rows($row)==1){
        header("location:client_main.php");
    }
    else{
        header("location:client_member_temp.php");
    }

}
else{
    header("Location:client_member_temp.php");
}

?>