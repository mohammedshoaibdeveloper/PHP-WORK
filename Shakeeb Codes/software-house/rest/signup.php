
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lOgin Form</title>
    <style>
        body{
            
             background: linear-gradient(to right, #bdc3c7, #2c3e50);
        }
        form{
            height: 300px;
            width: 450px;
            background-color: #152121;
            margin: 0px auto;
            border-radius: 25px;
            margin-top: 150px;
            
            
        }
        h1{
            
            color: white;
            text-align: center;
            font-family:sans-serif;
        
            
        
         
            
        }
        input{
            
            
            height: 33px;
            width: 400px;
            border-radius: 10px;
            border: none;
            position: absolute;
            margin-left: 20px;
            margin-top: 10px;
        }
        button{
            width: 120px;
            height: 40px;
            background-color: aqua;
            border-radius: 20px;
            border: none;
            position: absolute;
            margin-left: 140px;
        }
        div{
            width: 450px;
            background-color: white;
            height: 2px;
            position: absolute;
            margin-bottom: 8px;
        }
    </style>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        
        <h1>SIGNUP-FORM</h1>
        <div>
            
        </div>
        <input type="text" name="name" required Placeholder=" Enter user-namee"><br><br><br>
         <input type="password" name="password" required Placeholder=" Enter password"><br><br><br>
<!--             <input type="text" name="role" required Placeholder="Enter role"><br><br><br>-->
           <select  name="option"> <option>admin</option>
           <option>user</option>
           </select>
        <button type="submit" name="submit">submit</button>
          
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
include 'conn.php';

$name=$_POST['name'];
$password=$_POST['password'];
$role=$_POST['option'];    


$query="insert into users(username,password,role) values('$name','$password','$role')";

$sql=mysqli_query($conn,$query);
if($sql){
    header('location:login.php');
}
    else{
        echo'unsucessfully';
    }




}




?>

