<!DOCTYPE html>
<html>
<head>
<title>Liquid Phase</title>
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

<p></p><a href="index.php"><img src="logo_1775151.png" alt="logo" style="width:186px;height:30px;"></a><span style="float: right;"><a style="padding:0px 10px;">v1.0</a></span></p>

<div id="navbar">
<a class="tablink" onclick="openPage('Liquid Phase', this, 'rgb(177,51,51)')" id="defaultOpen" Style=width:80%>Liquid Phase</a>
<a class="tablink" onclick="openNav()" style=width:20%>More</a>
</div>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="index.php">Conversion</a>
    <a href="mathematical_calc.php">Mathematical Calc</a>
    <a href="#" onclick="closeNav()">Liquid Phase</a>    
    <a href="gas_phase.php">Gas Phase</a>
    <a href="multi_phase.php">Multiphase</a>
    <a href="tables_graphs.php">Tables n Graphs</a>
    <a href="glossary.php" >Glossary</a>
   </div>
</div>

<div id="Liquid Phase" class="tabcontent">

  <input type="text" id="myInput" onkeyup="searchFunction()" placeholder="Search">

  <button class="accordion"><a>API Gravity</a></button>
  <div class="panel">
     <table >
      <colgroup> <col span="1" width=150px><col span="1" width=50px></colgroup>
      <tr><td><label>Density of crude</label></td><td><label>kg/m3</label></td><td><input type="number" id=100 placeholder="0" oninput="API()" onchange="API()"></td></tr>
      <tr><td><label>Density of Water</label></td><td><label>kg/m3</label></td><td><input type="number" id=101 placeholder="0" oninput="API()" onchange="API()"></td></tr>
      <tr><td><label>Specific Gravity</label></td><td><label>-</label><td><span type="number" id=102>-</span></td></tr>
      <tr><td><label>Degree API</label></td><td><label>-</label><td><span type="number" id=103>-</span></td></tr>
      <tr><td><label>Nature of crude</label></td><td><label>-</label><td><span type="number" id=104>-</span></td></tr>
    </table>
    <script>
      function API(){
        var dCrude = parseFloat(document.getElementById(100).value);
        var dWater = parseFloat(document.getElementById(101).value);
        var sg = dCrude/dWater;
        var api = (141.5/sg)-131.5;
        document.getElementById(102).innerHTML=roundConvert(sg);
        document.getElementById(103).innerHTML=roundConvert(api);
        if (api<10){
          document.getElementById(104).innerHTML="Heavy Crude";
        } else {
          document.getElementById(104).innerHTML="Light Crude"
        } 
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
      ul = document.getElementById("Liquid Phase");
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