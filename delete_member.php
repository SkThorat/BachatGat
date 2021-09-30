<html>
<head>

	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="js/bootstrap.js"></script>
</head>

<body>
	<div class="topnav">
  <a class="active" href="Add_memebr.php">ADD MEMBER(सदस्य जोडा)</a>
  
  <a href="deposit.php">Deposit(जमा)</a>
 <a href="loan.php">Loan(कर्ज)</a>
  <a href="collection.php">Collection(येणे)</a>
  <a href="individual.php">Individual(वयक्तिक तपशिल ) </a>
  <a href="">Monthly(महिना तपशिल) </a>

  <a href="report.php">Reports(अहवाल)</a>
  </div>
	<div style="width: 100%; height: 80px; float: center; background: #d8d5f5; border-radius: 6px; border-color: black; border-style: solid">
		<center><form action="deleteconnection.php" method="post">
			<button type="submit" name="Delete" value="" calss="btn btn-danger">DELETE ALL</button>

		</form></center>
  </div>
  <?php  
  include "connection.php";
  $count = 1;
  
$sql1="SELECT id,Acc_hol_name FROM add_member";
                          $result1=mysqli_query($conn,$sql1);  
                          ?>

                          <table class="table table-striped table-bordered">
                          <tr><th>खाते क्रमांक</th><th>खातेधारकाचे नाव</th><th>Action</th></tr>
                                  <?php  
                          while($data=mysqli_fetch_array($result1))
                                {
                                  $id=$data['id'];
   								 $title=$data['Acc_hol_name'];
    							
                                  echo "<tr>";
                                  echo "<td>";
                                  echo $data['id'];
                                  echo "</td>";
                                 // echo "</td>";
                                  echo "<td>";
                                  echo $data['Acc_hol_name'];
                                  echo "</td>";
                                 // echo "</td>";
                                  echo "<td>";
                                  ?>
                                  <tr>
     <td align='center'><?= $count; ?></td>
     <td><a href='<?= $link; ?>'><?= $title; ?></a></td>
     <td align='center'>
       <span class='delete' data-id='<?= $id; ?>'>Delete</span>
     </td>
    </tr>
    <?php
   $count++;
  ?>
                                  <button type="submit" class="btn btn-danger deletebtn">Delete</button>

                                  <?php
                                  echo "</td>";
                                   echo "</tr>";
                                  
                    			 }

                                echo "<table>";

  ?>
</body>
<script type="text/javascript">
	$(document).ready(function(){
  $(".deletebtn").click(function(){
    $(".deletemodal").hide();
  });
});


</script>



</html>