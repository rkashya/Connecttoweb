<!-- <?php 
$server_name="localhost";
$username="root";
$password=""
$database_name="u248017254_feedback"
$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check connection
if(!$conn)
{
	die("connection failed".mysql_connect_error());


}
if(isset($_post['save']))
{
	$name=$_post[name];
	$email=$_post[email];
	$phone_no=$_post[phone_no];
	$message=$_post[message];

	$sql_query="INSERT INTO entry_details(name,email,phone_no,message)
	VALUES ('$name','$email','$phone_no','$message')";
	IF(mysqli_query($conn,$sql_query))
	{
		echo"New details";
	}
	else{
		echo"error"
		$sql."".mysqli_error($conn);
	}
mysqli_close($conn);
}
?>*/ -->
<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>