<?php

if(isset($_POST['upload'])){
    
    $file=$_FILES['file'];
    print_r($file);
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        
        <label>uploading file</label>
        <p><input type=file name="file"/></p>
          <p><input type=submit name="upload" value="upload image"></p>
        
        
        
    </form>
</body>
</html>