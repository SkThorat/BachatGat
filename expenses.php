<html>
  <head>
	<?php
  
include 'header.php';
?>
  <script>
      function validateForm() {
        /*var y = documnet.forms["form"]["account_option"].value;
        if (y == "") {
        alert("सर्व माहिती भरा आणि नंतर सबमिट करा ...... !");
        return false;
      }*/
      var x = document.forms["form2"]["loan_EMI"].value;
      if (x == "") 
      {
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
       <br><center><b><h3>(Deposit Total Expenses)बचत गटाचा सर्व खर्च येथे नमूद करा  </h3>
        <img src="./img/expens.png" width="80px" height="80px"></center></b>
     </div>
   </div>
   <div class="row">
      <div class="col">
     
       <form action="expensesConnection.php" method="post" name="form2" onsubmit="return validateForm()">
       <div class="col text-center">
        <table class="table">
          <tr>
            <td>
          </td>
    </tr>        
        
          <tr>
              <td>
                <label class="font-weight-bold">तारीख निवडा<br>(Select Date):</label>
              </td>
              <td>
                <input type="date" id="birthday" name="ex_date"><br>
              </td>
          </tr> 
          <tr>
            <td>
              <label class="font-weight-bold">खर्च कशावर केला आहे ते येथे नमूद करा (उदा.चहा)<br>(Enter Expenses Type):</label>
            </td>
            <td>
              <input type="text" name="ex_type"><br>
            </td>
          </tr>
          <tr>
              <td>
                <label class="font-weight-bold">खर्च केलेली रक्कम <br>(Enter Expenses Amount):</label>
              </td>
            <td>
              <input type="text" name="ex_amt"><br>
            </td>
          </tr>
          <tr>
              <td>
                <label class="font-weight-bold">खर्चाचे स्पष्टीकरण घ्या <br>(Enter Description if Any):</label>
              </td>
            <td>
              <input type="text" name="ex_description">  <br>
            </td>
          </tr>
          <tr>
            <td>
              <button type="submit" name="submit_all" class="btn btn-success btn-block btn-large" onsubmit="return validateForm()" style="width: 50%; float:right;"><b>सर्व जमा करा</b></button>
            </td>
          </tr>
           </form>
      </table>
      </div>
    </div>
</div>
</body>
</html>