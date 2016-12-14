<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



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
    
<div class="container">

<div class="starter-template">
<h1 style="color:#fff;"> NFL Football Fantasy Football Builder </h1>
</div>

<div style="text-align:center;">
<button type ="button" class="btn btn-lg btn-default"> <a href ="TeamForm.php">Build a Team</a></button>
<button type ="button" class="btn btn-lg btn-default"> <a href ="PlayerForm.php">Recruit a Player</a></button>
</div>

  <div style="display:inline-block; text-align:center;">
  <form action="index.php" method="post"  style="margin-top:50px; padding-bottom:40px;">
         <select name="Division">
         <option disabled selected value> -- select a division -- </option>
           <option value="NFC_East">NFC East</option>
           <option value="NFC_West">NFC West</option>
            <option value="NFC_North">NFC North</option>
            <option value="NFC_South">NFC South</option>
            <option value="AFC_East">AFC East</option>
            <option value="AFC_West">AFC West</option>
            <option value="AFC_North">AFC North</option>
            <option value="AFC_South">AFC South</option>

      </select>
      <button type='submit' class="btn btn-danger" value = 'Filter'> Filter</button>
       </form>
      </div>
  
  <div style="display:inline-block; text-align:center;">
  <form action="index.php" method="post">
         <select name="Position">
        <option disabled selected value> -- select a position -- </option>
        <option value="Center">Center</option>
        <option value="Guard">Guard</option>
        <option value="Tackle">Tackle</option>
        <option value="Quarterback">Quarterback</option>
        <option value="Running_Back">Running Back</option>
        <option value="Tight_End">Tight End</option>
        <option value="Linebacker">Linebacker</option>
        <option value="Safety">Safety</option>
        <option value="Corner">Corner</option>
        <option value="Kicker">Kicker</option>

      </select>

      <button type='submit' class="btn btn-danger" value = 'Filter'> Filter</button>   
      </form>
</div>

<div style="display: inline-block; padding-left:20px;">
<a href="index.php" class="btn btn-default"> Reset</a>
</div>


<?php

include 'dbConnection.php';

$sql = "SELECT * FROM nfl_football_teams";

$orderBy = array('Team', 'Uniform','State','Division','Player','Position', 'Number');
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


if (isset($_GET['orderBy']) == 'Team') {
  $order = $_GET['orderBy'];
     $sql = "SELECT
    players.id as Players_id, Player_Name, Team_id, Position, Number,
    nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division
    FROM players JOIN nfl_football_teams ON players.Team_id = nfl_football_teams.id ORDER BY " .$order;

}else{
$sql = "SELECT
players.id as Players_id, Player_Name, Team_id, Position, Number,
nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division
FROM players JOIN nfl_football_teams ON players.Team_id = nfl_football_teams.id";

}

if (isset($_POST['Division'])) {
  $divisionSort = $_POST['Division'];
   
   if ($divisionSort == 'NFC_East') {
      $sql = "SELECT players.id as Players_id, Player_Name, Team_id, Position, Number,
nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division
 FROM players JOIN nfl_football_teams ON players.Team_id = nfl_football_teams.id WHERE Division='NFC East' ";

   } elseif ($divisionSort == 'NFC_West') {
       $sql = "SELECT players.id as Players_id, Player_Name, Team_id, Position, Number,
nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division FROM players JOIN nfl_football_teams ON players.Team_id = nfl_football_teams.id WHERE Division='NFC West' ";

   }elseif ($divisionSort == 'NFC_North') {
       $sql = "SELECT players.id as Players_id, Player_Name, Team_id, Position, Number,
nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division FROM players JOIN nfl_football_teams ON players.Team_id = nfl_football_teams.id WHERE Division='NFC North' ";

   }elseif ($divisionSort == 'NFC_South') {
       $sql = "SELECT players.id as Players_id, Player_Name, Team_id, Position, Number,
nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division FROM players JOIN nfl_football_teams ON players.Team_id = nfl_football_teams.id WHERE Division='NFC South' ";

   }elseif ($divisionSort == 'AFC_East') {
       $sql = "SELECT players.id as Players_id, Player_Name, Team_id, Position, Number,
nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division FROM players JOIN nfl_football_teams ON players.Team_id = nfl_football_teams.id WHERE Division='AFC East' ";

   }elseif ($divisionSort == 'AFC_West') {
       $sql = "SELECT players.id as Players_id, Player_Name, Team_id, Position, Number,
nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division FROM players JOIN nfl_football_teams ON players.Team_id = nfl_football_teams.id WHERE Division='AFC West' ";

   }elseif ($divisionSort == 'AFC_North') {
       $sql = "SELECT players.id as Players_id, Player_Name, Team_id, Position, Number,
nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division FROM players JOIN nfl_football_teams ON players.Team_id = nfl_football_teams.id WHERE Division='AFC North' ";

   }elseif ($divisionSort == 'AFC_South') {
       $sql = "SELECT players.id as Players_id, Player_Name, Team_id, Position, Number,
nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division FROM players JOIN nfl_football_teams ON players.Team_id = nfl_football_teams.id WHERE Division='AFC South' ";

   }

}


//filter by elevation
           if (isset($_POST['Position'])) {
           $positionSort = $_POST['Position'];
 
           if ($positionSort == 'Quarterback') {
      $sql = "SELECT players.id as Players_id, Player_Name, Team_id, Position, Number,
      nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division FROM players JOIN nfl_football_teams ON players.Team_id = nfl_football_teams.id WHERE Position='Quarterback' ";


           } elseif ($positionSort == 'Running_Back') {
       $sql = "SELECT players.id as Players_id, Player_Name, Team_id, Position, Number,
nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division FROM players JOIN nfl_football_teams ON players.Team_id = nfl_football_teams.id WHERE Position='Running Back' ";

        } elseif ($positionSort == 'Kicker') {
       $sql = "SELECT players.id as Players_id, Player_Name, Team_id, Position, Number,
nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division FROM players JOIN nfl_football_teams ON players.Team_id = nfl_football_teams.id WHERE Position='Kicker' ";

      } elseif ($positionSort == 'Safety') {
       $sql = "SELECT players.id as Players_id, Player_Name, Team_id, Position, Number,
nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division FROM players JOIN nfl_football_teams ON players.Team_id = nfl_football_teams.id WHERE Position='Safety' ";

  }   elseif ($positionSort == 'Corner') {
       $sql = "SELECT players.id as Players_id, Player_Name, Team_id, Position, Number,
nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division FROM players JOIN nfl_football_teams ON players.Team_id = nfl_football_teams.id WHERE Position='Corner' ";

    } elseif ($positionSort == 'Linebacker') {
       $sql = "SELECT players.id as Players_id, Player_Name, Team_id, Position, Number,
nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division FROM players JOIN nfl_football_teams ON players.Team_id = nfl_football_teams.id WHERE Position='Linebacker' ";

  } elseif ($positionSort == 'Tackle') {
       $sql = "SELECT players.id as Players_id, Player_Name, Team_id, Position, Number,
nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division FROM players JOIN nfl_football_teams ON players.Team_id = nfl_football_teams.id WHERE Position='Tackle' ";

  } elseif ($positionSort == 'Guard') {
       $sql = "SELECT players.id as Players_id, Player_Name, Team_id, Position, Number,
nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division FROM players JOIN nfl_football_teams ON players.Team_id = nfl_football_teams.id WHERE Position='Guard' ";

  } elseif ($positionSort == 'Center') {
       $sql = "SELECT players.id as Players_id, Player_Name, Team_id, Position, Number,
nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division FROM players JOIN nfl_football_teams ON players.Team_id = nfl_football_teams.id WHERE Position='Center' ";

  } elseif ($positionSort == 'Tight_End') {
       $sql = "SELECT players.id as Players_id, Player_Name, Team_id, Position, Number,
nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division FROM players JOIN nfl_football_teams ON players.Team_id = nfl_football_teams.id WHERE Position='Tight End' ";


  }
}

//$sql = "SELECT 
//players.id as Players_id, Player_Name, Team_id, Position, Number,
//nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division
//FROM players JOIN nfl_football_teams ON players.Team_id = nfl_football_teams.id";

$result = $conn->query($sql);

if($result->num_rows > 0) {
     echo '<table class="table table-bordered;">
     <tr style="background-color:#fff;">
       <th>TeamID</th>
       <th><a href="?orderBy=Team">Team</a></th>
       <th><a href="?orderBy=Uniform_Color">Uniform</th>
       <th><a href="?orderBy=State">State</th>
       <th><a href="?orderBy=Division">Division</th>
       <th><a href="?orderBy=Player_Name">Player</th>
       <th><a href="?orderBy=Position">Position</th>
       <th><a href="?orderBy=Number">Number</th>
       <th> </th>
       <th> </th>
     </tr>';
 while($row = $result->fetch_assoc()) {
     echo '<tr>' .
       '<td style="background: rgba(192,192,192, 0.8);">' . $row['TeamID']. '</td>' .
       '<td style="background: rgba(192,192,192, 0.8);">' . $row['Team']. '</td>' .
       '<td style="background: rgba(192,192,192, 0.8);">' . $row['Uniform_Color'] . '</td>' .
       '<td style="background: rgba(192,192,192, 0.8);">' . $row['State'] . '</td>' .
       '<td style="background: rgba(192,192,192, 0.8);">' . $row['Division'] . '</td>' .
       '<td style="background: rgba(192,192,192, 0.8);">' . $row['Player_Name']. '</td>' .
       '<td style="background: rgba(192,192,192, 0.8);">' . $row['Position']. '</td>' .
       '<td style="background: rgba(192,192,192, 0.8);">' . $row['Number']. '</td>' .
       '<td style="background: rgba(192,192,192, 0.8);">' . "<a href=delete.php?id=" . $row['Players_id']  ."> delete</a>" . '</td>' .
       '<td style="background: rgba(192,192,192, 0.8);">' . "<a href=PlayerForm.php?id=" . $row['Players_id']  . "> update</a>" . "<br>" . '</td>' .
     '</tr>';
}
echo '</table></div>';
}


     
?>
</div>
</body>
</html>


