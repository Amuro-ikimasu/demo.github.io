<?php
require_once ("connection.php");

if(isset($_COOKIE["t_id"])){
    $link=connect();
    $cookie_tid=$_COOKIE["t_id"];
    $cookie_tpwd=$_COOKIE["t_pwd"];
    $sql="select * from taker where t_id='$cookie_tid' AND t_pwd='$cookie_tpwd'";
    $row = execute_sql($link,"ubuntu",$sql);
    
    if(mysqli_num_rows($row)==1){
        header("location:take_main.php");
    }
    else{
        header("location:take_me_temp.php");
    }

}
else{
    header("Location:take_me_temp.php");
}

?>