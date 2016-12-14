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
    
    
<?php

include 'dbConnection.php';

$sql = "SELECT id, Team FROM nfl_football_teams";

$teams = $conn->query($sql);


if (isset($_GET['id'])) {

  $Player_id = $_GET['id'];

  //Query DB for details 
  $PlayerSQL = "SELECT * FROM players where id = $Player_id"; 
  $Player =  $conn->query($PlayerSQL)->fetch_assoc();

}

?>


<br>
<br>
<h1 style="padding-left:100px;"> <a href="index.php">Add/Update a Player</a></h1>

<form action="SuccessPlayer.php" method="post" style="padding-left:100px;">

     <?php if(isset($Player_id)) echo "<input type='hidden' name='Players_id' value=" . $Player_id .">"; ?>
    
    <div>  
        <label for="TeamID" style= "color: #fff;">Team name:</label>
        <select name="TeamID">

   

<?php
        if ($teams->num_rows > 0){

            while($row = $teams->fetch_assoc()) {
                echo "<option value='" . $row["id"]. "'" ; //change $row to our variable
                if (isset($Player) and $Player_id == $row["id"]) echo "selected";
                echo">" . $row["Team"] . "</option>";
            }
        }
        ?>

        
    </select>
    </div>

    <div>
        <label for="Player_Name" style= "color: #fff;">Player Name:</label>
        <input type="text" id="" name="Player_Name" <?php if (isset($Player['Player_Name'])) echo "value='" . $Player['Player_Name'] . "'"; ?> / required>
    </div>

    <div>
        <label for="Position" style= "color: #fff;">Position:</label>
        <select name="Position" type="text" id="" name="Position" <?php if (isset($Player['Position'])) echo "value='" . $Player['Position']  . "'"; ?> / required>

        <option disabled selected value> -- select a position -- </option>
        <option value="Center">Center</option>
        <option value="Guard">Guard</option>
        <option value="Tackle">Tackle</option>
        <option value="Quarterback">Quarterback</option>
        <option value="Running Back">Running Back</option>
        <option value="Wide Receiver">Wide Receiver</option>
        <option value="Tight End">Tight End</option>
        <option value="Linebacker">Linebacker</option>
        <option value="Safety">Safety</option>
        <option value="Corner">Corner</option>
        <option value="Kicker">Kicker</option>
        </select>

    </div>
    
        <div>
        <label for="Number" style= "color: #fff;">Number:</label>
        <input type="number" id="" name="Number" <?php if (isset($Player['Number'])) echo "value='" . $Player['Number']  . "'"; ?> / required>
    </div>

<br>
<br>
<br>
    <div>
        <button type="submit" class="btn btn-default">Submit</button>
    </div>
    
</form>
</body>
</html>