<?php
include 'database.php';
if(isset($_GET['deleteid'])){
    $id =$_GET['deleteid'];
    $sql = "delete from post where id=$id";
    $result =mysqli_query($conn, $sql);
    
    if($result){
       // echo 'deleted';
       header('location:display.php');
        
    }else{
        die(mysqli_error($conn));
    }
}
?>
