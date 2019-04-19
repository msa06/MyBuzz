<?php 
include("config.php"); 
$id = $_GET['id']; 
$sql = "DELETE FROM movie WHERE id=$id"; 
$result = mysqli_query($conn, $sql);
if(!$result){
  echo "Error Deleting".mysqli_error($conn);
} 
header("Location:index.php"); 
?> 
