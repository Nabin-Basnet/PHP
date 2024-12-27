<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="">
        <input type="submit" >
    </form>
    
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_FILES['image'])){
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
    
         $file_name=$_FILES['image']['name'];
         $file_temp=$_FILES['image']['tmp_name'];
        
        move_uploaded_file($file_temp,"uploading-image/".$file_name);
        echo "file uploaded sucessfulluy";
        echo"<img src='uploading-image/$file_name' width='300' height='200'>";
    
    
    }
    else{
        echo "error";
    }
}
?>