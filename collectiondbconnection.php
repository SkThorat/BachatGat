<?php
include 'connection.php';
if(isset($_POST['submit'])){
  $collect_date=$_POST['collect_date'];
  $collect_saving_amt=$_POST['saving_amt'];
  $collect_loan_amt=$_POST['loan_amt'];
  $collect_interest_amt=$_POST['interest_amt'];
  $Loan_acc_no=$_POST
  //$fine_amt=$_POST['fine_amt'];
$temp_id="";
$temp_name="";
$temp_mb="";
$temp_Aa="";
  $selected = $_POST['account_option'];  
                          $sql1="SELECT id,Acc_hol_name,Mb_number,Aa_number FROM add_member WHERE id= '".$selected."'";
                          $result1=mysqli_query($conn,$sql1);    
                          while($data=mysqli_fetch_array($result1))
                                {
                                  $temp_id=$data['id'];
                    			  $temp_name=$data['Acc_hol_name'];
                    			  $temp_mb=$data['Mb_number'];
                    			  $temp_Aa=$data['Aa_number'];
                                }
 
$sql="INSERT INTO collect_money(id,acc_hol_name,mb_number,Aa_number,collection_date,collect_saving_amt,collect_loan_amt,collect_interest_amt) VALUES ('$temp_id','$temp_name','$temp_mb','$temp_Aa','$collect_date','$collect_saving_amt','$collect_loan_amt','$collect_interest_amt')";
  //echo 'record inserted';
  if(mysqli_query($conn,$sql))
  {

  echo "<script>alert('Record Inserted');</script>";
  echo '<script>
      window.location="deposit.php";
      </script>';
    exit();

}
else{
  echo"Error".$sql."".mysqli_execute($conn);
  
}
}
mysqli_close($conn);  // close connection 


?>