
<!DOCTYPE html>
<html>
<head>
<title>Conversion</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" rel="icon" sizes="512x512" href="favicon.png" />
<?php require('access.php'); ?>
<style>
  
  input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  right: 1px;
}
  
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

table {
  border-collapse: collapse;
  width: 100%;
}


td {
  text-align: left;
  padding: 8px;
}
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color:#333;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  text-align: center;
  }

.tablink:hover {
  background-color: #CCC;
  color: black;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  display: none;
  padding: 60px 10px;
  height: 100%;
}

.overlay {
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-y: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 10%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}

#myInput {
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}


</style>
</head>

<body>

<p></p><a href="index.php"><img href="index.php" src="logo_5117785.png" alt="logo" style="width:186px;height:30px;"></a><span style="float: right;"><a style="padding:0px 10px;">v1.0</a></span></p>

<div id="navbar">
<a class="tablink" onclick="openPage('Conversion', this, 'rgb(51,177,85)')" id="defaultOpen" Style=width:80%>Conversion</a>
<a class="tablink" onclick="openNav()" style=width:20%>More</a>


</div>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="#" onclick="closeNav()">Conversion</a>
    <a href="mathematical_calc.php">Mathematical Calc</a>
    <a href="liquid_phase.php">Liquid Phase</a>    
    <a href="gas_phase.php">Gas Phase</a>
    <a href="multi_phase.php">Multiphase</a>
    <a href="tables_graphs.php">Tables n Graphs</a>
    <a href="glossary.php">Glossary</a>
   </div>
</div>

<div id="Conversion" class="tabcontent">

  <input type="text" id="myInput" onkeyup="searchFunction()" placeholder="Search">
  
<button class="accordion"><a>Acceleration</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>m/s2</label></td><td><input type="number" id=1900 placeholder="m/s2" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>cm/s2</label></td><td><input type="number" id=1901 placeholder="cm/s2" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>ft/s2</label></td><td><input type="number" id=1902 placeholder="ft/s2" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>in/s2</label></td><td><input type="number" id=1903 placeholder="in/s2" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>G force</label></td><td><input type="number" id=1904 placeholder="G force" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Area</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>m2</label></td><td><input type="number" id=500 placeholder="m2" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>cm2</label></td><td><input type="number" id=501 placeholder="cm2" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>mm2</label></td><td><input type="number" id=502 placeholder="mm2" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>ft2</label></td><td><input type="number" id=503 placeholder="ft2" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>in2</label></td><td><input type="number" id=504 placeholder="in2" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Acres</label></td><td><input type="number" id=505 placeholder="Acres" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Hectares</label></td><td><input type="number" id=506 placeholder="Hectares" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Density</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>kg/m3</label></td><td><input type="number" id=1200 placeholder="kg/m3" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kg/L</label></td><td><input type="number" id=1201 placeholder="kg/L" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>g/cm3</label></td><td><input type="number" id=1202 placeholder="g/cm3" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>g/L</label></td><td><input type="number" id=1203 placeholder="g/L" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>mg/L</label></td><td><input type="number" id=1204 placeholder="mg/L" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>ppm</label></td><td><input type="number" id=1205 placeholder="ppm" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>lb/ft3</label></td><td><input type="number" id=1206 placeholder="lb/ft3" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>lb/US gallon</label></td><td><input type="number" id=1207 placeholder="lb/US gallon" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>S.G</label></td><td><input type="number" id=1208 placeholder="S.G" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Energy</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>Joule</label></td><td><input type="number" id=1700 placeholder="Joule" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Kilo joule</label></td><td><input type="number" id=1701 placeholder="Kilo joule" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Calorie</label></td><td><input type="number" id=1702 placeholder="Calorie" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Kilo Calorie</label></td><td><input type="number" id=1703 placeholder="Kilo Calorie" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>BTU</label></td><td><input type="number" id=1704 placeholder="BTU" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Watt.hr</label></td><td><input type="number" id=1705 placeholder="Watt.hr" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kW.hr</label></td><td><input type="number" id=1706 placeholder="kW.hr" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Gas Flow</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>Nm3/hr</label></td><td><input type="number" id=700 placeholder="Nm3/hr" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Sm3/hr</label></td><td><input type="number" id=701 placeholder="Sm3/hr" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>MMSCMD</label></td><td><input type="number" id=702 placeholder="MMSCMD" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>MMSCFD</label></td><td><input type="number" id=703 placeholder="MMSCFD" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kmol/hr</label></td><td><input type="number" id=704 placeholder="kmol/hr" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Length</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>Meter</label></td><td><input type="number" id=100 placeholder="Meter" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Centimeter</label></td><td><input type="number" id=101 placeholder="Centimeter" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
	<tr><td><label>Millimeter</label></td><td><input type="number" id=102 placeholder="Millimeter" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Kilometer</label></td><td><input type="number" id=103 placeholder="Kilometer" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Feet</label></td><td><input type="number" id=104 placeholder="Feet" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Inches</label></td><td><input type="number" id=105 placeholder="Inches" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Miles</label></td><td><input type="number" id=106 placeholder="Miles" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table>  
</div>

<button class="accordion"><a>Mass Flow</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>kg/hr</label></td><td><input type="number" id=900 placeholder="kg/hr" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>lb/hr</label></td><td><input type="number" id=901 placeholder="lb/hr" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kg/s</label></td><td><input type="number" id=902 placeholder="kg/s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>lb/s</label></td><td><input type="number" id=903 placeholder="lb/s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kg/day</label></td><td><input type="number" id=904 placeholder="kg/day" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>lb/day</label></td><td><input type="number" id=905 placeholder="lb/day" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Mass</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>kg</label></td><td><input type="number" id=1100 placeholder="kg" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>g</label></td><td><input type="number" id=1101 placeholder="g" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>mg</label></td><td><input type="number" id=1102 placeholder="mg" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>lb</label></td><td><input type="number" id=1103 placeholder="lb" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>ton (metric)</label></td><td><input type="number" id=1104 placeholder="ton (metric)" oninput="Converter(this.id,this.value,11)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>ton(US)</label></td><td><input type="number" id=1105 placeholder="ton(US)" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>ton (UK)</label></td><td><input type="number" id=1106 placeholder="ton (UK)" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Newton</label></td><td><input type="number" id=1107 placeholder="Newton" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kg.m/s2</label></td><td><input type="number" id=1108 placeholder="kg.m/s2" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Momentum</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>kg.m/s</label></td><td><input type="number" id=2000 placeholder="kg.m/s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>lb.ft/s</label></td><td><input type="number" id=2001 placeholder="lb.ft/s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Power</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>Watt</label></td><td><input type="number" id=1800 placeholder="Watt" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kW</label></td><td><input type="number" id=1801 placeholder="kW" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>MW</label></td><td><input type="number" id=1802 placeholder="MW" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>J/hr</label></td><td><input type="number" id=1803 placeholder="J/hr" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kJ/hr</label></td><td><input type="number" id=1804 placeholder="kJ/hr" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kCal/hr</label></td><td><input type="number" id=1805 placeholder="kCal/hr" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>BTU/hr</label></td><td><input type="number" id=1806 placeholder="BTU/hr" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>horsepower</label></td><td><input type="number" id=1807 placeholder="horsepower" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>lb.ft/s</label></td><td><input type="number" id=1808 placeholder="lb.ft/s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Pressure</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>Bar g</label></td><td><input type="number" id=400 placeholder="Bar g" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Atm g</label></td><td><input type="number" id=401 placeholder="Atm g" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Pascal g</label></td><td><input type="number" id=402 placeholder="Pascal g" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Kpa g</label></td><td><input type="number" id=403 placeholder="Kpa g" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kg/cm2 g</label></td><td><input type="number" id=404 placeholder="kg/cm2 g" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label style="font-size:12px">Newton/m2 g</label></td><td><input type="number" id=405 placeholder="Newton/m2 g" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>psi g</label></td><td><input type="number" id=406 placeholder="psi g" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>mm Hg g</label></td><td><input type="number" id=407 placeholder="mm Hg g" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label style="font-size:12px">mm water g</label></td><td><input type="number" id=408 placeholder="mm water g" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr style="height:30px"><td></td></tr>
  <tr><td><label>Bar a</label></td><td><input type="number" id=5100 placeholder="Bar a" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Atm a</label></td><td><input type="number" id=5101 placeholder="Atm a" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Pascal a</label></td><td><input type="number" id=5102 placeholder="Pascal a" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Kpa a</label></td><td><input type="number" id=5103 placeholder="Kpa a" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kg/cm2 a</label></td><td><input type="number" id=5104 placeholder="kg/cm2 a" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label style="font-size:12px">Newton/m2 a</label></td><td><input type="number" id=5105 placeholder="Newton/m2 a" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>psi a</label></td><td><input type="number" id=5106 placeholder="psi a" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>mm Hg a</label></td><td><input type="number" id=5107 placeholder="mm Hg a" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label style="font-size:12px">mm water a</label></td><td><input type="number" id=5108 placeholder="mm water a" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>

</table> 
</div>

<button class="accordion"><a>Specific Volume</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>m3/kg</label></td><td><input type="number" id=1400 placeholder="m3/kg" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>L/kg</label></td><td><input type="number" id=1401 placeholder="L/kg" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>ft3/Ib</label></td><td><input type="number" id=1402 placeholder="ft3/Ib" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>US gallon/lb</label></td><td><input type="number" id=1403 placeholder="US gallon/lb" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Temperature</a></button>
<div class="panel">
  <table > 
    <colgroup> <col span="1" width=100px></colgroup>
    <tr><td><label>Celcius</label></td><td><input type="number" id=200 placeholder="Celcius" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
    <tr><td><label>Kelvin</label></td><td><input type="number" id=201 placeholder="Kelvin" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
    <tr><td><label>Fahrenheit</label></td><td><input type="number" id=202 placeholder="Fahrenheit" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
    <tr><td><label>Rankine</label></td><td><input type="number" id=203 placeholder="Rankine" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  </table>
  </div>
  
<button class="accordion"><a>Temperature Interval</a></button>
<div class="panel">
<table > 
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>Celcius</label></td><td><input type="number" id=300 placeholder="Celcius" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Kelvin</label></td><td><input type="number" id=301 placeholder="Kelvin" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
	<tr><td><label>Fahrenheit</label></td><td><input type="number" id=302 placeholder="Fahrenheit" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
	<tr><td><label>Rankine</label></td><td><input type="number" id=303 placeholder="Rankine" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table>
</div>

<button class="accordion"><a>Velocity</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>m/s</label></td><td><input type="number" id=600 placeholder="m/s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>ft/s</label></td><td><input type="number" id=601 placeholder="ft/s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>km/hr</label></td><td><input type="number" id=602 placeholder="km/hr" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>miles/hr</label></td><td><input type="number" id=603 placeholder="miles/hr" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>mach</label></td><td><input type="number" id=604 placeholder="mach" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>knot</label></td><td><input type="number" id=605 placeholder="knot" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Volume</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>m3</label></td><td><input type="number" id=1000 placeholder="m3" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>cm3</label></td><td><input type="number" id=1001 placeholder="cm3" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>mm3</label></td><td><input type="number" id=1002 placeholder="mm3" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>liter</label></td><td><input type="number" id=1003 placeholder="liter" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>feet3</label></td><td><input type="number" id=1004 placeholder="feet3" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>inch3</label></td><td><input type="number" id=1005 placeholder="inch3" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Gallon</label></td><td><input type="number" id=1006 placeholder="Gallon" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Barrel</label></td><td><input type="number" id=1007 placeholder="Barrel" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Volumetric Flow</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>m3/hr</label></td><td><input type="number" id=800 placeholder="m3/hr" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>m3/day</label></td><td><input type="number" id=801 placeholder="m3/day" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>ft3/hr</label></td><td><input type="number" id=802 placeholder="ft3/hr" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>ft3/day</label></td><td><input type="number" id=803 placeholder="ft3/day" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kLPD</label></td><td><input type="number" id=804 placeholder="kLPD" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>LPM</label></td><td><input type="number" id=805 placeholder="LPM" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>US GPM</label></td><td><input type="number" id=806 placeholder="US GPM" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>BLPD/BOPD</label></td><td><input type="number" id=807 placeholder="BLPD/BOPD" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>BLPH/BOPH</label></td><td><input type="number" id=808 placeholder="BLPH/BOPH" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<p>Process Conversion</p>

<button class="accordion"><a>Diffusivity</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>m2/s</label></td><td><input type="number" id=4100 placeholder="m2/s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>m2/hr</label></td><td><input type="number" id=4101 placeholder="m2/hr" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>ft2/s</label></td><td><input type="number" id=4102 placeholder="ft2/s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>ft2/hr</label></td><td><input type="number" id=4103 placeholder="ft2/hr" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Dynamic Viscosity</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>N.s/m2</label></td><td><input type="number" id=1300 placeholder="N.s/m2" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Kg/m.s</label></td><td><input type="number" id=1301 placeholder="Kg/m.s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>g/cm.s</label></td><td><input type="number" id=1302 placeholder="g/cm.s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Pa.s</label></td><td><input type="number" id=1303 placeholder="Pa.s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>mPa.s</label></td><td><input type="number" id=1304 placeholder="mPa.s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>centipoise</label></td><td><input type="number" id=1305 placeholder="centipoise" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>lb/ft.s</label></td><td><input type="number" id=1306 placeholder="lb/ft.s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>lbf.s/ft2</label></td><td><input type="number" id=1307 placeholder="lbf.s/ft2" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Electrical Conductivity</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>&mu;S/cm</label></td><td><input type="number" id=3000 placeholder="&mu;S/cm" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>mho/cm</label></td><td><input type="number" id=3001 placeholder="mho/cm" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>&mu;mho/cm</label></td><td><input type="number" id=3002 placeholder="&mu;mho/cm" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Energy Density</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>J/m3</label></td><td><input type="number" id=4900 placeholder="J/m3" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kJ/m3</label></td><td><input type="number" id=4901 placeholder="kJ/m3" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>KJ/L</label></td><td><input type="number" id=4902 placeholder="KJ/L" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Calorie/Litre</label></td><td><input type="number" id=4903 placeholder="Calorie/Litre" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Calorie/ft3</label></td><td><input type="number" id=4904 placeholder="Calorie/ft3" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>J/Gallon</label></td><td><input type="number" id=4905 placeholder="J/Gallon" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Flux Density</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>LPM/m2</label></td><td><input type="number" id=4800 placeholder="LPM/m2" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>GPM/ft2</label></td><td><input type="number" id=4801 placeholder="GPM/ft2" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Gas Constant</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>J/mol.K</label></td><td><input type="number" id=3700 placeholder="J/mol.K" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kJ/kmol.K</label></td><td><input type="number" id=3701 placeholder="kJ/kmol.K" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Btu/lbmol.R</label></td><td><input type="number" id=3702 placeholder="Btu/lbmol.R" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>lbf.ft/lbmol.R</label></td><td><input type="number" id=3703 placeholder="lbf.ft/lbmol.R" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Gas Oil Ratio</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>STD m3/m3</label></td><td><input type="number" id=3300 placeholder="STD m3/m3" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>SCF/bbl</label></td><td><input type="number" id=3301 placeholder="SCF/bbl" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Heat Flux</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>W/m2</label></td><td><input type="number" id=3200 placeholder="W/m2" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kW/m2</label></td><td><input type="number" id=3201 placeholder="kW/m2" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Btu/hr.ft2</label></td><td><input type="number" id=3202 placeholder="Btu/hr.ft2" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Btu/s.ft2</label></td><td><input type="number" id=3203 placeholder="Btu/s.ft2" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kcal/h-m2</label></td><td><input type="number" id=3204 placeholder="kcal/h-m2" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Kinematic Viscosity</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>m2/s</label></td><td><input type="number" id=3600 placeholder="m2/s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>stokes</label></td><td><input type="number" id=3601 placeholder="stokes" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>centiStokes</label></td><td><input type="number" id=3602 placeholder="centiStokes" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>cm2/s</label></td><td><input type="number" id=3603 placeholder="cm2/s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>in2/sec</label></td><td><input type="number" id=3604 placeholder="in2/sec" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>ft2/sec</label></td><td><input type="number" id=3605 placeholder="ft2/sec" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>LHV Molar Basis</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>Btu/SCF</label></td><td><input type="number" id=3100 placeholder="Btu/SCF" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>KJ/Kgmole</label></td><td><input type="number" id=3101 placeholder="KJ/Kgmole" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kcal/Kgmole</label></td><td><input type="number" id=3102 placeholder="kcal/Kgmole" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Btu/lbmole</label></td><td><input type="number" id=3103 placeholder="Btu/lbmole" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>MJ/SCM</label></td><td><input type="number" id=3104 placeholder="MJ/SCM" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Mass Concentration</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>mg/L</label></td><td><input type="number" id=4200 placeholder="mg/L" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>g/L</label></td><td><input type="number" id=4201 placeholder="g/L" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>mg/m3</label></td><td><input type="number" id=4202 placeholder="mg/m3" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>ppm</label></td><td><input type="number" id=4203 placeholder="ppm" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>PTB</label></td><td><input type="number" id=4204 placeholder="PTB" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>ppb</label></td><td><input type="number" id=4205 placeholder="ppb" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Molar Flowrate</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>mole/s</label></td><td><input type="number" id=4000 placeholder="mole/s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>mole/hr</label></td><td><input type="number" id=4001 placeholder="mole/hr" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kmole/hr</label></td><td><input type="number" id=4002 placeholder="kmole/hr" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>lbmole/s</label></td><td><input type="number" id=4003 placeholder="lbmole/s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>lbmole/hr</label></td><td><input type="number" id=4004 placeholder="lbmole/hr" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Mole</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>mole</label></td><td><input type="number" id=2600 placeholder="mole" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kilomole</label></td><td><input type="number" id=2601 placeholder="kilomole" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>lbmole</label></td><td><input type="number" id=2602 placeholder="lbmole" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Atom</label></td><td><input type="number" id=2603 placeholder="Atom" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Molecule</label></td><td><input type="number" id=2604 placeholder="Molecule" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Avogadro No.</label></td><td><input type="number" id=2605 placeholder="Avogadro No." oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Molecular Weight</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>g/mol</label></td><td><input type="number" id=3900 placeholder="g/mol" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kg/kmol</label></td><td><input type="number" id=3901 placeholder="kg/kmol" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kg/mol</label></td><td><input type="number" id=3902 placeholder="kg/mol" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>lb/lbmol</label></td><td><input type="number" id=3903 placeholder="lb/lbmol" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Momemtum Flux(pV2)</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>kg/m.s2</label></td><td><input type="number" id=2100 placeholder="kg/m.s2" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>pa</label></td><td><input type="number" id=2101 placeholder="pa" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>lb/ft.s2</label></td><td><input type="number" id=2102 placeholder="lb/ft.s2" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Pressure Drop</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>bar/100m</label></td><td><input type="number" id=2500 placeholder="bar/100m" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>psi/100ft</label></td><td><input type="number" id=2501 placeholder="psi/100ft" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Specific Heat Capacity</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>J/kg.K</label></td><td><input type="number" id=1500 placeholder="J/kg.K" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>J/kg.C</label></td><td><input type="number" id=1501 placeholder="J/kg.C" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kJ/kg.C</label></td><td><input type="number" id=1502 placeholder="kJ/kg.C" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kcal/kg.C</label></td><td><input type="number" id=1503 placeholder="kcal/kg.C" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Btu/lb.F</label></td><td><input type="number" id=1504 placeholder="Btu/lb.F" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Standardized Concentration</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>kg/Nm3</label></td><td><input type="number" id=5000 placeholder="kg/Nm3" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>mg/Nm3</label></td><td><input type="number" id=5001 placeholder="mg/Nm3" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kg/Sm3</label></td><td><input type="number" id=5002 placeholder="kg/Sm3" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>mg/Sm3</label></td><td><input type="number" id=5003 placeholder="mg/Sm3" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kg/MMSCM</label></td><td><input type="number" id=5004 placeholder="kg/MMSCM" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>lb/SCF</label></td><td><input type="number" id=5005 placeholder="lb/SCF" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>lb/MMSCF</label></td><td><input type="number" id=5006 placeholder="lb/MMSCF" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kg/kmol</label></td><td><input type="number" id=5007 placeholder="kg/kmol" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Surface Tension</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>N/m</label></td><td><input type="number" id=2700 placeholder="N/m" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>dyne/cm</label></td><td><input type="number" id=2701 placeholder="dyne/cm" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>lbf/in</label></td><td><input type="number" id=2702 placeholder="lbf/in" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Thermal Conductivity</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>W/m.K</label></td><td><input type="number" id=1600 placeholder="W/m.K" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>W/m.C</label></td><td><input type="number" id=1601 placeholder="W/m.C" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kJ/hr.m.C</label></td><td><input type="number" id=1602 placeholder="kJ/hr.m.C" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kcal/hr.m.C</label></td><td><input type="number" id=1603 placeholder="kcal/hr.m.C" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Btu/hr.ft.F</label></td><td><input type="number" id=1604 placeholder="Btu/hr.ft.F" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Thermal Heat Capacity</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>J/kg</label></td><td><input type="number" id=3800 placeholder="J/kg" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kJ/kg</label></td><td><input type="number" id=3801 placeholder="kJ/kg" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>MJ/kg</label></td><td><input type="number" id=3802 placeholder="MJ/kg" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kcal/g</label></td><td><input type="number" id=3803 placeholder="kcal/g" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>BTU/lb</label></td><td><input type="number" id=3804 placeholder="BTU/lb" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Volume Concentration</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>ml/L</label></td><td><input type="number" id=4300 placeholder="ml/L" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>ppmv</label></td><td><input type="number" id=4301 placeholder="ppmv" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Water Content</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>lb/MMSCF</label></td><td><input type="number" id=3500 placeholder="lb/MMSCF" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>lb/SCF</label></td><td><input type="number" id=3501 placeholder="lb/SCF" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>mg/Nm3</label></td><td><input type="number" id=3502 placeholder="mg/Nm3" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>mg/STD m3</label></td><td><input type="number" id=3503 placeholder="mg/STD m3" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>g/STD m3</label></td><td><input type="number" id=3504 placeholder="g/STD m3" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<p>Other Conversion</p>

<button class="accordion"><a>Angle</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>Degree</label></td><td><input type="number" id=2400 placeholder="Degree" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Radian</label></td><td><input type="number" id=2401 placeholder="Radian" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>&Pi;</label></td><td><input type="number" id=2402 placeholder="&Pi;" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Circle</label></td><td><input type="number" id=2403 placeholder="Circle" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Current</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>Ampere</label></td><td><input type="number" id=4600 placeholder="Ampere" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kAmpere</label></td><td><input type="number" id=4601 placeholder="kAmpere" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>mAmpere</label></td><td><input type="number" id=4602 placeholder="mAmpere" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>biot</label></td><td><input type="number" id=4603 placeholder="biot" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>statAmpere</label></td><td><input type="number" id=4604 placeholder="statAmpere" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>abAmpere</label></td><td><input type="number" id=4605 placeholder="abAmpere" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>ESU</label></td><td><input type="number" id=4606 placeholder="ESU" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>EMU</label></td><td><input type="number" id=4607 placeholder="EMU" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Data Transfer</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>bps</label></td><td><input type="number" id=2900 placeholder="bps" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Kbps</label></td><td><input type="number" id=2901 placeholder="Kbps" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Mbps</label></td><td><input type="number" id=2902 placeholder="Mbps" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>KB/s</label></td><td><input type="number" id=2903 placeholder="KB/s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>MB/s</label></td><td><input type="number" id=2904 placeholder="MB/s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>GB/s</label></td><td><input type="number" id=2905 placeholder="GB/s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>KiB/s</label></td><td><input type="number" id=2906 placeholder="KiB/s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>MiB/s</label></td><td><input type="number" id=2907 placeholder="MiB/s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>GiB/s</label></td><td><input type="number" id=2908 placeholder="GiB/s" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Frequency</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>RPM</label></td><td><input type="number" id=3400 placeholder="RPM" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Hz</label></td><td><input type="number" id=3401 placeholder="Hz" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kHz</label></td><td><input type="number" id=3402 placeholder="kHz" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>MHz</label></td><td><input type="number" id=3403 placeholder="MHz" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>1/min</label></td><td><input type="number" id=3404 placeholder="1/min" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Degrees/min</label></td><td><input type="number" id=3405 placeholder="Degrees/min" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Number System</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>Full Number</label></td><td><input type="number" id=2300 placeholder="Full Number" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Thousands</label></td><td><input type="number" id=2301 placeholder="Thousands" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Lakhs</label></td><td><input type="number" id=2302 placeholder="Lakhs" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Million</label></td><td><input type="number" id=2303 placeholder="Million" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Crore</label></td><td><input type="number" id=2304 placeholder="Crore" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Billion</label></td><td><input type="number" id=2305 placeholder="Billion" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Resistance</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>Ohm</label></td><td><input type="number" id=4700 placeholder="Ohm" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>megaOhm</label></td><td><input type="number" id=4701 placeholder="megaOhm" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>microOhm</label></td><td><input type="number" id=4702 placeholder="microOhm" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Reciprocal Siemens</label></td><td><input type="number" id=4703 placeholder="Reciprocal Siemens" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>statOhm</label></td><td><input type="number" id=4704 placeholder="statOhm" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>abOhm</label></td><td><input type="number" id=4705 placeholder="abOhm" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>ESU</label></td><td><input type="number" id=4706 placeholder="ESU" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>EMU</label></td><td><input type="number" id=4707 placeholder="EMU" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Running Pace</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>min/km</label></td><td><input type="number" id=4400 placeholder="min/km" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>min/mile</label></td><td><input type="number" id=4401 placeholder="min/mile" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Storage</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>bit (b)</label></td><td><input type="number" id=2800 placeholder="bit (b)" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Kilobit (Kb)</label></td><td><input type="number" id=2801 placeholder="Kilobit (Kb)" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Megabit (Mb)</label></td><td><input type="number" id=2802 placeholder="Megabit (Mb)" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Kilobyte (KB)</label></td><td><input type="number" id=2803 placeholder="Kilobyte (KB)" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Megabyte (MB)</label></td><td><input type="number" id=2804 placeholder="Megabyte (MB)" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Gigabyte (GB)</label></td><td><input type="number" id=2805 placeholder="Gigabyte (GB)" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Kibibyte (KiB)</label></td><td><input type="number" id=2806 placeholder="Kibibyte (KiB)" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Mebibyte (MiB)</label></td><td><input type="number" id=2807 placeholder="Mebibyte (MiB)" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>Gibibyte (GiB)</label></td><td><input type="number" id=2808 placeholder="Gibibyte (GiB)" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Time</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>seconds</label></td><td><input type="number" id=2200 placeholder="seconds" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>minutes</label></td><td><input type="number" id=2201 placeholder="minutes" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>hours</label></td><td><input type="number" id=2202 placeholder="hours" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>days</label></td><td><input type="number" id=2203 placeholder="days" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>6 work days</label></td><td><input type="number" id=2204 placeholder="6 work days" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>5 work days</label></td><td><input type="number" id=2205 placeholder="5 work days" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>weeks</label></td><td><input type="number" id=2206 placeholder="weeks" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>months</label></td><td><input type="number" id=2207 placeholder="months" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>years</label></td><td><input type="number" id=2208 placeholder="years" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

<button class="accordion"><a>Voltage</a></button>
<div class="panel">
<table >
  <colgroup> <col span="1" width=100px></colgroup>
  <tr><td><label>volt</label></td><td><input type="number" id=4500 placeholder="volt" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>kVolt</label></td><td><input type="number" id=4501 placeholder="kVolt" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>mVolt</label></td><td><input type="number" id=4502 placeholder="mVolt" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>uVolt</label></td><td><input type="number" id=4503 placeholder="uVolt" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>pVolt</label></td><td><input type="number" id=4504 placeholder="pVolt" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>statVolt</label></td><td><input type="number" id=4505 placeholder="statVolt" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>abVolt</label></td><td><input type="number" id=4506 placeholder="abVolt" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>ESU</label></td><td><input type="number" id=4507 placeholder="ESU" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
  <tr><td><label>EMU</label></td><td><input type="number" id=4508 placeholder="EMU" oninput="Converter(this.id,this.value)" onchange="Converter(this.id,this.value)"></td></tr>
</table> 
</div>

</div>
<script src="convert.js"></script>
<script>

 
function Converter(source,valNum) {
  unitID= (source-source%100)/100;
  if(unitID==2){
    var baseUnit=(valNum-unitFactor[2][source%100])/unitFactor[3][source%100];
    for (i=0;i<unitFactor[unitID].length;i++){
      if(i!=source%100){
        var numFull = baseUnit*unitFactor[3][i]+unitFactor[2][i];
        document.getElementById(i+unitID*100).value=roundConvert(numFull);
      }
    }
  } else {
    var baseUnit=valNum/unitFactor[unitID][source%100];
    var i;
    for (i = 0; i < unitFactor[unitID].length; i++) {
      if(i!=source%100){
        var numFull =baseUnit*unitFactor[unitID][i];
        document.getElementById(i+unitID*100).value=roundConvert(numFull);
      }
    }
    if(unitID==4||unitID==51){
      if(unitID==4){ 
        var baseUnit2 = baseUnit+1.01325;
        var unitID2 = 51        
      } else {
        var baseUnit2 = baseUnit-1.01325;
        var unitID2 = 4 
      }
      
      for (i = 0; i < unitFactor[unitID2].length; i++) {
        var numFull =baseUnit2*unitFactor[unitID2][i];
        document.getElementById(i+unitID2*100).value=roundConvert(numFull);
      }
      
    }
  }
}
</script>

<script>
  function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
</script>

<script>
var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
<script>
  function openNav() {
    document.getElementById("myNav").style.height = "100%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.height = "0%";
  }
  </script>
<script>
  window.onscroll = function() {myFunction()};
  
  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;
  
  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
   }
</script>

<script>
function searchFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("Conversion");
    li = ul.getElementsByTagName("button");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
    
    var acc = document.getElementsByClassName("accordion");
    for (i = 0; i < acc.length; i++) {
    var panel = acc[i].nextElementSibling;
    if (panel.style.maxHeight) {
      acc[i].classList.toggle("active");
      panel.style.maxHeight = null;
    } 
    }

}
</script>


 </body>
</html>