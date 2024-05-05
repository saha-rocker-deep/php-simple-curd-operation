<?php

header('Acess-control-Allow-origin:*');
$conn=mysqli_connect("localhost","deep","0234aniket","student");

 if($conn){
     // echo "ok";
 }
  else{
  //  echo "not ok";
  }

$data=json_decode(file_get_contents("php://input"),true);
$id=$data['id'];
 


 $sql="DELETE FROM student  WHERE id='$id'";
if(mysqli_query($conn,$sql))
{
     echo "SUCCESSFULLY DELETED";
}
else{
echo "NOT SUCESSFULLY DELETED";
}
?>