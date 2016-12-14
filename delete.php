<?php

include 'dbConnection.php';
$Player_id = $_GET['id'];
$sql = "DELETE FROM players WHERE id=$Player_id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
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

    <title>#</title>

  </head>



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
<div class="record" style= "color: #fff;">
    <?php
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
    ?>
    </div>

    <br>
    <br>
   
   <button type="button" class="btn btn-lg btn-default"><a href="index.php">Back to Team and Player Info</a></button>
  </body>
</html>