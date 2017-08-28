<?php require "login/loginheader.php"; ?>


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

<style>
.floating-box {
    display: inline-block;
    width: 175px;
    height: 300px;
    margin: 10px;
    border: 3px solid #338AFF; 
    border-radius: 15px; 
}

th, td {
    border-bottom: 1px solid #ddd;
}
</style>

<div class="container">
<center><h2>Purchase Water</h2></center>

<form action="code.php" method="post">

<div class="floating-box" >
<center><h3>Mini-Bottle</h3></center>
<center>
  <table>
  <tr>
    <th><center>Features</center></th>
  </tr>
  <tr>
    <td><center>~500 mL fresh Drinking Water</center></td>
  </tr>
  <tr>
    <td><center>Premium Water</center></td>
  </tr>
  <tr>
    <td><center>Tested and Certified</center></td>
  </tr>
  <tr>
    <td><center>TSH 250</center></td>
  </tr>
    <tr>
    <td><center><input type="radio" name="package" value="250"> </center></td>
  </tr>
</table>
</center>
</div>

<div class="floating-box" >
<center><h3>MyBottle</h3></center>
<center>
  <table>
  <tr>
    <th><center>Features</center></th>
  </tr>
  <tr>
    <td><center>~1 Liter fresh Drinking Water</center></td>
  </tr>
  <tr>
    <td><center>Premium Water</center></td>
  </tr>
  <tr>
    <td><center>Tested and Certified</center></td>
  </tr>
  <tr>
    <td><center>TSH 500</center></td>
  </tr>
    <tr>
    <td><center><input type="radio" name="package" value="500"> </center></td>
  </tr>
</table>
</center>
</div>

<div class="floating-box" >
<center><h3>Big Bottle</h3></center>
<center>
  <table>
  <tr>
    <th><center>Features</center></th>
  </tr>
  <tr>
    <td><center>~2 Liters fresh Drinking Water</center></td>
  </tr>
  <tr>
    <td><center>Premium Water</center></td>
  </tr>
  <tr>
    <td><center>Tested and Certified</center></td>
  </tr>
  <tr>
    <td><center>TSH 1000</center></td>
  </tr>
    <tr>
    <td><center><input type="radio" name="package" value="1000"> </center></td>
  </tr>
</table>
</center>
</div>

<div class="floating-box" >
<center><h3>Xtra Big</h3></center>
<center>
  <table>
  <tr>
    <th><center>Features</center></th>
  </tr>
  <tr>
    <td><center>~3 Liters fresh Drinking Water</center></td>
  </tr>
  <tr>
    <td><center>Premium Water</center></td>
  </tr>
  <tr>
    <td><center>Tested and Certified</center></td>
  </tr>
  <tr>
    <td><center>TSH 1500</center></td>
  </tr>
    <tr>
    <td><center><input type="radio" name="package" value="1500"> </center></td>
  </tr>
</table>
</center>
</div>


<div class="floating-box" >
<center><h3>Tub</h3></center>
<center>
  <table>
  <tr>
    <th><center>Features</center></th>
  </tr>
  <tr>
    <td><center>~4 Liters fresh Drinking Water</center></td>
  </tr>
  <tr>
    <td><center>Premium Water</center></td>
  </tr>
  <tr>
    <td><center>Tested and Certified</center></td>
  </tr>
  <tr>
    <td><center>TSH 2000</center></td>
  </tr>
    <tr>
    <td><center><input type="radio" name="package" value="2000"> </center></td>
  </tr>
</table>

</center>

</div>
<center><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Purchase</button></center>

</form>
</div>

</html>
