<?php
$servername="localhost";
$username="root";
$password="";
$dbname="bachatgat3";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
	die("Connection failed:".mysqli_connect_error());
}

if(isset($_POST['username'])){
	$uname=$_POST['username'];
	$password=$_POST['password'];

	$sql="select * from admin_login where username='".$uname."'AND password='".$password."'limit 1";
	//$result=mysql_query(query)
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)==1){
		echo '<script>
			window.location="dashboard.php";
			</script>';
		exit();
	}
	else{
		echo '<script>
		alert(“Wrong user name or password”);
		</script>';
	}
}

if(isset($_POST['acc_hol_name'])){
	$acc_hol_name=$_POST['acc_hol_name'];
	$gender=$_POST['Gender'];
	$dob=$_POST['birthday'];
	$mob=$_POST['mb_number'];
	$aadhar=$_POST['Aa_number'];
	$address=$_POST['textarea'];
	$acc_type=$_POST['acc_type'];
	$acc_open_date=$_POST['Acc_open'];
$sql="INSERT INTO Add_member(acc_hol_name,gender,Date_of_birth,Mb_number,Aa_number,Address,Acc_type,Acc_open_date)VALUES('$acc_hol_name', '$gender', '$dob','$mob','$aadhar','$address','$acc_type','$acc_open_date')";
if(mysqli_query($conn,$sql)){

	echo "<script>alert('Record Inserted');</script>";
	echo '<script>
			window.location="Add_memebr.php";
			</script>';
		exit();

}
else{
	echo"Error".$sql."".mysqli_execute($conn);
}
}

if(isset($_POST['deposit_month'])){
	$amt=$_POST['t1'];
	$deposit_month=$_POST['deposit_month'];


	$sql="UPDATE Add_member SET Deposit_date='$deposit_month', Deposite_amt='$amt'";
				if(mysqli_query($conn,$sql)){
						echo "<script>alert('Record Inserted and Updated');</script>";
							echo '<script>
									window.location="deposit.php";
								</script>';
								exit();

				}
					else{
						echo"Error".$sql."".mysqli_execute($conn);
						}
				}

?>