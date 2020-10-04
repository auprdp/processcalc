<?php
//put sha1() encrypted password here - example is 'hello'
$password = 'c2e2d6621334dc890bbd8a69430012c45a83bf65';

session_start();
if (!isset($_SESSION['loggedIn'])) {
    $_SESSION['loggedIn'] = false;
}

if (isset($_POST['password'])) {
    if (sha1($_POST['password']) == $password) {
        $_SESSION['loggedIn'] = true;
    } else {
      $message = "Invalid Password";
    }
} 

if (!$_SESSION['loggedIn']): ?>

<html>
<head>
<title>Login</title>

<style>
body {
  font-family: Arial;
  background-color:#eee;
 }

* {
  box-sizing: border-box;
}

/* style the container */
.container {
  position: relative;
  align:center;
  border-radius: 20px;
  background-color: rgba(255, 255, 255, 0.5);
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
  
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* style the submit button */
input[type=submit] {
  background-color: #777;
  color: white;
  cursor: pointer;
  align: center;
}

input[type=submit]:hover {
  background-color: rgb(51,177,85);
}

/* Two-column layout */
.col {
  float: center;
  width: 768px;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */


/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 768px) {
  .col {
    width: 100%;
    margin-top: 0;
    align:center;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>



</head>
  <body>
    <div class="container">
    <div class="row">
    </div> 
    <div class="row">
      <form method="post">
      <h2 style="text-align:center"><img src="login.png" alt="logo" style="width:311px;height:50px;"></h2>
      <h3 style="color:#777; text-align:center">A tool for process engineers</h3>  
      <div class="col">
        <input style="align:center" type="password"  name="password" placeholder="Password: process" required>
        <input style="align:center" type="submit" name="submit" value="Login">
      <h3 style="color:#777; text-align:center" >Mobile: +919566834723</h3> 
      <h3 style="color:#777; text-align:center">Email: pradeep@processcalc.info</h3>   
      <hr>
      <h3 style="color: black;">What's new: v1.28</h3> 
      <p style="color:#777;"> Updated on 04 Oct 2020 </p>
      <li style="color:#777;">Actual Gas Flowrate </li>
      <li style="color:#777;">Vertical Pressure Vessel (Elliptical Head) </li>
      <li style="color:#777;">Pump Duty </li>
      <li style="color:#777;">Settleout Calculation</li>
      <hr>
      <h3 style="color: black;">Content</h3>
      <h3 style="color:#777;">Conversion</h3>
      <li style="color:#777;">General Conversion</li>
      <li style="color:#777;">Process Conversion</li>
      <li style="color:#777;">Other Conversion</li>               
      <h3 style="color:#777;">Mathematical Calc</h3>
      <li style="color:#777;">Interpolation / Extrapolation</li>
      <li style="color:#777;">Circle</li>
      <li style="color:#777;">Cylinder</li>
      <h3 style="color:#777;">Liquid Phase</h3>
      <li style="color:#777;">API Gravity</li>
      <h3 style="color:#777;">Gas Phase</h3>
      <li style="color:#777;">Gas Flowrate</li>
      <li style="color:#777;">Actual Gas Flowrate</li>
      <h3 style="color:#777;">Multiphase</h3>
      <li style="color:#777;">Mixed Fluid Density</li>
      <h3 style="color:#777;">Instrument</h3>
      <li style="color:#777;">Level Setting</li>
      <h3 style="color:#777;">Pressure Vessel</h3>
      <li style="color:#777;">Vertical Pressure Vessel (Elliptical Head)</li>
      <h3 style="color:#777;">Pump</h3>
      <li style="color:#777;">Pump Duty</li>
      <h3 style="color:#777;">Compressor</h3>
      <li style="color:#777;">Settleout Calculation</li>
      <h3 style="color:#777;">Tables n Graphs</h3>
      <li style="color:#777;">ASME B16.5</li>
      <h3 style="color:#777;">Glossary</h3>
      <li style="color:#777;">NORSOK P-001 Notes</li>
      </div>

      </form>  
    </div>
    <div class="row">
    </div> 
</div>
  </body>
</html>

<?php
exit();
endif;
?>