<html>
  <head>
    <?php
    error_reporting(0);
    session_start();
    include 'header.php';
    $temp_id="";
    $temp_name="";
    $temp_mb="";
    $temp_aa="";
    $saving_amt=null;
    $temp_sa=null;
    $temp_last_sav=null;
    
    ?>
    <script>
      function validateForm() {
      var x = document.forms["form2"]["montly_amt"].value;
      if (x == "") {
      alert("सर्व माहिती भरा आणि नंतर सबमिट करा ...... !");
      return false;
    }
}
 
  
</script>
  </head>
<body>
  <div class="conatiner">
    <div class="row border-bottom">
      <div class="col">
       <br><center><b><h3>Regular Deposit Amount Section (येथे ठेव जमा करा) </h3></b>
        <img src="./img/int.png" width="80px" height="80px"></center>
        </div>
    </div>
    <div class="row border-bottom">
      <div class="col">
       <center><h4><b><?php echo "".$_SESSION["Mem_temp_name"]; ?> यांची बचत जमा करा </b>
        <a href="logout.php">
          <button class="btn btn-warning btn-danger btn-large" style="float: right;">Logout</button>
        </a>
     </div>
   </div>
   <div class="row ">
       <div class="col text-center">
           <form action="" method="post" name="form">
       
                          <?php
                           
                            include 'connection.php';
                            if (isset($_SESSION["Mem_temp_id"]))
                                  {
                                $q = $_SESSION["Mem_temp_id"];                            
                                $sql="SELECT id,acc_hol_name ,mb_number,Aa_number,saving_amt FROM deposit_money WHERE id='".$q."'";
                                 $result = mysqli_query($conn,$sql);
                      while($row = mysqli_fetch_array($result)) 
                       {
                          $temp_id=$row['id'];
                          $temp_name=$row['acc_hol_name'];
                          $temp_mb=$row['mb_number'];
                          $temp_aa=$row['Aa_number'];
                         $temp_last_sav=$row['saving_amt'];
                         $temp_sa+=$row['saving_amt'];
                        }
                      

            ?>
                    <h3>खातेदारचा तपशील </h3>
                          <table class="table table-striped table-bordered">
                          <tr><th scope="col">खाते क्रमांक</th><td><?php echo "". $temp_id;?></td></tr>
                          <tr><th scope="col">खातेधारकाचे नाव</th><td><?php echo "".$temp_name; ?></td></tr>
                            <tr><th>मोबाइल नंबर</th><td><?php echo "".$temp_mb; ?></td></tr>
                            <tr><th scope="col">आधार क्रमांक</th><td><?php echo "".$temp_aa;  ?></td></tr>
                            <tr><th scope="col">मागील महिन्याची ​बचत रक्कम </th><td><?php echo "".$temp_last_sav;?></td></tr>
                            <tr><th scope="col">आज परेंतची एकूण बचत </th><td><?php echo "".$temp_sa;?></td></tr>
</table>                  
        </div>
          </form>
                  
<form action="depositdbconnection.php" method="post" name="form2" onsubmit="return validateForm()">
      <div class="col-sx-6 text-center">
        <?php
        }else{
                        echo "<h3><b><center>बचत स्वीकृतीसाठी प्रथम खातेदाराचे लॉगिन करा</center></b></h3>";
                      }
                      ?>

          <table class="table">

            <tr>
              <td><br><label class="font-weight-bold">पैसे जमा करण्यासाठी तारीख निवडा<br>(Select Deposit Date):</label></td>
              <td><br><input type="date" id="birthday" name="Dep_date"><br></td></tr> <tr><td><br><label class="font-weight-bold">बचत रक्कम येथे भरा <br>(Enter Deposit Amount):</label></td>
                  <td><br><input type="text" name="montly_amt"><br></td></tr>
                  <tr>
                    <td></td>
                    <td><button type="submit" name="submit_all" class="btn btn-success btn-block btn-large" style="width: 80%; "><b>सर्व जमा करा</b></button></td>
                  </tr>
                </table>
      </div> 
    </div>  
  </form>  
    </div>
</body>

</html>




