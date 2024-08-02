<?php
include 'database.php';
$id=$_GET['updateid'];
$sql= "select * from post where id =$id";
$result=mysqli_query($conn, $sql);
$row= mysqli_fetch_assoc($result);
$title=$row['title'];
$content=$row['content']; 



if(isset($_POST['submit'])) {
    $title= $_POST['Title'];
    $content = $_POST['content'];
    //$row= mysqli_fetch_assoc($result);
    //$title=$row['title'];
    //$content=$row['content'];

   
  
     $sql ="update post set id=$id, title='$title', content='$content' where id=$id ";
     $result=mysqli_query($conn, $sql);
     
     if($result){
       header('location:display.php');
       //echo 'updated';
     }else{
        die(mysqli_error($conn));
     }
     

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>MY BLOG</h1>
    <div class="container">
        <P>New post</P>
        <form action="" method="post">
            <label for="title">Title:</label>
            <input type="text" name="Title" value="<?php echo $title?>"> <br><br><br><br>
            <label for="content"> content:</label>
            <textarea  type="tex" name="content" id="content" value="<?php echo $content?>"></textarea><br><br><br>
            <button type="submit" name="submit">update</button>

        </form>
    </div>
</body>
</html>