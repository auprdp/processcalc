var unitName = [
  ["-"],//0
  ["m", "cm", "mm","km", "Feet","Inches","Miles"],// 1 Length
  ["C", "K", "F", "R"],// 2 Temperature
  [1,1,1.8,1.8],// 3 Temperature Interval
  ["Bar g", "Atm g", "Pascal g","Kpa g","kg/cm2 g","N/m2 g","psi g","mm Hg g","mm water g" ],// 4 Pressure gauge
  ["m2","cm2","mm2","ft2","in2","Acres","Hectares"],// 5 Area
  [1,3.2808,3.6,2.2369,0.003016,1.9438 ],// 6 Velocity
  ["Nm3/hr","Sm3/hr","MMSCMD","MMSCFD","kmol/hr" ],// 7 Gas Flow
  ["m3/hr","m3/day","ft3/hr","ft3/day","kLPD","LPM","US GPM","BLPD","BLPH" ],// 8 Volumetric Flow
  ["kg/hr","lb/hr","kg/s","lb/s","kg/day","lb/day"],// 9 Mass Flow
  ["m3","cm3","mm3","liter","feet3","inch3","Gallon","Barrel" ],// 10 Volume
  [1,1000,1000000,2.20462262,0.001,0.0011023113,0.00098420653,9.80665003,9.80665003 ],// 11 Mass
  ["kg/m3","kg/L","g/cm3","g/L","mg/L","ppm","lb/ft3","lb/US gallon","S.G"],// 12 Density
  [1,1,10,1,1000,1000,0.67196898,0.020885434],// 13 Dynamic Viscosity
  [1,1000,16.12903226,119.82642663],// 14 Specific Volume
  [1,1,0.001,0.000238846,0.0002388459],// 15 Specific Heat Capacity
  [1,1,3.6,0.85984,0.5779],// 16 Thermal Conductivity
  [1,0.001,0.239006,0.000239006,0.000947817,0.000277778,0.00000027778],// 17 Energy
  ["Watt","kW","MW","J/hr","kJ/hr","kCal/hr","BTU/hr","horsepower","lb.ft/s"],// 18 Power
  [1,100,3.28084,39.37,0.10197162],// 19 Acceleration
  [1,7.23274989],// 20 Momentum
  [1,1,0.67196907],// 21 Momemtum Flux(pV2)
  ["seconds","minutes","hours","days","6 work days","5 work days","weeks","months","years"],// 22 Time
  [1,0.001,0.00001,0.000001,0.0000001,0.000000001],// 23 Number System
  [1,0.0174532925199433,0.00555555555555556,0.00277777777777778],// 24 Angle
  [1,4.42087295781517],// 25 Pressure Drop
  ["mole","kilomole","lbmole","Atom","Molecule","Avogadro No."],// 26 Mole
  [1,1000,0.0057101471],// 27 Surface Tension
  [1,0.001,0.000001,0.000125,0.000000125,0.000000000125,0.0001221,0.0000001192,0.0000000001164],// 28 Storage
  [1,0.001,0.000001,0.000125,0.000000125,0.000000000125,0.0001221,0.0000001192,0.0000000001164],// 29 Data Transfer
  [1,0.000001,1],// 30 Electrical Conductivity
  [1,882,211,379,0.0373],// 31 LHV Molar Basis
  [1,0.001,0.316998,0.000088055,0.85986],// 32 Heat Flux
  ["STD m3/m3","SCF/bbl"],// 33 Gas Oil Ratio
  [1,0.01666,0.000016666,0.000000016666,1,360],// 34 Frequency
  [1,0.000001,16.9295940059149,16.0485925705288,0.0160485925705288],// 35 Water Content
  [1,10000,1000000,10000,1550,10.8],// 36 Kinematic Viscosity
  [1,1,0.239005737931405,185.86282659037],// 37 Gas Constant
  [1,0.001,0.000001,2.39005736137667E-07,0.000429922613929493],// 38 Thermal Heat Capacity
  ["g/mol","kg/kmol","kg/mol","lb/lbmol"],// 39 Molecular Weight
  ["mole/s","mole/hr","kmole/hr","lbmole/s","lbmole/hr"],// 40 Molar Flowrate
  [1,3600,10.7639104167097,38750.077500155],// 41 Diffusivity
  [1,0.001,1000,1,0.3505,0.001],// 42 Mass Concentration
  [1,1000],// 43 Volume Concentration
  [1,1.6093444979],// 44 Running Pace
  [1,0.001,1000,1000000,1000000000000,0.00333563492142911,100000000,0.00333563492142911,100000000],// 45 Voltage
  [1,0.001,1000,0.1,2997924536.8,0.1,2997924536.8,0.1],// 46 Current
  [1,0.000001,1000000,1,1.112650029E-12,1000000000,1.112650029E-12,1000000000],// 47 Resistance
  [1,0.0245422863593972],// 48 Flux Density
  [1,0.001,0.000001,0.000238846,0.006763363,0.0037854121],// 49 Energy Density
  [1,1000000,0.946073793755913,946073.793755913,946073.793755913,0.0590625725180807,59062.5725180807,22.4139998919197],// 50 Standardized Concentration
  ["Bar a", "Atm a", "Pascal a","Kpa a","kg/cm2 a","N/m2 a","psi a","mm Hg a","mm water a" ],// 51 Pressure absolute
  ["Bar", "Atm", "Pascal","Kpa","kg/cm2","N/m2","psi","mm Hg","mm water" ],// 52 Differential Pressure

]

var unitFactor = [
  [1],// 0
  [1,100,1000,0.001,3.2808399,39.37007874,0.000621371],// 1 Length
  [0, 273.15, 32, 491.67],// 2 Temperature
  [1,1,1.8,1.8],// 3 Temperature Interval
  [1, 0.98692327, 100000,100,1.01971621,100000,14.50377377,750.0616827,10197.1621298 ],// 4 Pressure gauge
  [1,10000,1000000,10.7639,1550.0031,0.00024710538,0.0001 ],// 5 Area
  [1,3.2808,3.6,2.2369,0.003016,1.9438 ],// 6 Velocity
  [1,1.057,0.000025368,0.00089584555,0.044614973 ],// 7 Gas Flow
  [1,24,35.31466672,847.55200128,24,16.66666667,4.40286754,150.9554585,6.28981077 ],// 8 Volumetric Flow
  [1,2.20462262,0.000277777,0.00061239517,24,52.910952 ],// 9 Mass Flow
  [1,1000000,1000000000,1000,35.31466672,61023.74409,264.1720524,6.28981077 ],// 10 Volume
  [1,1000,1000000,2.20462262,0.001,0.0011023113,0.00098420653,9.80665003,9.80665003 ],// 11 Mass
  [1,0.001,0.001,1,1000,1000,0.062427961,0.0083454045,0.001],// 12 Density
  [1,1,10,1,1000,1000,0.67196898,0.020885434],// 13 Dynamic Viscosity
  [1,1000,16.12903226,119.82642663],// 14 Specific Volume
  [1,1,0.001,0.000238846,0.0002388459],// 15 Specific Heat Capacity
  [1,1,3.6,0.85984,0.5779],// 16 Thermal Conductivity
  [1,0.001,0.239006,0.000239006,0.000947817,0.000277778,0.00000027778],// 17 Energy
  [1,0.001,0.000001,3600,3.6,0.86061064,3.41517903,0.0013410221,2655.223737],// 18 Power
  [1,100,3.28084,39.37,0.10197162],// 19 Acceleration
  [1,7.23274989],// 20 Momentum
  [1,1,0.67196907],// 21 Momemtum Flux(pV2)
  [1,0.0166666666667,0.0002777777778,0.000011574074074,0.0000099206349206349,8.26719576719575E-06,1.65343915343915E-06,3.80517503805175E-07,3.17097919837646E-08],// 22 Time
  [1,0.001,0.00001,0.000001,0.0000001,0.000000001],// 23 Number System
  [1,0.0174532925199433,0.00555555555555556,0.00277777777777778],// 24 Angle
  [1,4.42087295781517],// 25 Pressure Drop
  [1,0.001,0.0022046226,6.0221415E+23,6.0221415E+23,6.0221415E+23],// 26 Mole
  [1,1000,0.0057101471],// 27 Surface Tension
  [1,0.001,0.000001,0.000125,0.000000125,0.000000000125,0.0001221,0.0000001192,0.0000000001164],// 28 Storage
  [1,0.001,0.000001,0.000125,0.000000125,0.000000000125,0.0001221,0.0000001192,0.0000000001164],// 29 Data Transfer
  [1,0.000001,1],// 30 Electrical Conductivity
  [1,882,211,379,0.0373],// 31 LHV Molar Basis
  [1,0.001,0.316998,0.000088055,0.85986],// 32 Heat Flux
  [1,5.614583],// 33 Gas Oil Ratio
  [1,0.01666,0.000016666,0.000000016666,1,360],// 34 Frequency
  [1,0.000001,16.9295940059149,16.0485925705288,0.0160485925705288],// 35 Water Content
  [1,10000,1000000,10000,1550,10.8],// 36 Kinematic Viscosity
  [1,1,0.239005737931405,185.86282659037],// 37 Gas Constant
  [1,0.001,0.000001,2.39005736137667E-07,0.000429922613929493],// 38 Thermal Heat Capacity
  [1,1,0.001,1],// 39 Molecular Weight
  [1,3600,3.6,0.00220462262184877,7.93664143865557],// 40 Molar Flowrate
  [1,3600,10.7639104167097,38750.077500155],// 41 Diffusivity
  [1,0.001,1000,1,0.3505,0.001],// 42 Mass Concentration
  [1,1000],// 43 Volume Concentration
  [1,1.6093444979],// 44 Running Pace
  [1,0.001,1000,1000000,1000000000000,0.00333563492142911,100000000,0.00333563492142911,100000000],// 45 Voltage
  [1,0.001,1000,0.1,2997924536.8,0.1,2997924536.8,0.1],// 46 Current
  [1,0.000001,1000000,1,1.112650029E-12,1000000000,1.112650029E-12,1000000000],// 47 Resistance
  [1,0.0245422863593972],// 48 Flux Density
  [1,0.001,0.000001,0.000238846,0.006763363,0.0037854121],// 49 Energy Density
  [1,1000000,0.946073793755913,946073.793755913,946073.793755913,0.0590625725180807,59062.5725180807,22.4139998919197],// 50 Standardized Concentration
  [1, 0.98692327, 100000,100,1.01971621,100000,14.50377377,750.0616827,10197.1621298 ],// 51 Pressure absolute
  [1, 0.98692327, 100000,100,1.01971621,100000,14.50377377,750.0616827,10197.1621298 ],// 52 Differential Pressure
];

  var select = document.getElementsByClassName("unit");
  for(i=0; i<=select.length; i++){
    
  unitID = Math.round(select[i].id%1*100)
    for(index in unitName[unitID]) {
      select[i].options[select[i].options.length] = new Option(unitName[unitID][index], index);
    }
  }

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



function roundConvert(numFull){
    if(numFull >1000000){
            var numRound = numFull.toFixed();
          } else if (numFull>1){
            var numRound = numFull.toFixed(6).replace(/\.?0+$/,"");
          } else if (numFull < 1){
            var numRound = numFull.toPrecision(6).replace(/\.?0+$/,"");
          } else {
            var numRound=numFull
          }
    return numRound
  }

function inputConvert(inputID,unitID,convertTo){
    var thisInputValue= parseFloat(document.getElementById(inputID).value); 
    var thisUnitName = document.getElementById(unitID).options[document.getElementById(unitID).selectedIndex].text;
    var unitFactorID = Math.round(unitID%1*100)
    thisSubUnitID = unitName[unitFactorID].indexOf(thisUnitName);
    thisConvertToID = unitName[unitFactorID].indexOf(convertTo);
    if(unitFactorID==2){
      var baseUnit=(thisInputValue-unitFactor[2][thisSubUnitID])/unitFactor[3][thisSubUnitID];
      var thisConvertValue = baseUnit*unitFactor[3][thisConvertToID]+unitFactor[2][thisConvertToID];
    } else {
    var thisConvertValue= thisInputValue*unitFactor[unitFactorID][thisConvertToID]/unitFactor[unitFactorID][thisSubUnitID]
    }
    return thisConvertValue;
}

function outputConvert(outputValue,unitID,convertFrom){
  var thisOutputValue= outputValue;
  var thisUnitName = document.getElementById(unitID).options[document.getElementById(unitID).selectedIndex].text;
  var unitFactorID = Math.round(unitID%1*100)
  thisSubUnitID = unitName[unitFactorID].indexOf(thisUnitName);
  thisConvertFromID = unitName[unitFactorID].indexOf(convertFrom);
  if(unitFactorID==2){
    var baseUnit=(thisOutputValue-unitFactor[2][thisConvertFromID])/unitFactor[3][thisConvertFromID];
    var thisConvertValue = baseUnit*unitFactor[3][thisSubUnitID]+unitFactor[2][thisSubUnitID];
  } else {
    var thisConvertValue= thisOutputValue*unitFactor[unitFactorID][thisSubUnitID]/unitFactor[unitFactorID][thisConvertFromID]
  }
  
  numRound = roundConvert(thisConvertValue)
  return numRound;
}