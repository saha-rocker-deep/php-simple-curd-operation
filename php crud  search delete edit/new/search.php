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
//echo $_GET['search'];
$p= $_GET['search'];

$sql="SELECT * FROM Student WHERE name LIKE '%$p%' OR  city LIKE  '%$p%' OR id LIKE '%$p%' OR age LIKE '%$p%'";
if(mysqli_query($conn,$sql))
{
     // echo "sql right";
      $result=mysqli_query($conn,$sql);

    $response=array();
    while($row=mysqli_fetch_all($result,MYSQLI_ASSOC)){

        $response[]=$row;
    
    
  
}
echo json_encode($response);


 
 

}
else {
      die("sql query failed");
}




?>