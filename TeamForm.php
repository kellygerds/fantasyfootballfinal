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
    
<br>
<br>
<h1 style="padding-left:100px;"> <a href="index.php">Add/Update a Team</a></h1>

<form action="SuccessTeam.php" method="post" style="padding-left:100px;">
    <div>
        <label for="Team" style= "color: #fff;">Team:</label>
        <select name="Team" required>
        <option disabled selected value> -- select a team -- </option>
        <option value="Arizona Cardinals">Arizona Cardinals</option>
        <option value="Atlanta Falcons">Atlanta Falcons</option>
        <option value="Baltimore Ravens">Baltimore Ravens</option>
        <option value="Buffalo Bills">Buffalo Bills</option>
        <option value="Carolina Panthers">Carolina Panthers</option>
        <option value="Chicago Bears">Chicago Bears</option>
        <option value="Cincinnati Bengals">Cincinnati Bengals</option>
        <option value="Cleveland Browns">Cleveland Browns</option>
        <option value="Dallas Cowboys">Dallas Cowboys</option>
        <option value="Denver Broncos">Denver Broncos</option>
        <option value="Detroit Lions">Detroit Lions</option>
        <option value="Green Bay Packers">Green Bay Packers</option>
        <option value="Houston Texans">Houston Texans</option>
        <option value="Indianapolis Colts">Indianapolis Colts</option>
        <option value="Jacksonville Jaguars">Jacksonville Jaguars</option>
        <option value="Kansas City Chiefs">Kansas City Chiefs</option>
        <option value="Miami Dolphins">Miami Dolphins</option>
        <option value="Minnesota Vikings">Minnesota Vikings</option>
        <option value="New England Patriots">New England Patriots</option>
        <option value="New Orleans Saints">New Orleans Saints</option>
        <option value="New York Giants">New York Giants</option>
        <option value="New York Jets">New York Jets</option>
        <option value="Oakland Raiders">Oakland Raiders</option>
        <option value="Philadelphia Eagles">Philadelphia Eagles</option>
        <option value="Pittsburgh Steelers">Pittsburgh Steelers</option>
        <option value="San Diego Chargers">San Diego Chargers</option>
        <option value="San Francisco 49ers">San Francisco 49ers</option>
        <option value="Seattle Seahawks">Seattle Seahawks</option>
        <option value="St. Louis Rams">St. Louis Rams</option>
        <option value="Tampa Bay Buccaneers">Tampa Bay Buccaneers</option>
        <option value="Washington Redskins">Washington Redskins</option>
        </select>

    </div>

    <div>
        <label for="Uniform_Color" style= "color: #fff;">Uniform Color:</label>
        <input type="text" id="" name="Uniform_Color" / required>
    </div>

    <div>
        <label for="State" style= "color: #fff;">State:</label>
        <select name="State" required>
        <option disabled selected value> -- select a state -- </option>
        <option value="AL">AL</option>
        <option value="AK">AK</option>
        <option value="AZ">AZ</option>
        <option value="AR">AR</option>
        <option value="CA">CA</option>
        <option value="CO">CO</option>
        <option value="CT">CT</option>
        <option value="DE">DE</option>
        <option value="FL">FL</option>
        <option value="GA">GA</option>
        <option value="HI">HI</option>
        <option value="ID">ID</option>
        <option value="IL">IL</option>
        <option value="IN">IN</option>
        <option value="IA">IA</option>
        <option value="KS">KS</option>
        <option value="KY">KY</option>
        <option value="LA">LA</option>
        <option value="ME">ME</option>
        <option value="MD">MD</option>
        <option value="MA">MA</option>
        <option value="MI">MI</option>
        <option value="MN">MN</option>
        <option value="MS">MS</option>
        <option value="MO">MO</option>
        <option value="MT">MT</option>
        <option value="NE">NE</option>
        <option value="NV">NV</option>
        <option value="NH">NH</option>
        <option value="NJ">NJ</option>
        <option value="NM">NM</option>
        <option value="NY">NY</option>
        <option value="NC">NC</option>
        <option value="ND">ND</option>
        <option value="OH">OH</option>
        <option value="OK">OK</option>
        <option value="OR">OR</option>
        <option value="PA">PA</option>
        <option value="RI">RI</option>
        <option value="SC">SC</option>
        <option value="SD">SD</option>
        <option value="TN">TN</option>
        <option value="TX">TX</option>
        <option value="UT">UT</option>
        <option value="VT">VT</option>
        <option value="VA">VA</option>
        <option value="WA">WA</option>
        <option value="WV">WV</option>
        <option value="WI">WI</option>
        <option value="WY">WY</option>
        <option value="DC">DC</option>

    </select>
    </div>

        <div>
        <label for="Division" style= "color: #fff;">Division:</label>
        <select name="Division" required>
        <option disabled selected value> -- select a division -- </option>
        <option value="AFC East">AFC East</option>
        <option value="AFC West">AFC West</option>
        <option value="AFC North">AFC North</option>
        <option value="AFC South">AFC South</option>
        <option value="NFC East">NFC East</option>
        <option value="NFC West">NFC West</option>
        <option value="NFC North">NFC North</option>
        <option value="NFC South">NFC South</option>
        </select>
    </div>
    <br>
    <br>

    <div>
        <button type="submit" class="btn btn-default">Submit</button>
       
    </div>
    
</form>

</body>
</html>