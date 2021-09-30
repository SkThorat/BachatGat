
<html>
<head>
	<title>पंचलिंगेश्वर स्वयं सहायता बचत गट ,पंचाळे </title>
	<?php
  error_reporting(0);
    session_start();

    include 'header.php';
    if($_SESSION["Mem_temp_id"]<1)
    {
     // echo "<br><h6><center>कोणताही खातेदार अद्याप लॉगीन नाही आहे . कृपया खातेदाराचे नाव निवडा व लॉगिन करा .</center></h6>";
    }
   else{
    echo "<br><h3><center>".$_SESSION["Mem_temp_name"]." लॉगिन आहेत. </center></h3>";
   }
    
   ?>
   <a href="logout.php">
          <button class="btn btn-warning btn-danger btn-large" style="float: right;">Logout</button>
        </a>
  
    </head>
<body>
  <div class="conatiner">
    
    <div class="row border-bottom">
      <div class="col text-center">
                 <img src="img/avtar22.jpg" alt="Avatar" class="mr-3 mt-3 rounded-circle" style="width:80px;">
          <div class="col-sx-6 text-center">
              <form action="" method="post" name="form">
                <br><label class="font-weight-bold">खातेधारकाचे नाव निवडा<br>(Select Account Holder Name):</label>
                  <br><select name="account_option">
                        <option value="" disabled selected>-- खातेदारांची यादी --</option>
                          <?php
                          include 'connection.php';
                            $records=mysqli_query($conn,"SELECT id,Acc_hol_name FROM add_member");   
                              while($data=mysqli_fetch_array($records))
                                 {
                                echo "<option value='". $data['id']."'>". $data['Acc_hol_name']."</option>"; 
                                //echo $data['id'];
                                    }
                          ?>
                          </select><br>
                          <center><br><button type="submit" id="displayinfo" name="" class="btn btn-success btn-block btn-large" style="width: 15%;float:center"><b>Login </b></button></center>

                          <?php
                          //echo "test1";
                            //include 'connection.php';
                            if (isset($_POST['account_option']))
                                  {
                                $q = $_POST['account_option']; 
                                //echo "test2";
                                $sql1="SELECT * FROM add_member WHERE id='".$q."'";
                                 $result1 = mysqli_query($conn,$sql1);
                                 while($rows = mysqli_fetch_array($result1)) 
                                {
                                  $Mem_temp_id=$rows['id'];
                                  $Mem_temp_name=$rows['Acc_hol_name'];
                                  $Mem_temp_mb=$rows['Mb_number'];
                                  $Mem_temp_aa=$rows['Aa_number'];
                                }
                                $_SESSION["Mem_temp_id"] = $Mem_temp_id;
                                $_SESSION["Mem_temp_name"]= $Mem_temp_name;
                                $_SESSION["Mem_temp_mb"]=$Mem_temp_mb;
                                $_SESSION["Mem_temp_aa"]=$Mem_temp_aa;
                      }
            ?>
            </div>
          </div>
        </div>
        </form>
        <?php 
        if($_SESSION["Mem_temp_name"])
          { ?>
          <div class="row border-bottom">
                <div class="col text-center">
                <label class="font-weight-bold">Dear Admin,तुम्ही </label><br><?php echo "".$_SESSION["Mem_temp_name"];?> <label class="font-weight-bold"><h4><b>यांची बचत /कर्ज स्वीकारू शकता किंवा कर्ज पुरवठा देखील करू शकता. यासाठी मेनुबार मधील योग्य तो ऑपशन  निवडा</b></h4> </label>
              </div>
           </div>
           <?php
        }
        ?>
              
         <!-- </form>-->
        </div>
        </div>
      </div>
    </div>
  </body>
  </html>