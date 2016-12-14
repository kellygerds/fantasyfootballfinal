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

$teamid = $_POST["TeamID"];
$name = $_POST["Player_Name"];
$position = $_POST["Position"];
$number = $_POST["Number"];


//creating a query
//Check if a artwork_id was provided if so, we're updating the artwork, otherwise we're inserting
  if (isset($_POST['Players_id']))
  {
    $Player_id = $_POST['Players_id'];
    $sql =  "UPDATE players SET Team_id='$teamid', Player_Name='$name', Position= '$position', Number='$number'
    WHERE id = $Player_id";
  } else {
   $sql = "INSERT INTO players (Team_id, Player_Name, Position, Number) 
  VALUES ('$teamid','$name', '$position', '$number')"; //php variable names, first one (above this) needs to match column names

}




if ($conn->query($sql) === TRUE) {

  echo "<br><br>Success! <br>";
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
 <div>
<button type="button" class="btn btn-lg btn-default"><a href="index.php">Back to Team and Player Info</a></button>
</div>

<!--you call echo what the method is, in this case it it POST. Then in the quotes you pull the section from POST that you want to call.-->

</body>
</head>
</html>