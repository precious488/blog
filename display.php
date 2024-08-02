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
          
            justify-content:center;
            align-items:center;
        }
        table{
    border: 1px solid black;
    border-collapse: collapse;
    width:100%;

   
    
}
td{
    border:1px solid black;
    text-align: center;

}
th{
    border:1px solid black;
}
.update{
    
    background-color:blue;
    
}
.update:hover{
    
    background-color:red;
    
}
.update a{
    text-decoration:none;
    color:black;
    font-weight:bold;
    border:none;
}
button{
    background-color:green;
    border:none;
}
button a{
    text-decoration:none;
    color:black;
    font-weight:bold;
    border:none;
}
button:hover{
    
    background-color:blue;
    
}
    </style>
</head>
<body>
        <button class="add"><a href="add.php">add post</a></button>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>content</th>
                    <th>operation</th>
                    

                </tr>
            </thead>
            <tbody>

            <?php
            $sql ="select * from post";
            $result =mysqli_query($conn, $sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                //foreach($results as $result){
                    $id=$row['id'];
                    $post_title = $row['title'];
                   // echo $result['title'];
                    $post_content = $row['content'];
                    echo ' <tr>
                    <th scope="row"> '.$id.'</th>
                    <td> ' .$post_title.' </td>
                    <td> <button><a href="view.php? viewid='.$id.'">view</a></button> </td>
                    <td>
                       <button class="update"><a href="update.php? updateid='.$id.'">update</a></button> 
                       <button onclick="myScript"><a href="delete.php? deleteid='.$id.'">delete</a></button>
                      
                    </td>
                </tr>';
               
                }
            }  
            ?>
          
        </table>

  

</body>
</html>
