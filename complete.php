<?php require "login/loginheader.php"; ?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "merchant";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $package = test_input($_POST["ammount"]);
  $cardnumber = test_input($_POST["cardnumber"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$dbhandle = mysql_connect($servername, $username, $password) 
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

$selected = mysql_select_db( $dbname , $dbhandle) 
  or die("Could not select examples");

$result = mysql_query("SELECT balance FROM card WHERE cardnumber = '$cardnumber'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);

$balance = $row[0]; // 42

$update = $balance - $package;

// Change Credit
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE card SET balance='$update' WHERE cardnumber = '$cardnumber'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


?>





<html>
<title>Vital Water</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <img src="images/logo2.png" alt="Vital Water" style="width:75px;height:75px;">
  <a class="navbar-brand" href="#">Vital Water</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="purchase.php">Purchase Water</a> <span class="sr-only">(current)</span>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="log.php">Log</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="report.php">Report</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login/logout.php">Log Out</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container">
<center><h2>Purchase Water</h2>
<h1>Payment in progress.....</h1>
<p>Will redict you when complete!</p>
</center>
</div>

</html>
<?php
$gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 1");
echo "LED is on";

sleep(5);
$gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 0");
echo "LED is off";

?>