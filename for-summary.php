<?php
include'connection.php';

	//</table>*/

	$count=null;
	$total_saving=null;
	$total_expense=null;
	$total_loan_distribute=null;
	$total_loan_collection=null;
	$total_collected_interest=null;
	
	$query="SELECT * from add_member";
	$result=mysqli_query($conn,$query);
	
	while($rows=mysqli_fetch_array($result)){
		$count++;
	}
	//echo $count;

	$sql="SELECT saving_amt FROM deposit_money";
	$result1=mysqli_query($conn,$sql);
	
	while($rows=mysqli_fetch_array($result1)){
		$total_saving+=$rows['saving_amt'];
	}
	//echo $total_saving;

	$sql="SELECT cost FROM expenses";
	$result1=mysqli_query($conn,$sql);
	while($rows=mysqli_fetch_array($result1))
	{
	$total_expense+=$rows['cost'];
	}
	//echo $total_expense;

    $sql="SELECT loan_amt FROM loan";
	$result1=mysqli_query($conn,$sql);
	while($rows=mysqli_fetch_array($result1))
	{
	$total_loan_distribute+=$rows['loan_amt'];
	}
	//echo $total_loan_distribute;

	$sql="SELECT Loan_Int_collect_amt FROM collect_money";
	$result1=mysqli_query($conn,$sql);
	while($rows=mysqli_fetch_array($result1))
	{
	$total_collected_interest+=$rows['Loan_Int_collect_amt'];
	}
	//echo $total_collected_interest;

	$sql="SELECT Loan_EMI__collect_amt FROM collect_money";
	$result1=mysqli_query($conn,$sql);
	while($rows=mysqli_fetch_array($result1))
	{
	$total_loan_collection+=$rows['Loan_EMI__collect_amt'];
	}
	//echo $total_loan_collection;


echo "<div class=row justify-content-center>";
echo "<div class=col-auto>";
echo"<center>";
	echo "<center><table class=table table-responsive border=3 >";
		echo"<tr>";
  				echo"<td>";
  				echo"<label>Opening Balance</label>";
  				echo"</td>";
  				echo"<td>";
  				echo $count;
  				echo"</td>";   
  		echo"</tr>";
  		echo"<tr>";
  				echo"<td>";
  				echo"<label>Total Collection</label>";
  				echo"</td>";
  				echo"<td>";
  				echo $total_saving;
  				echo"</td>";
  		echo"</tr>";
  		echo"<tr>";		
  				echo"<td>";
				echo"<label>";
				echo"Total Loan Distribute</label>";
				echo"</td>";
				echo"<td>";
  				echo $total_expense;
  				echo"</td>";
		echo"</tr>";
		echo"<tr>";
				echo"<td>";	
				echo"<label>";
				echo"Total Loan Collection";
				echo"</label>";
				echo"</td>";
				echo"<td>";	
  				echo $total_loan_distribute;
  				echo"</td>";
  		echo"</tr>";
		echo"<tr>";	
  				echo"<td>";
  				echo"<label>";
  				echo"जमा झालेले व्याज रक्कम";
  				echo" </label>";
  				echo"</td>";
  				echo"<td>";
  				 echo $total_collected_interest;
  				 echo"</td>";
  		echo"</td>";
  		echo"<tr>";
  			echo"<td>";
  			
  				echo"<label>";
  				echo"जमा झालेले कर्ज रक्कम";
  				echo"</label>";
  				echo"</td>";
  				echo"<td>";
  				
  				echo $total_loan_collection;
  				echo"</td>";
  		echo"</tr>";	
		echo"</table></center>";
	echo"</div>";
	echo"</div>";
echo"</center>";                              
 
?>
