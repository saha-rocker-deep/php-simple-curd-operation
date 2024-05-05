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
$name=$data['name'];
$age=$data['age'];
$city=$data['city'];
$sql="UPDATE student SET  name='$name',age='$age',city='$city' WHERE id='$id'";
if(mysqli_query($conn,$sql))
{
     echo "sql right";
}
else{
echo "sql not right";
}

  echo $name.$age.$city.$id;