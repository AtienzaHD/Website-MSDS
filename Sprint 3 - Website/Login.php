<?php
session_start();

//if button login is pressed then run. 
$servername = "localhost";
$username = "id7828875_msds_root";
$password = "msds_root";	
$dbName = "id7828875_msds_db";

// Create connection
$conn =  new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . " ");
}
echo "Connected successfully and ";
	
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
    $_SESSION["user"] = $username;
	
	$stmt = $conn->prepare("SELECT hash FROM Users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $user = $stmt->get_result()->fetch_assoc();
    $stmt->close();

	if(password_verify($password, $user["hash"])) 
	{
		echo "Login Success";
        echo"<script>window.location = 'main.php'</script>";
        
	}
	echo "Login Failed";

	?>	

