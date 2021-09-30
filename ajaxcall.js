
<script type="text/javascript" src="">

$(document).ready(function(){
	$('#displayinfo').click(function(e){
		e.preventDefault();
		$.ajax({
			method:"POSt",
			url:"Account_info.php",
			data:$('#responseid').serialize(),
			datatype:"html",
			success:function(response){
				//$('#msg').text(response);
				 console.log(response);
			},
			error: function(error){
     		throw new Error('Did not work');
      		}
		});
	})

});
</script>