 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert</title>
    <style>
        body{
           background: linear-gradient(to right, #000000, #434343);
            background-attachment: fixed;
            background-repeat: no-repeat;
            
            }
       form{
            width:500px;
            border: 2px solid #c9eb09;
            margin:0 auto;
            margin-top:120px;
    
    }
        input{
            
            margin: 5px;
        }
        input[type=text], input[type=email], input[type=age], input[type=contact]{
            width: 300px;
            height: 25px;
            border: none;
            border-bottom: 3px dashed:#d80505;
            border-radius: 20px;
            text-align: justify;
            text-decoration-color: beige;

        }
        input[type=submit]{
            width: 240px;
            height: 30px;
            border-radius: 80px;
            background: #036ae3;
            border: none;
        }
        input[type=submit]:hover{
            background: #c903e3;
            transition: 1s ease-in-out;
            cursor: pointer;
            
        }
         [type=reset]{
            width: 120px;
            height: 30px;
            border-radius: 80px;
            background: #036ae3;
            border: none;
        }
        [type=reset]:hover{
            background: #c903e3;
            transition: 1s ease-in-out;
            cursor: pointer;
            
        }
        header{
            color: aliceblue;
            text-align: center;
            font-size: 30px;
            text-shadow: 0 0 7px #f5f5f5;
            text-transform: uppercase;
            
        
        }
        select{
            width: 300px;
            height: 25px;
            border: none;
            border-bottom: 3px dashed:#d80505;
            border-radius: 20px;
            text-align: justify;
            text-decoration-color: beige;

        }
    
    
 </style>
  
</head>

<body>

 <header>
     <h1>INSERTING DATA </h1>
     
 </header>    
     
     
 
  
   <form action="" method="post" enctype="multipart/form-data">
       
       <input type="text" name="Name" placeholder="Enter Full name" required><br>
       <input type="email" name="email" placeholder="Enter Email" required><br>
       <input type="age" name="password" placeholder="Enter password" required><br>
       <input type="contact" name="contact" placeholder="Enter Contact" required><br>
       
       
         <select name="gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
           
       </select><br><br>
<!--
        <select name="role">
          <option value="admin">admin</option>
          <option value="publisher">publisher</option>
           
-->
       <br>
       <input type="file" name="image" required> <br>
       <input type="submit" name="submit" value="login">
       
  </form>
</body>
</html>

<?php
include 'conn.php';
session_start();
if(isset($_POST['submit'])){
     $fullname=$_POST['Name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
    $gender=$_POST['gender'];
  $contact=$_POST['contact'];
if($_SESSION['role']=='admin'){    
 $role='admin';
}
elseif($_SESSION['role']=='publisher'){
    $role='publisher';
}    
$img=$_FILES['image']['name'];
$img_type=$_FILES['image']['type'];
$img_name=$_FILES['image']['tmp_name'];
if($img_type=="image/JPEG"|| $img_type=="image/PNG"){
    move_uploaded_file($img_name,"image/$img");
}
 $sql="INSERT INTO info(name,email,password,number,image,gender,role) VALUES('$fullname','$email','$password','$contact','$img','$gender','$role')";
if(mysqli_query($conn,$sql)){
header('location:show.php');


}
    
    
    
}

?>
 
