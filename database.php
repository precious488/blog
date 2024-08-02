<?php
$db_sever = "localhost";
$db_user="root";
$db_password="";
$db_name ="blogdb";
$conn = new mysqli($db_sever, $db_user, $db_password, $db_name );
if($conn){
    //echo 'conected';
}
//mysqli_close($conn);
?>