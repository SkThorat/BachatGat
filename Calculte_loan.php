<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}
table, td, th {
  border: 1px solid black;
  padding: 5px;
}
th {text-align: left;}
</style>
</head>
<body>

<?php

$q = intval($_GET['q']);
include 'connection.php';
$temp_emi="";
$temp_loan_interest="";

$sql="SELECT emi,interest_rate FROM loan WHERE loan.id='".$q."'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
  
  $temp_emi=$row['emi'];
  $temp_loan_interest=$row['interest_rate'];
    }
?>
<table>
<tr><th>मासिक हप्ता:</th><td><?php echo $temp_emi;?></td></tr>
 <tr><th>मासिक व्याज:</th><td><?php echo $temp_loan_interest;?></td></tr>
</table>

<?php
mysqli_close($conn);
?>
</body>
</html>