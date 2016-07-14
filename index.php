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
<!-- 
<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "domain";

 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 } 
 if(isset($_POST['submit'])) { 
 $url = $_POST['url'];
$urlInDB = $conn->query("SELECT url FROM url WHERE url = '" . $_POST["url"] . "' LIMIT 1");

if($urlInDB->num_rows == 1) {

	echo "Url already exist";

} else {
$sql = "INSERT INTO url (name, url) VALUES ('" . $_POST["name"] . "','" . $_POST["url"] . "')";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

}
}
$conn->close();
?>
 -->