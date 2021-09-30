<html>
  <head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
          #myDIV {
                   width: 100%;
                   padding: 50px 0;
                   text-align: center;
                   background-color: lightblue;
                   margin-top: 20px;
                  }
    </style>
  </head>
<body>
	<div class="topnav">
  <a class="active" href="Add_memebr.php">ADD MEMBER</a>
  <a href="deposit.php">DEPOSIT(JAMA)</a>
  
  <a href="collection.php">COLLECTION(YENE)</a>
  <a href="delete_member.php">DELETE MEMBER</a>
  <a href="report.php">REPORTS</a>
  <a href="conatct.php">CONATCT</a>
  </div>
  <div id="myDIV">
      <div style="width: 50%; height: 480px; float: left; background: #d8d5f5; border-radius: 6px; border-color: black; border-style: solid">
<form action="" method="post" name="form" action="">
            <br>
            <strong>Select Account Holder Name Here:</strong>
            <select name="account_option">
            <option value="" disabled selected>-- Select Account Holder Name to Deposit Money --</option>
              <?php
                 $data="";
                 include "connection.php";  // Using database connection file here
                 $records=mysqli_query($conn,"SELECT id, Acc_hol_name FROM add_member");  // Use select query here 
                while($data=mysqli_fetch_array($records))
                  {
                    echo "<option value='". $data['id']."'>". $data['Acc_hol_name']."</option>";  //
                  } 
              ?>
           </select>
           <input type="submit" name="submit" value="Accont Information">
              <?php
                $temp_id="";
                $temp_name="";
                $temp_total_saving=null;
                $total_loan_amt=null;
                $total_interest_amt=null;
                $total_fine_amt=null;
                $total_deposit_amt=null;
                $total_return_amt=null;
                $total_deposit_amt=null;
                  //$temp="";
                 $records1="";
                 $selected="";
                 $temp="";
                    if(isset($_POST['submit']))
                      {
                        if(!empty($_POST['account_option'])) 
                          {
                          $selected = $_POST['account_option'];             
                         $records1=mysqli_query($conn,"SELECT id,Acc_hol_name,gender,Date_of_birth,Mb_number,Aa_number,Address,Acc_type,Acc_open_date,Deposit_date,Deposit_amt FROM add_member WHERE id= '".$selected."'");
                          }
                      } else 
                          {
              ?>
                            <br><strong style="color: red;">
                              <?php
                                echo 'Select Account Holder Name to Deposit Money.';
                                }
                            while($data=mysqli_fetch_array($records1))
                                {
                                  $temp_id=$data['id'];
                                  $temp_name=$data['Acc_hol_name'];
                              ?>
                    <br>
              <table>
                <tr><td><lable>Account Number:</lable></td>
              <td><?php echo "".$data['id'];?></td></tr>
              <tr><td>Name:</td>
              <td><?php echo "". $data['Acc_hol_name'];?></td></tr>
              <tr><td>Mobile Number:</td>
              <td><?php echo "". $data['Mb_number'];?> </td></tr>
              <tr><td>Aadhar Number:</td>
              <td><?php echo "". $data['Aa_number'];?> </td></tr>
              <tr><td>Address:</td>
              <td><?php echo "". $data['Address'];?> </td></tr>
              <tr><td>Account Type:</td>
              <td><?php echo "". $data['Acc_type'];?></td></tr>
              <tr><td>Account Opening Date:</td>
              <td><?php echo "". $data['Acc_open_date'];?></td></tr>
             <?php
           }
              $sql2=mysqli_query($conn,"SELECT saving_amt,loan_amt,fine_amt,interest_amt,fine_amt FROM deposit_money WHERE id= '".$selected."'");
              while($row=mysqli_fetch_array($sql2))
              {
                $temp_total_saving+=$row['saving_amt'];
                $total_loan_amt+=$row['loan_amt'];
                $total_interest_amt+=$row['interest_amt'];
                $total_fine_amt+=$row['fine_amt'];
              //  $total_deposit_amt+=$row['total_deposit_amt '];
                //$total_return_amt+=$row['total_return_amt'];*/
              }
              ?>
              <br>
              <table>
                <tr><td></td><td><h3>-------Account Details-------</h3></td><td></td></tr>
              <tr><td>Total Saving Amount:</td><td><b><?php echo "".$temp_total_saving+=$row['saving_amt'];?></b></td></tr><br>
              <tr><td>Total Loan Amount:</td><td><b><?php echo "".$total_loan_amt+=$row['loan_amt'];?></td></b></tr><br>
              <tr><td>Total Fine Amount:</td><td><b><?php echo "".$total_fine_amt+=$row['fine_amt'];?></td></b></tr><br>
                    </table>
                   <?php
                    /*$sql3="INSERT INTO money_sumary(id,name,total_deposit,total_loan,total_interest)VALUES('$temp_id','$temp_name','$temp_total_saving','$total_loan_amt','$total_interest_amt')";
                    mysqli_query($conn,$sql3);*/

/*$sql3="INSERT INTO money_sumary(id,name,total_deposit,total_loan,total_interest)VALUES('$temp_id',$temp_name','$temp_total_saving','$total_loan_amt','$total_interest_amt')";
if(mysqli_query($conn,$sql3)){

  echo "<script>alert('Record Inserted');</script>";
  /*echo '<script>
      window.location="Add_memebr.php";
      </script>';*/
   // exit();

/*}
else{
  echo"Error".$sql3."".mysqli_execute($conn);
}*/

  ?>  
                 </table>
               
</form>

</div>
<?php mysqli_close($conn);  // close connection ?> 
<form name="form2" method="post" action=""> 
    <div style="width: 50%; height: 480px; float: left; background: #d8d5f5; border-radius: 6px; border-color: black; border-style: solid"> 
        <br>
          <table>
              <tr>
                  <td align="left"><label><b>Select Date For Deposit Money:</b></label></td>
                  <td><input type="date" id="birthday" name="Dep_date"><br></td>
              </tr>
                  <tr><td><b>Deposit Saving Amount:</b></td><td><input type="text" name="montly_amt"></td></tr>
                  <tr><td><b>Deposit Given Loan Amount:</b></td><td><input type="text" name="loan_amt"></td></tr>
                  <tr><td><b>Deposit Interest Amount:</b></td><td><input type="text" name="interest_amt"></td></tr>
                  <tr><td><b>Deposit Fine Amount(If Any):</b></td><td><input type="text" name="fine_amt"></td></tr>  
          </table>
    <input type="submit" name="submit" value="Deposit All">
    <?php 
    $sql3="INSERT INTO money_sumary(id,name,total_deposit,total_loan,total_interest)VALUES('$temp_id','$temp_name','$temp_total_saving','$total_loan_amt','$total_interest_amt')";
                    mysqli_query($conn,$sql3);



    ?>
    </div>
</form> 
<!--<div style="width: 31%; height: 480px; float: right; background: #d8d5f5; border-radius: 6px; border-color: black; border-style: solid"> 
<table>
<?php   
//$sql4=null;
//$sql4=mysqli_query($conn,"SELECT SUM(saving_amt)FROM deposit_money");
//echo $sql4;
?>
                <tr><td></td><td><h3><u>Bachat Gat Balance Details</u></h3></td><td></td></tr>
                <tr><td><strong><h4>This Month Collection</h4></strong></td><td><?php echo $sql4;?></td></tr>
                <tr></tr>
                <tr></tr>
                <tr><td><strong><h4>Last Month Balanced</h4></strong></td><td></td></tr>
                <tr></tr>
                <tr></tr>
                <tr><td><strong><h4>Total Loan Given</h4></strong></td><td></td></tr>
                <tr></tr>
                <tr></tr>
                <tr><td><strong><h4>Total Interest Collection</h4></strong></td><td></td></tr>
                <tr></tr>
                <tr></tr>
                <tr><td><strong><h4>Total Collection</h4></strong></td><td></td></tr>
                <tr></tr>
                <tr></tr>
                <tr><td><strong><h4>Total Expences</h4></strong></td><td></td></tr>
                <tr></tr>
                <tr></tr>
                <tr><td><strong><h4>Gross Balanced</h4></strong></td><td></td></tr>
              </table>


</div>-->




</body>
</html>