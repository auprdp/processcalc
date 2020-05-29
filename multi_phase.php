<!DOCTYPE html>
<html>
<head>
<title>Multiphase</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="favicon.png" />
<?php require('access.php'); ?>
<style>
  
  input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  display: inline-block;
  border: 1px solid #ccc;
  color: blue;
  font-weight: bold;
  border-radius: 4px;
  box-sizing: border-box;
  right: 1px;
}

span[type=number], select {
  width: 100%;
  padding: 12px 20px;
  display: inline-block;
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

<p></p><a href="index.php"><img src="logo_17715351.png" alt="logo" style="width:186px;height:30px;"></a><span style="float: right;"><a style="padding:0px 10px;">v1.0</a></span></p>

<div id="navbar">
<a class="tablink" onclick="openPage('Multiphase', this, 'rgb(177,153,51)')" id="defaultOpen" Style=width:80%>Multiphase</a>
<a class="tablink" onclick="openNav()" style=width:20%>More</a>
</div>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="index.php">Conversion</a>
    <a href="mathematical_calc.php">Mathematical Calc</a>
    <a href="liquid_phase.php">Liquid Phase</a>
    <a href="gas_phase.php">Gas Phase</a>
    <a href="#"onclick="closeNav()">Multiphase</a>
    <a href="tables_graphs.php">Tables n Graphs</a>
    <a href="glossary.php" >Glossary</a>
   </div>
</div>

<div id="Multiphase" class="tabcontent">

  <input type="text" id="myInput" onkeyup="searchFunction()" placeholder="Search">

  <button class="accordion"><a>Mixed Fluid Density</a></button>
  <div class="panel">
     <table >
      <colgroup> <col span="1" width=150px><col span="1" width=50px></colgroup>
      <tr><td><label>Operating Pressure</label></td><td><label>psi g</label></td><td><input type="number" id=100 placeholder="0" oninput="Mixed()" onchange="Mixed()"></td></tr>
      <tr><td><label></label></td><td><label>psi a</label><td><span type="number" id=102>-</span></td></tr>
      <tr><td><label>Operating Temperature</label></td><td><label>R</label></td><td><input type="number" id=103 placeholder="0" oninput="Mixed()" onchange="Mixed()"></td></tr>
      <tr><td><label>Liquid Flowrate</label></td><td><label>BLPD</label></td><td><input type="number" id=104 placeholder="0" oninput="Mixed()" onchange="Mixed()"></td></tr>
      <tr><td><label>Liquid Density</label></td><td><label>S.G</label></td><td><input type="number" id=105 placeholder="0" oninput="Mixed()" onchange="Mixed()"></td></tr>
      <tr><td><label>Water Flowrate</label></td><td><label>BLPD</label></td><td><input type="number" id=106 placeholder="0" oninput="Mixed()" onchange="Mixed()"></td></tr>
      <tr><td><label>Water Density</label></td><td><label>S.G</label></td><td><input type="number" id=107 placeholder="0" oninput="Mixed()" onchange="Mixed()"></td></tr>
      <tr><td><label>Gas Flowrate</label></td><td><label>MMSCFD</label></td><td><input type="number" id=108 placeholder="0" oninput="Mixed()" onchange="Mixed()"></td></tr>
      <tr><td><label>Gas Molecular Weight</label></td><td><label>-</label></td><td><input type="number" id=109 placeholder="0" oninput="Mixed()" onchange="Mixed()"></td></tr>
      <tr><td><label>Gas Z Factor</label></td><td><label>-</label></td><td><input type="number" id=110 placeholder="0" oninput="Mixed()" onchange="Mixed()"></td></tr>
      <tr><td><label>Gas Liquid Ratio</label></td><td><label>ft3/bbl</label><td><span type="number" id=111>-</span></td></tr>
      <tr><td><label>Mixture Fluid Density</label></td><td><label>lb/ft3</label><td><span type="number" id=112>-</span></td></tr>
    </table>
    <script>
      function Mixed(){
        var opg = parseFloat(document.getElementById(100).value);
        var opa = opg + 14.7;
        document.getElementById(102).innerHTML= opa;
        var ot = parseFloat(document.getElementById(103).value);
        var lflow = parseFloat(document.getElementById(104).value);
        var lden = parseFloat(document.getElementById(105).value);
        var wflow = parseFloat(document.getElementById(106).value);
        var wden = parseFloat(document.getElementById(107).value);
        var gflow = parseFloat(document.getElementById(108).value);
        var gmw = parseFloat(document.getElementById(109).value);
        var gzf = parseFloat(document.getElementById(110).value);
        var glratio = (gflow*1000000)/(lflow+wflow);

        document.getElementById(111).innerHTML= roundConvert(glratio);
        document.getElementById(112).innerHTML= roundConvert(((12409*(((lflow*lden)+(wflow*wden))/((lflow)+(wflow)))*opa)+(2.7*glratio*(gmw/29)*opa))/(198.7*opa+(glratio*ot*gzf)));

      }
    </script>
  </div>

</div>
<script src="convert.js"></script>
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
      ul = document.getElementById("Multiphase");
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