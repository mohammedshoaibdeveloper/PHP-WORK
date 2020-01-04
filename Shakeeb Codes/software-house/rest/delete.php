<?php
$id=$_GET['id'];
$host="localhost";
$user="root";
$password="";
$dbname="test";
$conn=mysqli_connect($host,$user,$password,$dbname);
$sql="delete from info where id=$id";

$del = mysqli_query($conn,$sql);
if($del){
    header('location:show.php');
}

?>

