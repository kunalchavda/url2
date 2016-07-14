<!DOCTYPE HTML>
<html> 
<head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>

<script type="text/javascript">
function checkUrl(val)
{
	
	$.ajax({
		type:"POST",
		url:"connect.php",
		data:'url='+val,
		success: function(data){
			$("#msg").html(data);
		}
	})
}

</script>

<form action="connect.php" method="post" id="form_id">
Name: <input type="text" name="name" id="name_id"><br>
URL:  <input type="url" name="url" id="url_id" onfocusout="checkUrl(this.value)"/><br>
<div id="msg"></div>
<input type="submit" value="submit" id="submit_id" name="submit" />
</form>

</body>
</head>
</html>
