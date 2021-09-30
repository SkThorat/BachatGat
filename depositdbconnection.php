<?php
session_start();
$Mem_temp_id=$_SESSION["Mem_temp_id"];
$Mem_temp_name=$_SESSION["Mem_temp_name"];
$Mem_temp_mb=$_SESSION["Mem_temp_mb"];
$Mem_temp_aa=$_SESSION["Mem_temp_aa"];
include 'connection.php';
//include 'deposit.php';
//print_r($Mem_temp_name);
if(isset($_POST['submit_all'])){
  $Dep_date=$_POST['Dep_date'];
  $monthly_amt=$_POST['montly_amt'];                       
$sql="INSERT INTO deposit_money(id,acc_hol_name,mb_number,Aa_number,Acc_type,deposit_date,saving_amt) VALUES ('$Mem_temp_id','$Mem_temp_name','$Mem_temp_mb','$Mem_temp_aa','$temp_acc_type','$Dep_date','$monthly_amt')";
 $query=mysqli_query($conn,$sql) or die(mysqli_execute($conn));
       if($query==1){
        echo "<script>alert('Record Inserted');</script>";
  echo '<script>
      window.location="deposit.php";
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