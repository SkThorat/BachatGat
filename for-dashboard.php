<?php
include'connection.php';

	//</table>*/

	$count=null;
	$total_saving=null;
	$total_expense=null;
	$total_loan_distribute=null;
	$total_loan_collection=null;
	$total_collected_interest=null;
	$total_fine_amt=null;
	
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
	//$total_fine_amt+=$rows['fine_amt'];
	}
	//echo $total_collected_interest;

	$sql="SELECT Loan_EMI__collect_amt FROM collect_money";
	$result1=mysqli_query($conn,$sql);
	while($rows=mysqli_fetch_array($result1))
	{
	$total_loan_collection+=$rows['Loan_EMI__collect_amt'];
	}
	//echo $total_loan_collection;
$aval=($total_loan_distribute-$total_loan_collection);
$balance=($total_saving+$total_loan_collection+$total_collected_interest+$total_fine_amt)-($total_loan_distribute+$total_expense);

echo "<div class=row justify-content-center>";
echo "<div class=col-auto>";
//echo"<center>";
	echo "<table class=table table-responsive >";
		//echo"<tr>";
  			echo"<th scope=col style=background-color:#faf18e;>";
  				echo"<center>";
  				echo"<img src=./img/members.png width=80px height=80px>";
  				echo"<h3>";
  				echo"<label> एकूण सभासद </label>";

  				echo"</h3>";
  				echo"</center>";
  				echo"<center>";
  				echo"<h1>";
  				echo $count;
  				echo"</h1>";
  			    //echo"</center>";
  				echo"</td>";
  			echo"</th>";
  			echo"<th scope=col style=background-color:#79f2ee;>";
  				
  				echo"<center>";
  				echo"<img src=./img/saving.png width=80px height=80px>";
  				echo"<h3>";
  				echo"<label> एकूण बचत रक्कम </label>";
  				echo"</h3>";
  				echo"</center>";
  				echo"<center>";
  				echo"<h1>";
  				echo $total_saving;
  				echo"</h1>";
  				//echo"</center>";
  				//echo"<td>";
  			echo"</th>";
  			echo"<th scope=col style=background-color:#b3f2c4;>";
				echo"<center>";
				echo"<img src=./img/expens.png width=80px height=80px>";
				echo"<h3>";
				echo"<label>";
				echo"झालेला खर्च";
				echo" </label>";
				echo"</h3>";
				echo"</center>";
				echo"<center>";
				echo"<h1>";
  				echo $total_expense;
  				echo"</h1>";
				echo"</center>";
				//echo"<td>";	
			echo"</th>";
			echo"</th>";
  			echo"<th scope=col style=background-color:#faf18e;>";
				echo"<center>";
				echo"<img src=./img/int.png width=80px height=80px>";
				echo"<h3>";
				echo"<label>";
				echo"बचत गट शिल्लक रक्कम";
				echo" </label>";
				echo"</h3>";
				echo"</center>";
				echo"<center>";
				echo"<h1>";
  				echo $balance;
  				echo"</h1>";
				echo"</center>";
				//echo"<td>";	
			echo"</th>";
			
  		echo"</tr>";
echo"</div>";
	echo"<div class=col-auto>";
		//echo"<tr>";
				echo"<th scope=col style=background-color:#f5b0b7;>";
				echo"<center>";
				echo"<img src=./img/loan.png width=80px height=80px>";
				echo"<h3>";
				echo"<label>";
				echo"वितरण केलेले कर्ज रक्कम";
				echo"</label>";
				echo"</h3>";
				echo"</center>";
								
  				echo"<center>";
  				echo"<h1>";
  				echo $total_loan_distribute;
  				echo"</h1>";
  				echo"</td>";
  				echo"</center>";
			echo"</th>";
  			echo"<th scope=col style=background-color:#e0bbf2;><h3>";
  				echo"<center>";
  				echo"<img src=./img/int.png width=80px height=80px>";
  				echo"<h3>";
  				echo"<label>";
  				echo"जमा झालेले व्याज रक्कम";
  				echo" </label>";
  				echo"</center>";
  				echo"</h3>";
  				echo"</center>";
  				echo"<center>";
  				echo"<h1>";
  				 echo $total_collected_interest;
  				 echo"</h1>";
  				echo"</td>";
  				echo"</center>";
  			echo"</th>";
  			echo"<th scope=col style=background-color:#f5cb33;>";
  				echo"<center>";
  				echo"<img src=./img/emi.png width=80px height=80px>";
  				echo"<h3>";
  				echo"<label>";
  				echo"जमा झालेले कर्ज रक्कम";
  				echo"</label>";
  				echo"</h3>";
  				echo"</center>";
  				echo"<center>";
  				echo"<h1>";
  				echo $total_loan_collection;
  				echo"</h1>";
  				echo"</center>";	
  			echo"</th>";
  			echo"</th>";
			echo"<th scope=col style=background-color:#b3f2c4;>";
				echo"<center>";
				echo"<img src=./img/emi.png width=80px height=80px>";
				echo"<h3>";
				echo"<label>";
				echo"येणे कर्ज बाकी ";
				echo" </label>";
				echo"</h3>";
				echo"</center>";
				echo"<center>";
				echo"<h1>";
  				echo $aval;
  				echo"</h1>";
				echo"</center>";
				//echo"<td>";	
			echo"</th>";			
		echo"</tr>";
		echo"</table>";
	echo"</div>";
	echo"</div>";
//echo"</center>";                              
 
?>
