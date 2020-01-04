  <?php
include 'conn.php';
session_start();

if($_SESSION['id']==null){
    header('location:login.php');
}if($_SESSION['role']!='admin'){
    
?>
<style>
    #only{display: none;}
</style>
<?php           
    
    
}

?>

    
      
<style>
   
table {
  border-collapse: collapse;
  width: 100%;
}

tr, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
</style>
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
       <table>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Number</td>
            <td>Image</td>
            <td><p id="only">Delete</p></td>
            <td>INSERT</td>
            <td><p id="only">update</p></td>
         
            
            
            
            </tr>
            
            
       

 <?php
include'conn.php';
if(isset($_POST['submit'])){
          
    $search=$_POST['search'];
$query="select * from info where id LIKE '%$search%' or name LIKE '%$search%' or email LIKE '%$search%' or number LIKE '%$search%'";
        

}
elseif($_SESSION['role']!='admin'){
    $query="select * from info where role='publisher'";
}
else{
    $query="select * from info where role='admin'";
}
//elif($_SESSION['role']!='admin'){
//    $query="select * from info where role='publisher'";
//}           
           
           
            
$sql=mysqli_query($conn,$query);
if(mysqli_num_rows($sql)>0){
    while($row=mysqli_fetch_array($sql)){
        $id=$row['id'];
         $name=$row['name'];
         $email=$row['email'];
         $password=$row['password'];
         $number=$row['number'];
        $image=$row['image'];
  
    

?>





    
     
        <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $name ?></td>
         <td><?php echo $email ?></td>
         <td><?php echo $password ?></td>
        <td><?php  echo $number ?></td>
     <td><img src="image/<?php echo $image ?>" height="100" width="100"></td>
    <td><a id="only" href="delete.php?id=<?php echo $id; ?>">Delete</a></td>
        
        
         <td><a href="insert.php?id=<?php echo $id; ?>">Insert</a></td>
         <td><a id="only" href="update.php?id=<?php echo $id; ?>">update</a></td>
        </tr>

 
 

 

<?php
    
    }}?>


</table>
    </form>
    </body>
</html>