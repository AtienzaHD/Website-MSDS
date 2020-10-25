<?php
//debugging
$out = ""; 
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
	
	$username = $_SESSION["user"];
	echo $_SESSION["user"];
        $stmt = $conn->prepare("SELECT Personnel.firstName, Personnel.lastName, Personnel.DOB, Personnel.Gender, Personnel.Rank, Personnel.homeAddress, Personnel.personalContact FROM Personnel INNER JOIN Users ON Users.id=Personnel.userID WHERE Users.username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();

        $personnelInfo = $stmt->get_result()->fetch_assoc();
        $stmt->close();

        if($personnelInfo != false)
    {
        $_SESSION["firstName"] = $personnelInfo["firstName"];
        $_SESSION["lastName"] = $personnelInfo["lastName"];
        $_SESSION["DOB"] = $personnelInfo["DOB"];
        $_SESSION["Gender"] = $personnelInfo["Gender"];
        $_SESSION["Rank"] = $personnelInfo["Rank"];
        $_SESSION["homeAddress"] = $personnelInfo["homeAddress"];
        $_SESSION["personalContact"] = $personnelInfo["personalContact"];
    }
	

	?>	