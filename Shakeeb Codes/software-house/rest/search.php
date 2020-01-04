<?php
include 'conn.php';
session_start();

if($_SESSION['id']==null){
    header('location:login.php');
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <form action="" method="post">
      <input type="text" name="search" placeholder="search"><br><br>   
    <input type="submit" name="submit" value="search"><br><br>
    
    <table border=1px>
        <tr>
           <?php
            if($_SESSION['role']=="admin"){
            echo '<td>ID</td>';
            echo '<td>NAME</td>';
            echo '<td>EMAIL</td>';
            echo '<td>PASSWORD</td>';
            echo '<td>NUMBER</td>';
            echo '<td>GENDER</td>';
            echo '<td>IMAGE</td>';
            
            echo '<td>REGISTER</td>';
          
            echo '<td>DELETE</td>';
            echo '<td>Update</td>';
            echo '<td>Insert</td>';
            }
               if($_SESSION['role']=="publisher"){
                     
            echo '<td>ID</td>';
            echo '<td>NAME</td>';
            echo '<td>EMAIL</td>';
            echo '<td>PASSWORD</td>';
            echo '<td>NUMBER</td>';
            echo '<td>GENDER</td>';
            echo '<td>IMAGE</td>';
            
           
         
          
            echo '<td>Insert</td>';
               }
                ?>
        </tr>
        
        <?php
        include 'conn.php';
        if(isset($_POST['submit'])){
          
            $search=$_POST['search'];
$query="select * from info where id LIKE '%$search%' or name LIKE '%$search%' or email LIKE '%$search%' or number LIKE '%$search%'";
        
        
        
//        if(isset($_POST['submit'])){
//    $ser=$_POST['search'];
// 
//    $sql="SELECT * FROM information where fullname LIKE '%$ser%' or id LIKE '%$ser%'";
}

        
        else{
        $query="select * from info";
        }
      
        $sql=mysqli_query($conn,$query);
        if(mysqli_num_rows($sql)>0){
            while($row=mysqli_fetch_array($sql)){
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $password=$row['password'];
                $number=$row['number'];
                $gender=$row['gender'];
                $image=$row['image'];
      
        
        ?>
        
        <tr>
            <td><?php echo $id;?></td>
            <td><?php echo $name;?></td>
            <td> <?php echo $email;?></td>
            <td> <?php echo $password;?></td>
        <td> <?php echo $number;?></td>
         
            <td> <?php echo $gender;?></td>
            <td>  <?php echo $image;?></td>
            <?php
            
        if($_SESSION['role']=="admin") {
          
               echo '<td><a href="account.php">Register</a></td>';
           
         
             echo  "<td><a href='delete.php?id=$row[id]'>Delete</a></td>";
             echo  "<td><a href='update.php?id=$row[id]'>Update</a></td>";
        
             echo '<td><a href="form.php">INSERT</a></td>';
        
            

            }
               
        if($_SESSION['role']=="publisher") {
          
            
             
            
        
          echo '<td><a href="form.php">INSERT</a></td>';
            
            
            }
                 
            
            ?>
        </tr>
        <?php
            }
        }
        ?>
    
    </table>
    </form>
    
   
<!--
     <input type="text" name="id" placeholder="Enter your id"><br><br>   
    <input type="submit" value="search" name="search"> 
   
-->
</body>
</html>