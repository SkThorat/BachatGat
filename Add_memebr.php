<html>
<head>
<?php 
include 'header.php';
?>	 
<script>
function validateForm() {
	var ValidName;
   ValidName = document.forms["Add_memebr_form"]["acc_hol_name"].value;
  if (ValidName == "" || ValidName == null) {
    alert("Name must be filled out");
    return false;
  }
  else{
  	var Validgender;
   Validgender = document.forms["Add_memebr_form"]['Gender'].value;
  if (Validgender == "" || Validgender == null) {
    alert("Please Select Gender");
    return false;
  }
</script>
</head>

<body>
	
  <div class="container">
  	<div class="row border-bottom">
      <div class="col">
       <br><center><b><h3>Member Registration</h3></b>
       <img src="./img/members.png" width="80px" height="80px"></center>
    </div>
    <div class="col-sx-6 text-center" >
  			<br><center><button type="submit" id="displayinfo" name="" class="btn btn-warning btn-block btn-large" style="width: 100%;float:center;"><b>खातेदाराची माहिती मध्ये बदल करा </b></button></center>
  		</div>
</div>
  	<div class="row">
  		<div class="col">
  			<form name="Add_memebr_form"method="POST" action="connection.php" onsubmit="return validateForm()">
<center>
	<table class="table">
		<tr>
			<td><label class="font-weight-bold">खातेधारकाचे पूर्ण नाव:<br>(Name of New Member)</label></td>
			<td><input type="text" placeholder="" name="acc_hol_name" id="AHname" required></td>
		</tr>
		<tr>
			<td><label class="font-weight-bold"><b>लिंग निवडा:<br>(Select Gender)</b></label></td>
			<td>
				<input type="radio" name="Gender" value="Male"> Male
  				<input type="radio" name="Gender" value="Female"> Female
  				<input type="radio" name="Gender" value="Other"> Other<br>
			</td>
		</tr>
		<tr>
			<td><br><label class="font-weight-bold"><b>जन्म तारीख:<br>(Enter Date of Birth)</b></label></td>
			<td><input type="date" id="birthday" name="birthday"><br></td>
		</tr>
		<tr>
			<td><label class="font-weight-bold"><b>मोबाइल नंबर:<br>(Enter Valid Mobile Number)</b></label></td>
			<td><input type="text" placeholder="" name="mb_number" id="mbnumber" required></td>
		</tr>
		<!--<div class="col">-->
		<tr>
			<td><label class="font-weight-bold"><b>आधार क्रमांक:<br>(Enter Valid Aadhar Number)</b></label></td>
			<td><input type="text" placeholder="" name="Aa_number" id="aanumber" required></td>
		</tr>
		<tr>
			<td><label class="font-weight-bold"><b>पत्ता प्रविष्ट करा:<br>(Enter Adderes)</b></label></td>
			<td><textarea id="tarea" name="textarea" rows="4" cols="40"></textarea></td>
		</tr>
		<tr>
			<td><label class="font-weight-bold"><b>खाते प्रकार:<br>(Select Account Type)</b></label></td>
			<td><input type="radio" name="acc_type" value="Saving"> Saving Account
  				<input type="radio" name="acc_type" value="Current"> Current Account<br>
  		</td>
		</tr>
		<tr>
			<td><br><label class="font-weight-bold"><b>खाते उघडण्याची तारीख:<br>(Select Account Opening Date)</b></label></td>
			<td><input type="date" id="Acopen" name="Acc_open"><br></td>
		</tr>
	
		<tr>
			<td><button type="submit" class="btn btn-success btn-block btn-large"><b>खाते तयार करा(Create Account)</b></td>
			
			</tr>
	</table>
</center>
</form> 
  		</div>
  		<div class="col-sx-6 text-center" style="">
  			
	
  		</div>
  	</div>
  	
</div>
</body>
</html>