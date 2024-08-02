<?php
include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--<link rel="stylesheet" href="display.css">-->
    <style>
body{
    display: flex;
    flex-direction:column;
    justify-content: center;
    align-items: center;
   

}
button{
    background-color:green;
    border:none;
    height:30px;
    width: 75px;
    border-radius:10px;
}
    </style>
</head>
<body>
     

            <?php
            if(isset($_GET['viewid'])){
                $id =$_GET['viewid'];
            $sql ="select * from post where id=$id";
            $result =mysqli_query($conn, $sql);
            if($result){
                ($row=mysqli_fetch_assoc($result));
      
            
                    $id=$row['id'];
                    $post_title = $row['title'];
                    $post_content = $row['content'];
                    
                   echo $post_title ;
                   echo "<br>";
                   echo $post_content;
              
               
                }
            }
            

   
            ?>
          
          <button><a href="display.php">back</a></button>
     </div>
  

</body>
</html>
