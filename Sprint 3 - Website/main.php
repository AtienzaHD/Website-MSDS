<?php
session_start();
?>
<html>

<head>
    
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<nav class="navbar navbar-dark bg-dark centered">
		<img src="includes/logo.png" style="float:left" width="50" height="50" class="img-fluid" >
        <span class="navbar-text" > MSDS </span>  
        <button id="home" type='text' onclick="window.location='main.php';">Home</button>
        <button id="account" type='text' onclick="window.location='account.php';">Account</button>
        <button id="inventory" type='text' onclick="window.location='inventory.php';">Inventory</button>
        <button id="objective" type='text' onclick="window.location='objective.php;">Missions</button>
        <button id="settings" type='text' onclick="window.location='settings.php';">Settings</button>
        <button id="adminPanel" type='text' onclick="window.location='admin.php';">Admin Panel</button>

        
    <button id="logout" type='text' style="float:right" onclick="window.location='index.html';">Logout</button>
        <span class="navbar-text" style="float:right"> <?php echo "logged in as " . $_SESSION["user"] . "."; ?> </span>
</nav>
  <div class="gap" style="background-color: white"></div>
    <div class="gap"></div>
    <div class="homeTitle" style="color:white">
    Schedule 
    </div>
<body style="background-color: #000000" >
   <div style="color:white">
    </div>
</body>

</html>