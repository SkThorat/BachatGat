<?php
include 'connection.php';
   $backup="";
   $table_name=array("loan","deposit_money");
   $backup_file ="/backup/deposit_money.sql";
   mysqli_select_db($conn,$dbname);
   foreach ($table_name as $value) {
      $sql="SELECT * INTO OUTFILE '$backup_file'FROM $value";
      
      $backup=mysqli_query($conn,$sql);
      echo"test ok";
   }
   if(!$backup) {
      die('Could not take data backup: '. mysqli_connect_error());
   }
   
   echo "Backedup data successfully\n";
   
   
?>