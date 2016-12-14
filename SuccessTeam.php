<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="style.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.css" rel="stylesheet">
<link href="css/bootstrap-theme.min.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/starter-template.css" rel="stylesheet">


<?php

include 'dbConnection.php';

$name = $_POST["Team"];
$uniform = $_POST["Uniform_Color"];
$state = $_POST["State"];
$division = $_POST["Division"];

//creating a query

$sql = "INSERT INTO nfl_football_teams (Team, Uniform_Color, State, Division) 
VALUES ('$name', '$uniform', '$state', '$division')"; //php variable names, first one (above this) needs to match column names

if ($conn->query($sql) === TRUE) {

	echo "<br><br>Success!<br>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>


<body>

     <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">NFL Football</a>
          <a class="navbar-brand" href="index.php">Home</a>
          <a class="navbar-brand" href="TeamForm.php">Team</a>
          <a class="navbar-brand" href="PlayerForm.php">Players</a>
        </div>
    </nav>
    
    <br>
    <br>
    <br>
 <div>
<button type="button" class="btn btn-lg btn-default"><a href="index.php">Back to Team and Player Info</a></button>
</div>

</body>
</head>
</html>