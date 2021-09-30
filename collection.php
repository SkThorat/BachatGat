<html>
  <head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="js/bootstrap.js"></script>
      
  </head>
<body>
 <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="Add_memebr.php">ADD MEMBER(सदस्य जोडा)</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="deposit.php">Deposit(जमा)</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link"href="loan.php">Loan(कर्ज)</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="individual.php">Individual(वयक्तिक तपशिल ) </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="monthly_report.php">Monthly(महिना तपशिल) </a>
    </li>
  </ul>
</nav>
  
      <div style="width: 100%; height: 110px; float: center; background:#ffffff; border-radius: 6px; border-color: black; border-style: solid">
         <br><h2><center><b><h3 style="color: #00000;">येथे येणे जतन करा</b></center></h2>
        <div class="container" style=" height: 380%; background-color:#cedbf0">
          <form action="collectiondbconnection.php" method="post" name="form">
  <div class="row">
    <div class="col-sm">
      <br><center><strong>सभासदाचे नाव निवडा :</strong></center></br>
            <center><select name="account_option"></center>
            <option value="" disabled selected>-- सभासदाची यादी --</option>
              <?php
                 include "connection.php";  // Using database connection file here
                 $records=mysqli_query($conn,"SELECT id, Acc_hol_name FROM add_member");  // Use select query here 
                while($data=mysqli_fetch_array($records))
                  {
                    echo "<option value='". $data['id']."'>". $data['Acc_hol_name']."</option>";  
                    
                  } 
              ?>
           </select>
    </div>
    <div class="col-sm">
      <table>
              <tr>
                  <br><td align="center"><label><b>येणे जमा करण्यासाठी तारीख निवडा:</b></label></td>
                  <td><input type="date" id="birthday" name="collect_date"><br></td>
              </tr>
                  <tr><td><b>बचत रक्कम:</b></td><td><input type="text" name="saving_amt"></td></tr>
                  <tr><td><b>येणे कर्ज रक्कम:</b></td><td><input type="text" name="loan_amt"></td></tr>
                  <tr><td><b>कर्ज व्याज रक्कम:</b></td><td><input type="text" name="interest_amt"></td></tr>
                  <tr><td><b></b></td><td></td></tr>  
          </table>
    <button type="submit" name="submit" class="btn btn-primary btn-block btn-large" style="width: 20%"><b>सर्व जमा करा</b></button>
    </div>
  </div>      
      <!--<button type="submit" name="submit" class="btn btn-primary btn-block btn-large" style="width: 40%"><b>खात्याची माहिती दर्शवा</b></button>-->       
    </div>
</div>
<!--<form name="form2" method="post" action=""> 
    <div style="width: 100%; height: 480px; float: center; background: #d8d5f5; border-radius: 6px; border-color: black; border-style: solid"> 
        
</form> -->
</body>
</html>