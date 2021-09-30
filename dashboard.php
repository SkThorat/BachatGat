<html>
<head>
	<?php
	include 'header.php';
	?>
	<script type="text/javascript">
		$(document).on('click','#showData',function(e){
      $.ajax({    
        type: "GET",
        url: "for-dashboard.php",             
        dataType: "html",                  
        success: function(data){                    
            $("#members").html(data); 
           
        }
    });
});
	</script>
</head>

<body>
	<div class="row">
		<div class="col">
			<br><h2><center><b> पंचलिंगेश्वर स्वयं सहायता बचत गट,पंचाळे </b></center></h2><br>
		</div>
	</div>
	
		<div class="col">
			<center><button id="showData" class="btn btn-warning btn-danger btn-large" onclick=""> बचत गटाचा संपूर्ण तपशील बघण्यासाठी येथे क्लिक करा </button></center><br>
		</div>
	</div>
	
	<div class="row border-bottom">
		<div class="col-md-6" id="members"></div>
	</div>

</body>
</html>

<?php

?>