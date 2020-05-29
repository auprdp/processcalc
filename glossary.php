<!DOCTYPE html>
<html>
<head>
<title>Glossary</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="favicon.png" />
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

<p></p><a href="index.php"><img src="logo_17751102.png" alt="logo" style="width:186px;height:30px;"></a><span style="float: right;"><a style="padding:0px 10px;">v1.0</a></span></p>

<div id="navbar">
<a class="tablink" onclick="openPage('Glossary', this, 'rgb(177,51,102)')" id="defaultOpen" Style=width:80%>Glossary</a>
<a class="tablink" onclick="openNav()" style=width:20%>More</a>
</div>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="index.php">Conversion</a>
    <a href="mathematical_calc.php">Mathematical Calc</a>
    <a href="liquid_phase.php">Liquid Phase</a>   
    <a href="gas_phase.php">Gas Phase</a>
    <a href="multi_phase.php">Multiphase</a>
    <a href="tables_graphs.php">Tables n Graphs</a>
    <a href="#" onclick="closeNav()">Glossary</a>
   </div>
</div>

<div id="Glossary" class="tabcontent">

  <input type="text" id="myInput" onkeyup="searchFunction()" placeholder="Search">

<button class="accordion"><a>Norsok P-001 Notes</a></button>
<div class="panel">
  <h3>Scope</h3>
  <p>scope for topside process piping and equipment design on offshore production facility</p>
  <li>design pressure and temperature</li>
  <li>safety instrumented secondary pressure production system </li>
  <li>system and equipment isolation</li>
  <li>design pressure and temperature</li>
  <p>suitable for all process , process support and utility systems</p>
  <h3>5 Design Pressure and temperature</h3>

  <h3>5.1 General</h3>
 <li> pressure relief devices, set point in accordance with design code applied for components in the system.</li>

  <h3>5.2 Maximum design pressure</h3>
 <li> Systems protected by PSV, table 1 used unless PSV manufacturer mentions other margins</li>
 <li> operating conditions>maximum operating pressure>high alarm pressure>high trip pressure> PSV set pressure</li>
 <li> 0 to 35 bar trip pressure (minimum 3.5 margin between high trip and PSV), over 35 bar trip pressure (10% of PSV set pressure)</li>
 <li> when no high trip, minimum margin applied between operating pressure and PSV</li>
 <li> for compressor suction, scrubber, cooler, maximum settle out pressure  used as maximum operating pressure</li>
 <li> when rupture disk are applied , to sufficient margin included to prevent unintentional disk rupture, to ensure system pressure protection</li>
 <li> when accurate information unavailable, shut in pressure for centrifugal compressor should be maximum operating suction pressure + 1.3 times the normal differential pressure developed by compressor, to include for pressure surge and maximum speed. Maximum operating suction pressure determined by high trip pressure from upstream separator or compressor</li>
 <li> when accurate information is unavailable, the max operating pressure for centrifugal pump should be suction pressure + 1.25 times normal differential pressure developed by pump.</li>
 <li> Care should be taken not to select higher design pressure than required, may affect material and pressure class ratings</li>
 <li> to minimise the requirements for process relief, the design pressure should be kept identical for systems with identical operating pressures</li>
 <li> piping pressure above design pressure is permissible in some occasion if allowed by design code. Duration and extent of over pressure should be logged. Logging not required if doesnt occur frequently</li>
 <li> atmospheric tanks design with full liquid till overflow line + 0.07 bar. If overflow line can be blocked or reverse flow, the atmospheric tank designed with liquid filled vent line.</li>
 <li> For flare knick our drum, design pressure = maximum operating pressure. But a safety margin added to design pressure to take into account uncertainties. No information available, table 1 used for safety margin.</li>

  <h3>5.3 Minimum design pressure</h3>
 <li> when equipment with cooling or condensing vapour or drainage or pump out may lead to pressure than atmospheric, equipped with vacuum relief or design for full vacuum.</li>

  <h3>5.4 Maximum design temperature</h3>
 <li> where max  operating temperature could be accurately determined, this temperature taken as maximum design temperature without adding safety margin. (reservoir temperature as maximum design temperature for inlet facility)</li>
 <li> when cannot accurately, max design temperature = operating temperature + 30 C. for equipments operating at ambient condition, max design temp be 50 C at north sea</li>
 <li> high temp shut down function can limit the maximum operating temperature, margin included to determine design temperature</li>
 <li> care taken not to set higher design temperature than required, it affects selection of materials and pressure rating class.</li>
 <li> Vessels and instruments subject to steam out shall be designed for temperature during steam out operation</li>
 <li> sea water systems- maximum temperature less 50C can be taken if proper calculation done. for seawater return systems,  max OP temperature calculated at minimum flowrate, which is calculated at lowest seawater supply temperature and heat exchanger without fouling.</li>
 <li> Compressor systems- maximum operating temperature, when compressor curve not available, +15 C  above design point temperature taken or when compressor curve available, the temperature at surge conditions and maximum compressor speed for normal and start up cases.</li>
 <li> Compressor systems- maximum design temperature, +15 C to max OP temp to allow margins in compressor curves and lower efficiency in future. Add another +10 as margin.</li>
 <li> Compressor suction scrubber-  higher of the following, max op temp at suction in the event cooler failure or max recycle temp in event of cooler failure or max temperature at settle out conditions or operating temp + 30 C</li>
 <li> heat exchanger- all heat exchanger both side shall have same max design temperature determined by fluid or medium. For upset conditions, overpressure of connected piping at resulting upset temperature may be acceptable.</li>
  5.5 Minimum design temperature</h3>
 <li> minimum design temperature as follows</li>
 <li> minimum operating temperature obtained during normal operation, start up, shutdown or process upsets with margin of 5 C</li>
 <li> minimum ambient temperature</li>
 <li> minimum temperature occurring during depressuring  with margin 5 C. temperature calculation shall include heat transfer between fluid and vessel, and most conservative conditions include
  <li> cool down to minimum ambient temperature after shut in PSV set pressure and temperature</li>
  <li> conditions during start-up operation following de pressurisation</li>
  <li> minimum operating temperature and maximum operating pressure</li>
 <li> minimum design temperature may be limited when de pressuring at higher temperature. Subject to approval</li>
 <li> minimum design temperature may be limited  by delaying start up or heating before start up. Subject to approval.</li>


  <h3>6 Line Sizing Criteria</h3>

  <h3>6.1 General</h3>
 <li> following constrains shall be addressed, required capacity driving pressure, flow induced forces, noise vibration, pressure surges, material degradation, liquid accumulation, sand accumulation.</li>
 <li> Permissible pipe sizes- a minimum of 2 in should be used for all to ensure mechanical integrity.  Smaller piping can be used where protection and support provided to withstand human activity. Minimu size for sewage and open drain header 4 in and subheaders 3 in. overflow pipe in atmoshperic tank shall have largest inlet pipe size as minimum. Tubing used for air, hydraulic oil and non-combustible fluids.</li>
 <li> Pipe roughness- CS non corroded 0.05mm, CS corroded 0.5mm, SS 0.05mm, Titanium and CUNI 0.05mm, GRP 0.02mm, PVC 0.0005mm</li>

  <h3>6.2 Sizing of liquid lines</h3>
 <li> velocity limitations- velocity kept low to prevent erosion, water hammer pressure surge, noise, reaction forces. Some cases minimum velocity required. When the services is intermittent, the velocity can be increased to 10m/s.</li>
 <li> Centrifugal pump suction and discharge lines- suction piping sized based on NPSH requirement. Maximum velocity and maximum pressure drops “sub cooled liquids (0.25 bar/100m) boiling liquids (0.05 bar/100m)” used. Fluid temperature atleast 15 C below boiling  point. Maximum velocity at discharge as per table 2.2 and pressure drop upto 0.9 bar/100m used.</li>
 <li> Control valve inlet lines- sized such that single phase liquid maintained</li>
 <li> fire water-based on available system pressure and allowable flow velocity. Pressure drop due to large deluge system shall be calculated on basis of most unfavourable pipe routing to those systems. Flow velocity shall not exceed table 2. upstream velocity should not exceed 10m/s. Some areas require more than 10m/s in order to hydraulically balance system, acceptable only when not causing pipe stress.</li>
 <li> Oily water systems- when size of oil drops in water is crucial, can be achieved by providing low flow. Should not exceed 3m/s. Also considered in selection of fittings and instruments to avoid shearing oil droplets.</li>

  <h3>6.3 Liquid flowing by gravity (under sizing of liquid lines)</h3>
 <li> tank overflow, drains. Minimum slope of 1:100 shall be used. With mud or sand slope shall be 1:50. </li>
 <li> Pipes running full that do not require minimum downward slope to avoid particle deposition shall be sized according to total static pressure head and maximum allowable  velocity.</li>
 <li> Near horizontal lines- when not running full sized based on maximum flow capacity.  Liquid entrance  need some acceleration to reach desired velocity. To reduce entrance pressure loss, inlet should have increased diameter than table 3. next diameter selected and reducer used.</li>
 <li> Vertical lines- vertical gravity lines shall be designed so that froude number is less than 0.3, to avoid air entrainment and ensure undisturbed flow without pulsation. Vent included at top to prevent vacuum, flashing or pulsations. Should be designed for air volumetric flow equal to liquid volumetric flow with pressure loss of maximum 0.005 bar.  Also designed  with wave motion into consideration. Liquid inlet for dump caissons should be tangential and sloped downwards. Deluge water drainage based on 50% of the available head. moody factor for turbulent flow by nikuradse formula.</li>


  <h3>6.4 Sizing of gas lines</h3>
 <li> compromise between maximum velocity and allowable pressure drop.</li>
 <li> Piping with gas at dew point and/or with droplets designed as gas line</li>
 <li> maximum velocity-  to avoid noise or vibration. 60 m/s or equation 4  = 175<li>(1/p)^0.43 which ever is lower. (normal operation)</li>
 <li> For anti surge lines, the constant 175 in equation4 replaced with 200 during process upsets, if noise level is acceptable.</li>
 <li> If solid particle exist, special attention given to erosion.</li>
 <li> Recommended pressure drop-  for 0 to 35 barg (0.001 to 0.11 bar/100m), 35-138 (0.11 to 0.2 bar/100m),  over 138 (operating P/500)</li>

  <h3>6.5 Sizing of multiphase lines</h3>
 <li> well-head flow lines, production manifolds, process headers with two phase or multiphase have velocity limits. </li>
 <li> Factors such as piping geometry, well stream composition, sand particles contamination and the material choice considered.</li>
 <li> Maximum velocity calculated using V=183*(1/p)^0.5</li>
 <li> unstable flow and slugging considered. The number and length of multiphase lines should be kept minimum.</li>
 <li> Non corrosive- for non corrosive and corrosion resistant pipe, maximum velocity should be limited to 25 m/s if sands included. </li>
 <li> Corrosive service- carbon steel corrosion rate often limits life time. With increased velocity, corrosion increases due to shear forces or increased mass transfer. 10 m/s limitation to prevent erosion of protective layer and reduce the risk for corrosion inhibitor film break down</li>
 <li> particle erosion in non corrosive service- for well stream contaminated with particles, maximum allowable velocity shall be calculated based on sand concentration, piping geometry and added erosion allowance. </li>
 <li> Software used to calculate maximum velocity and life time.</li> 
 <li> If pressure drop is available, the velocity shall be in general sufficiently high to ensure homogeneous flow, which prevents liquid accumulation and allows simple pressure drop calculation.</li>
 <li> If lower velocity required, due to limited pressure drop, problems with slugging and/or liquid accumulation in line considered.</li>

  <h3>6.6 Sizing of flare and vent lines</h3>
 <li> flare line designed to keep pV2 < 200000 kg/ms2.</li>
 <li> When selecting pipe, acoustic fatigue considered, which is affected by  relative differential pressure in upstream restriction device, temperature in flowing gas, mole weight of flowing gas, pipe diameter and wall thickness, mass flow rate.</li>
 <li> Flare headers and sub headers- maximum velocity of mach 0.6</li>
 <li> pressure safety valve lines- sized according to relevant pressure relieving design code. Maximum flowline velocity in downstream of PSV to sub -header shall be less than mach 0.6. PSV with higher velocity outlet, reducer installed to increase line size. Back pressure at PSV outlet and in block valve shall be checked.</li>
 <li> Controlled flaring lines- maximum velocity of mach 0.5</li>
 <li> de pressurisation line- max mach 0.7. pressure loss shall not impose any restriction</li>
 <li> relief lines with slug/plug flow- sizing based on slug velocity and density. Slug characteristics for basis for stress calculation and design of piping support</li>
 <li> vent line- maximum back pressure shall be 0.07 barg.</li>

  <h3> 7 detailed requirements for system and equipments</h3>

  <h3> 7.1 general</h3>
 <li> it shall  be possible to isolate equipments, instrumentation, valves and process sections during maintenance work to obtain safe working conditions for maintenance personnel</li>
 <li> minimum isolation level considered for all systems  where intervention during operation can be required. Risk associated with intervention operation  includes,</li>
  <li> requirement for equipment entry during operation</li>
  <li> fluid category</li>
  <li> operating pressure and temperature</li>
  <li> pipe dimension and system volume</li>
  <li> duration of operation</li>
  <li> frequency of operation</li>
 <li> selection of isolation determined by owner. Types of valves selected for isolation purpose is based on requirements and valve characteristics</li>

  <h3>7.2 Physical separation</h3>
 <li> highest standard of isolation and done through spectacle blind, spade spacer, spool piece .</li>
 <li> Normally requires initial isolation to install physical separation</li>
 <li> when sandwich butterfly valve used, additional spool provided for removal without disturbing butterfly valve</li>
 <li> all vessel that can be entered shall be provided with physical separation of nozzles except for nozzles not permanently connected. </li>
 <li>  Spool piece used when necessary for maintenance purposes. After removing spool piece, a blind can be installed to achieve physical separation. Applies for pumps, compressors and heat exchangers</li>




  <h3>7.3 level of isolation</h3>
 <li> highest standard of isolation first</li>
 <li> physical separation with double block and bleed- highest standard of isolation, valve barrier by closing two block valves in series and using bleed point in-between for draining. During separation, its possible  to bleed down the trapped pressure.</li>
 <li> Physical separation with single block and bleed- single block provides isolation by closing a single block valve. The single block arrangements provide initial isolation to install the physical separation. Testing isolation integrity by bleeding if pressure and monitoring pressure at the point to be isolated</li>
 <li> double block and bleed- bleed used to prove isolation integrity</li>
 <li> double block-  by blocking two block valves in series. Proving point of integrity by bleeding at point of isolation.</li>
 <li> Single block- by blocking one block valve. Proving point of integrity by bleeding at point of isolation.</li>


  <h3>7.4 Connections to flare</h3>
 <li> arrangement and location of PSV and rupture disc in accordance relevant pressure relieving design code and mechanical design code. Where Spare PSV installed, interlocking block valves used to ensure availability of PSV and correct sequence of opening/closing block valves.</li>
 <li> Blow down valve located at highest point at piping system. Shall be arranged with one blow down valve and an orifice. Isolation at downstream flare to allow maintenance and functional testing without flaring.</li>
 <li> Manual blow down required with throttle valve and block valve.</li>
 <li> Blow down line, low temperature creep back taken into account when designing</li>
 <li> when potential solidification in upstream or downstream, adequate heat tracing or insulation provided.</li>

  <h3>7.5 Connections to  vent</h3>
 <li> Atmospheric vents discharging hazardous sources shall be routed to vent system or safe location.  Hazardous open drain tank should not be connected to atmospheric vent.</li> 
 <li> Atmospheric vent discharging from non hazardous source shall be routed to atmosphere and not vent system</li>
 <li> venting during maintenance, a vent and blind or a permanent connection to common vent system to be included. For permanent connections to vent, avoid excess pressure in system and equipment connected to it by installing block and orifice. Orifice sized to protect downstream from high pressure.</li>

  <h3>7.6 Connections to drain</h3>
 <li> the drain pipe designed as system pressure</li>
 <li> pressure testing for downstream drain shall be in accordance with pressure testing requirements for downstream closed drain system</li>
 <li> level instrumentation connected permanently when instrument flushing required.  Blind left open during normal operation.</li>

  <h3>7.7 Operational drain, vent and flushing requirements</h3>
 <li> all equipments provided with high point vents and low point drains within isolation valves isolating equipments or process section. All drains and vents fitted with valves and blind flanges. Testing and mechanical completion may require additional drains and vents.</li>
 <li> Steam out ad utility connections provided with flushing and cleaning provisions fir inspection and maintenance.</li>
 <li> Blind flange provided for chemical hose attachments, for chemical cleaning in shell tube heat exchanger. Connection line Minimum 3in, but not exceeding line size. Shall be located between nozzle and block valves</li>


  <h3>8 insulation and heat tracing of piping and equipment </h3>

  <h3>8.1 general</h3>
 <li> due to corrosion under insulation, insulation generally avoided. Appropriate coating used to avoid this problem.</li>
 <li> Insulation and heat tracing selected with due consideration to safety aspects and process aspects for minimising life cycle cost. All operating mode considered</li>

  <h3>8.2 Heat conservation and frost protection</h3>
 <li> when potential hydrate formation or other solidification occur, heat tracing applied for upstream safety relief devices and blow down valves, process and safety instruments plus instrument connections and impulse line</li>
 <li> heat tracing specified to maintain temperature above hydrate formation temperature with 5 C minimum margin</li>
 <li> heating tracing applied to prevent increase in liquid viscosities.</li>
 <li> No winterization required for water line such as sea water, fresh water, produced water and completion fluid where continuous flow is assured and system is self draining after shut-down</li>
 <li> minimum flow rate of 0.02 m3/h for below 3 inches and 0.10 m3/h for above 3 inches. Sufficient to avoid freezing for up to 50m for temperature -10C and above. The flow rate increased when exposed length above 50m.</li>
 <li> For equipments and lines where stagnation could not be avoid, the time for freezing calculated and the need for insulation, heat tracing and system drainage determined.</li>
 <li> When seawater line at ambient temperature to -10 C, below 3 inch- heat trace and insulate, 3 to 10 inch – insulate, above 10 inch – no winterzation.</li>
 <li> For other liquids and ambient condition, insulation and heat tracing shall be determined</li>

</div>

</div>

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
      ul = document.getElementById("Glossary");
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