<?php
include'conn.php';
$id=$_GET['id'];
$sql="SELECT * FROM info where id=$id";
$query=mysqli_query($conn,$sql);
if(mysqli_num_rows($query)>0){
    while($row=mysqli_fetch_assoc($query)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $password=$row['password'];
        $number=$row['number'];
        
        $image=$row['image'];
        $gender=$row['gender'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Action</title>
    <style>
        body{
            background: radial-gradient(#fc0303,#e201d0);
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        form{
            width:500px;
            border:2px solid #c9eb09;
            margin: 0 auto;
            margin-top: 150px;
            
        }
        
        input{
            margin: 5px;
           
        }
        input[type=text] , input[type=email] , input[type=password]{
          width:300px;
          height: 25px;
            border:none;
            border-bottom: 3px dashed #d80505;
            border-radius: 20px;
    
          
        } 
        input[type=submit]{
         width:120px;
         height: 30px;
         border-radius: 80px;
         background: #036ae3;
            border:none;
        }
        input[type=submit]:hover{
            background: #c903e3;
            transition: 1s ease-in-out;
            cursor:pointer;
        }
    </style>
</head>
<body>

    <form action="update.php?id=<?php echo $id ;?>" method="post" enctype="multipart/form-data">
      <input type="text" name="fullname" placeholder="Enter Full Name" value="<?php echo $name; ?>" required><br>
        <input type="email" name="email" placeholder="Enter Email" value="<?php echo $email; ?>"required><br>
      <input type="password" name="password" placeholder="Enter password" value="<?php echo $password; ?>" required><br>
      <input type="text" name="number" placeholder="Enter Contact" value="<?php echo $number; ?>" required><br>
       <select name="gender">
         <?php 
          /* if($gender=="Male"){
           ?>
           <option value="Male">Male</option>
           <option value="Female">Female</option>
     
       <?php }
          else{ ?>
           <option value="Female">Female</option>
            <option value="Male">Male</option>
           <?php } */ 
           if($gender=="Male"){
               echo '<option value="Male">Male</option>
           <option value="Female">Female</option>';
           }
           else{
               echo '<option value="Female">Female</option> <option value="Male">Male</option>
           ';
           }                   
           
           ?>
           
           
           
        
           
  </select><br>
       <input type="file" name="image" >
     <input type="submit" name="submit" value="Insert">
  <img src="image/<?php echo $image; ?>" width="100px" height="100px">
    </form>
   
</body>

</html> 
<?php
if(isset($_POST['submit'])){
include'conn.php';
  $id=$_GET['id'];
     $name=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $contact=$_POST['number'];
    $gender=$_POST['gender'];
//print_r($_FILES['image']);
//$sql;
$img = $_FILES['image']['name'];
$img_type = $_FILES['image']['type'];
$img_name = $_FILES['image']['tmp_name'];
if($img_type=="image/jpeg"|| $img_type=="image/png"){
    move_uploaded_file($img_name,"image/$img");
}
    if($img==null){
        $sql="UPDATE info set name='$name', email='$email', password='$password', number='$contact', gender='$gender' where id=$id";
    }
    else{
        $sql="UPDATE info set name='$name', email='$email', number='$contact', gender='$gender', image='$img' where id=$id";
    }
//echo $sql;
    
    if(mysqli_query($conn,$sql)){
        header('location:show.php');
    }
  
   
}


?>