<?php
$request_method=$_SERVER['REQUEST_METHOD']; //$_server global variable ha aur request_method iska parameter ha method hamara pass get post put delete ha 
$response=array();
switch($request_method){
        
    case "GET":
        response(doGet());//yaha func ka andar func call hoa ha phla doget wala func chala uska baad response ka function print karwae ga 
    break;    
       case "POST":
        response(doPost());
    break;    
        case "DELETE":
        response(doDelete());
    break;    
        case "PUT":
        response(doPut());
    break;    
         
}

function doGet(){
    if(@$_GET['id']){
        
        @$id=$_GET['id'];
        $where="where `id`=".$id;
    }
    else{
        $id=0;
        $where="";
    }
   //database lana ha database sa sb
    $dbconnect=mysqli_connect("localhost","root","","student");
    $query=mysqli_query($dbconnect,"select * from `employee`".$where);
    while($data=mysqli_fetch_assoc($query)){
$response[]=array("emp_id"=>$data['id'],"emp_name"=>$data['emp_name']);
    }
    return $response;
    //mysqli_fetch_assoc agr ya use karo tu ak hi record mila ga

}
function doPost(){
    
    if($_POST){
      $dbconnect=mysqli_connect("localhost","root","","student");
$query=mysqli_query($dbconnect,"INSERT INTO `employee`(`emp_name`,`emp_status`) VALUES ('".$_POST['emp_name']."','".$_POST['emp_status']."')");
    if($query==true){
        $response=array("message"=>"sucess");
    }
    else{
             $response=array("message"=>"faild");
    }                    
    }
  return $response;                      
}
function doDelete(){
      if($_GET['id']){
      $dbconnect=mysqli_connect("localhost","root","","student");
    $query=mysqli_query($dbconnect,"delete from `employee` where `id`='".$_GET['id']."'"); 
    if($query==true){
        $response=array("message"=>"delete sucess");
    }
    else{
             $response=array("message"=>"faild");
    }                    
    }
  return $response;                      
}

function doPut(){
    parse_str(file_get_contents('php://input'),$_PUT);
    //print_r($_PUT);
       if($_PUT){
      $dbconnect=mysqli_connect("localhost","root","","student");
    $query=mysqli_query($dbconnect,"update `employee` set `emp_name`='".$_PUT['emp_name']."',
    `emp_status`='".$_PUT['emp_status']."' where `id`='".($_POST['id']?$_POST['id']:$_GET['id'])."'");  
    if($query==true){
        $response=array("message"=>"update-sucess");
    }
    else{
             $response=array("message"=>"faild");
    }                    
    }
  return $response;                      
}

function response($response){
    //echo json_encode($response);
    echo json_encode(array("status"=>"200","data"=>$response));
}
?>