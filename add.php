<?php
include 'database.php';
if(isset($_POST['submit'])) {
    //print_r ($_POST);

    $title= $_POST['Title'];
    $content = $_POST['content'];


     $sql ="insert into post (title, content)
     values('$title', '$content')";
     $result=mysqli_query($conn, $sql);
     
     if($result){
        //echo 'inserted';
        header('location:display.php');
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
            <input type="text" name="Title" > <br><br><br><br>
            <label for="content"> content:</label>
            <textarea name="content" id="content"></textarea><br><br><br>
            <button type="submit" name="submit">submit</button>

        </form>
    </div>
</body>
</html>