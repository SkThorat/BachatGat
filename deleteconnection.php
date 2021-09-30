<?php
include 'connection.php';
if(isset($_POST['submit'])){

$sql="DELETE * FROM Add_member";
 if(mysqli_query($conn,$sql))
  {
  	
  echo "<script>alert('Record Deleted');</script>";
  echo '<script>
      window.location="Add_member.php";
      </script>';

    exit();

}
else{
  echo"Error".$sql."".mysqli_execute($conn);
  
}
}