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
 $url = $_POST['url'];
$urlInDB = $conn->query("SELECT url FROM url WHERE url = '" . $_POST["url"] . "' LIMIT 1");
$urlInDB->num_rows;
if($urlInDB->num_rows>0) {

	echo "Url already exist";

} else {
$sql = "INSERT INTO url (name, url) VALUES ('" . $_POST["name"] . "','" . $_POST["url"] . "')";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

}
$conn->close();

