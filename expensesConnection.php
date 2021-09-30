<?php

include 'connection.php';
if(isset($_POST['submit_all'])){
  $ex_date=$_POST['ex_date'];
  $ex_type=$_POST['ex_type'];
  $ex_amt=$_POST['ex_amt']; 
  $ex_description=$_POST['ex_description']; 
$sql="INSERT INTO expenses(ex_date,item,cost,Description) VALUES ('$ex_date','$ex_type','$ex_amt','$ex_description')";
 $query=mysqli_query($conn,$sql) or die(mysqli_execute($conn));
       if($query==1){
        echo "<script>alert('Record Inserted');</script>";
  echo '<script>
      window.location="expenses.php";
      </script>';
       exit();
      } 
 }
 else{
  echo "<script>alert('Record Not Inserted');</script>";
 }
//}
mysqli_close($conn);  // close connection 


?>