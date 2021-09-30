
<?php
include 'connection.php';
if (isset($_POST['account_option']))
{
  $q = $_POST['account_option']; 
 
$temp_id="";
$temp_name="";
$temp_mb=null;
$temp_aa=null;
$saving_amt=null;
$temp_sa=null;
$sql="SELECT id,acc_hol_name ,mb_number,Aa_number,saving_amt FROM deposit_money WHERE id='".$q."'";
    $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($result)) 
            {
                $temp_id=$row['id'];
                $temp_name=$row['acc_hol_name'];
                $temp_mb=$row['mb_number'];
                $temp_aa=$row['Aa_number'];
                $temp_sa+=$row['saving_amt'];
            }
?>
<table class="table table-striped table-bordered">
<tr><th scope="col">खाते क्रमांक</th><td><?php echo "". $temp_id;?></td></tr>
 <tr><th scope="col">खातेधारकाचे नाव</th><td><?php echo "".$temp_name; ?></td></tr>
 <!--<tr><th>मोबाइल नंबर</th><td><?php //echo "".$temp_mb; ?></td></tr>-->
 <tr><th scope="col">आधार क्रमांक</th><td><?php echo "".$temp_aa;  ?></td></tr>
<tr><th scope="col">बचत रक्कम </th><td><?php echo "".$temp_sa;?></td></tr>
 <tr><th scope="col">Total Saving</th><td><?php echo "".$temp_sa;?></td></tr>
</table>

<?php
mysqli_close($conn);
}

?>
