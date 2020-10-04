// Mathematical Calc
function InterExtra(){
 var x1 = parseFloat(document.getElementById(100).value);
 var y1 = parseFloat(document.getElementById(101).value);
 var x2 = parseFloat(document.getElementById(102).value);
 var y2 = parseFloat(document.getElementById(103).value);
 var x3 = parseFloat(document.getElementById(104).value);
 var y4 = parseFloat(document.getElementById(107).value); 
 document.getElementById(105).innerHTML=roundConvert((x3-x1)/(x2-x1)*(y2-y1)+y1);
 document.getElementById(106).innerHTML=roundConvert(((y4-y1)/(y2-y1)*(x2-x1))+x1);
}
function Circle(){
 var d = inputConvert(200,200.01,"m");
 var r = d/2;
 var circum = 2*Math.PI*d/2;
 var area =  Math.PI*Math.pow((d/2),2);
 document.getElementById(201).innerHTML=outputConvert(r,201.01,"m");
 document.getElementById(202).innerHTML=outputConvert(circum,202.01,"m");
 document.getElementById(203).innerHTML=outputConvert(area,203.05,"m2");
}
function Cylinder(){
  
  var d = inputConvert(300,300.01,"m");
  var r = d/2;
  var l = inputConvert(302,302.01,"m");
  var sa = 2*Math.PI*r*(r+l);
  var csa = d*l
  var vol = Math.PI*Math.pow(r,2)*l;
      
  document.getElementById(301).innerHTML=outputConvert(r,301.01,"m");
  document.getElementById(303).innerHTML=outputConvert(sa,303.05,"m2");
  document.getElementById(304).innerHTML=outputConvert(csa,304.05,"m2");
  document.getElementById(305).innerHTML=outputConvert(vol,305.1,"m3");

}

//Liquid Phase

function API(){
  var dCrude = inputConvert(100,100.12,"kg/m3");
  var dWater = inputConvert(101,101.12,"kg/m3");
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

//Gas Phase

function GasFlowrate(){
  
  var mw = inputConvert(100,100.39,"kg/kmol");
  var mFlow1 = inputConvert(101,101.09,"kg/hr");
  var molFlow1 = mFlow1/mw;
  var vFlow1 = mFlow1/mw*22.414;
  var vFlow2 = inputConvert(104,104.07,"Nm3/hr");
  var molFlow2 = vFlow2/22.414;
  var mFlow2 = vFlow2/22.414*mw;
  
  document.getElementById(102).innerHTML=outputConvert(molFlow1,102.4,"kmole/hr");
  document.getElementById(103).innerHTML=outputConvert(vFlow1,103.07,"Nm3/hr");

  document.getElementById(105).innerHTML=outputConvert(molFlow2,105.4,"kmole/hr");
  document.getElementById(106).innerHTML=outputConvert(mFlow2,106.09,"kg/hr");
}

function ActualGasFlowrate(){
  
  var opg = inputConvert(200,200.04,"Kpa g");
  var opa = opg + 101.325;
  document.getElementById(201).innerHTML=outputConvert(opa,201.51,"Kpa a");
  var ot = inputConvert(202,202.02,"K");
  var z = parseFloat(document.getElementById(203).value)

  var avf1 = inputConvert(204,204.08,"m3/hr");
  var vf1 = (1*273/101.325)*(opa*avf1/(z*ot));
  document.getElementById(205).innerHTML=outputConvert(vf1,205.07,"Nm3/hr");

  var vf2 = inputConvert(206,206.07,"Nm3/hr");
  var avf2 = vf2*(101.325/opa)*(z/1)*(ot/273);
  document.getElementById(207).innerHTML=outputConvert(avf2,207.08,"m3/hr");

}


//Multiphase
function Mixed(){
  var opg = inputConvert(100,100.04,"psi g");
  var opa = opg + 14.7;
  
  document.getElementById(101).innerHTML= outputConvert(opa,101.51,"psi a");
  var ot = inputConvert(102,102.02,"R");
  var lflow = inputConvert(103,103.08,"BLPD");
  var lden = inputConvert(104,104.12,"S.G");
  var wflow = inputConvert(105,105.08,"BLPD");
  var wden = inputConvert(106,106.12,"S.G");
  var gflow = inputConvert(107,107.07,"MMSCFD");
  var gmw = inputConvert(108,108.39,"lb/lbmol");
  
  var gzf = parseFloat(document.getElementById(109).value)
  
  var glratio = (gflow*1000000)/(lflow+wflow);
  var mfden = ((12409*(((lflow*lden)+(wflow*wden))/((lflow)+(wflow)))*opa)+(2.7*glratio*(gmw/29)*opa))/(198.7*opa+(glratio*ot*gzf));
  document.getElementById(110).innerHTML= outputConvert(glratio,110.33,"SCF/bbl");
  document.getElementById(111).innerHTML= outputConvert(mfden,111.12,"lb/ft3");

}
// Instrument

function LevelSetting(){
var tnh = parseFloat(document.getElementById(100).value)
var bnh = parseFloat(document.getElementById(101).value)
var cc = tnh - bnh;
document.getElementById(102).innerHTML= cc;
document.getElementById(111).innerHTML =  roundConvert(100*(parseFloat(document.getElementById(103).value)-bnh)/cc);
document.getElementById(112).innerHTML =  roundConvert(100*(parseFloat(document.getElementById(104).value)-bnh)/cc);
document.getElementById(113).innerHTML =  roundConvert(100*(parseFloat(document.getElementById(105).value)-bnh)/cc);
document.getElementById(114).innerHTML =  roundConvert(100*(parseFloat(document.getElementById(106).value)-bnh)/cc);
document.getElementById(115).innerHTML =  roundConvert(100*(parseFloat(document.getElementById(107).value)-bnh)/cc);
}
// Pressure Vessel
function PressureVesselElliptical(){
  
  var ht = inputConvert(100,100.01,"m");
  var dia = inputConvert(101,101.01,"m");
  var rad = dia/2;
  var csa = (3.14*rad*rad);
  var nhd = parseFloat(document.getElementById(104).value);
  var sarea = ((2*Math.PI*rad*ht)+(nhd*(1.09*dia*dia)));
  var vol = ((Math.PI*(rad*rad*ht))+(((Math.PI*(dia*dia*dia)/12/2*nhd))));
  var llvl = inputConvert(110,110.01,"m");
  var wetarea = ((dia*Math.PI*llvl))+(1.09*(dia*dia));
  var lvol = ((((Math.PI*(dia*dia))/(4))*llvl))+(((Math.PI*(dia*dia*dia))/(2*12)));
  var vollfil = lvol/vol*100;
  var lflow = inputConvert(114,114.08,"m3/hr");
  var restim = lvol/lflow;
  var uwetarea = sarea-wetarea;
  var gvol = vol-lvol;
  var volgfil = 100 -vollfil;
  
  document.getElementById(102).innerHTML= outputConvert(rad,102.01,"m");
  document.getElementById(103).innerHTML= outputConvert(csa,103.05,"m2");
  document.getElementById(105).innerHTML= outputConvert(sarea,105.05,"m2");
  document.getElementById(106).innerHTML= outputConvert(vol,106.1,"m3");
  document.getElementById(111).innerHTML= outputConvert(wetarea,111.05,"m2");
  document.getElementById(112).innerHTML= outputConvert(lvol,112.1,"m3");
  document.getElementById(113).innerHTML= roundConvert(vollfil);
  document.getElementById(114).innerHTML= outputConvert(lflow,114.08,"m3/hr");
  document.getElementById(115).innerHTML= outputConvert(restim,115.22,"hours");
  document.getElementById(120).innerHTML= outputConvert(uwetarea,120.05,"m2");
  document.getElementById(121).innerHTML= outputConvert(gvol,121.1,"m3");
  document.getElementById(122).innerHTML= roundConvert(volgfil);
  
}






//Pump

function PumpDuty(){
  var vFlow = inputConvert(100,100.08,"m3/hr");
  var sPress = inputConvert(101,101.04,"Bar g");
  var dPress = inputConvert(102,102.04,"Bar g");
  var difPress = (dPress-sPress)*Math.pow(10,5)
  document.getElementById(103).innerHTML= outputConvert(difPress,103.52,"N/m2");
  var hPow = vFlow*difPress/3600/1000;
  document.getElementById(104).innerHTML= outputConvert(hPow,104.18,"kW");
  var eff = parseFloat(document.getElementById(105).value);
  var abPow = hPow/(eff/100);
  document.getElementById(106).innerHTML= outputConvert(abPow,106.18,"kW");
}

//Compressor

function Settleout(){
var opg0 = inputConvert(100,100.04,"Kpa g");
var opa0 = opg0 + 101.325;
var ot0 = inputConvert(102,102.02,"K");
var comf0 = parseFloat(document.getElementById(103).value);
var tvol0 = inputConvert(104,104.1,"m3");
var mol0 = (opa0*tvol0)/(ot0*comf0*8.314);
var volnorm0 =(opa0*tvol0/ot0)/(101.325/273);
var nt0 = (opa0*tvol0)/(comf0*8.314);
document.getElementById(101).innerHTML= outputConvert(opa0,101.51,"Kpa a");
document.getElementById(105).innerHTML= outputConvert(mol0,105.26,"mole");
document.getElementById(106).innerHTML= outputConvert(volnorm0,106.1,"m3");
document.getElementById(107).innerHTML= roundConvert(nt0);

var opg1 = inputConvert(110,110.04,"Kpa g");
var opa1 = opg1 + 101.325;
var ot1 = inputConvert(112,112.02,"K");
var comf1 = parseFloat(document.getElementById(113).value);
var tvol1 = inputConvert(114,114.1,"m3");
var mol1 = (opa1*tvol1)/(ot1*comf1*8.314);
var volnorm1 =(opa1*tvol1/ot1)/(101.325/273);
var nt1 = (opa1*tvol1)/(comf1*8.314);
document.getElementById(111).innerHTML= outputConvert(opa1,111.51,"Kpa a");
document.getElementById(115).innerHTML= outputConvert(mol1,115.26,"mole");
document.getElementById(116).innerHTML= outputConvert(volnorm1,116.1,"m3");
document.getElementById(117).innerHTML= roundConvert(nt1);

var opg2 = inputConvert(120,120.04,"Kpa g");
var opa2 = opg2 + 101.325;
var ot2 = inputConvert(122,122.02,"K");
var comf2 = parseFloat(document.getElementById(123).value);
var tvol2 = inputConvert(124,124.1,"m3");
var mol2 = (opa2*tvol2)/(ot2*comf2*8.314);
var volnorm2 =(opa2*tvol2/ot2)/(101.325/273);
var nt2 = (opa2*tvol2)/(comf2*8.314);
document.getElementById(121).innerHTML= outputConvert(opa2,121.51,"Kpa a");
document.getElementById(125).innerHTML= outputConvert(mol2,125.26,"mole");
document.getElementById(126).innerHTML= outputConvert(volnorm2,126.1,"m3");
document.getElementById(127).innerHTML= roundConvert(nt2);

var opg3 = inputConvert(130,130.04,"Kpa g");
var opa3 = opg3 + 101.325;
var ot3 = inputConvert(132,132.02,"K");
var comf3 = parseFloat(document.getElementById(133).value);
var tvol3 = inputConvert(134,134.1,"m3");
var mol3 = (opa3*tvol3)/(ot3*comf3*8.314);
var volnorm3 =(opa3*tvol3/ot3)/(101.325/273);
var nt3 = (opa3*tvol3)/(comf3*8.314);
document.getElementById(131).innerHTML= outputConvert(opa3,131.51,"Kpa a");
document.getElementById(135).innerHTML= outputConvert(mol3,135.26,"mole");
document.getElementById(136).innerHTML= outputConvert(volnorm3,136.1,"m3");
document.getElementById(137).innerHTML= roundConvert(nt3);

var mol4 = mol0 + mol1 + mol2 + mol3;
var tvol4 = tvol0 + tvol1 + tvol2 + tvol3;
var volnorm4 = volnorm0 + volnorm1 + volnorm2 + volnorm3;
var nt4 = nt0 + nt1 + nt2+ nt3;
var ot4 = nt4 / mol4;
var opa4 = (101.325*ot4*volnorm4)/(tvol4*273.15);
var opg4 = opa4 -101.325;
document.getElementById(140).innerHTML= outputConvert(mol4,140.26,"mole");
document.getElementById(141).innerHTML= outputConvert(tvol4,141.1,"m3");
document.getElementById(142).innerHTML= outputConvert(volnorm4,142.1,"m3");
document.getElementById(143).innerHTML= roundConvert(nt4);
document.getElementById(144).innerHTML= outputConvert(ot4,144.02,"K");
document.getElementById(145).innerHTML= outputConvert(opa4,145.51,"Kpa a");
document.getElementById(146).innerHTML= outputConvert(opg4,146.04,"Kpa g");
}

// Tables n Graphs

// ASME B16.5
var k=0;
var Rating=0;

function go1(which, num, win) {
Rating = which.selectedIndex;
go5();
}

function go2(which, num, win) {
k = which.selectedIndex;  
go5();
}

function go5(){
if(Rating==0){g150();}// EofIF
if(Rating==1){g300();}// EofIF
if(Rating==2){g400();}// EofIF
if(Rating==3){g600();}// EofIF
if(Rating==4){g900();}// EofIF
if(Rating==5){g1500();}// EofIF
if(Rating==6){g2500();}// EofIF
}

function g150(){
if(k== 0){var Mat = new Array(285,260,230,200,170,140,125,110,95,80,65,50,35,20);}// EofIF
if(k== 1){Mat = new Array(290,260,230,200,170,140,125,110,95,80,65,50,35,20);}// EofIF
if(k== 2){Mat = new Array(265,250,230,200,170,140,125,110,95,80,65,50,35,20);}// EofIF
if(k== 3){Mat = new Array(235,215,210,200,170,140,125,110,95,80,65,50,35,20);}// EofIF
if(k== 4){Mat = new Array(265,260,230,200,170,140,125,110,95,80,65,50,35,20);}// EofIF
if(k== 5){Mat = new Array(290,260,230,200,170,140,125,110,95,80,65,50,35,20);}// EofIF
if(k== 6){Mat = new Array(290,260,230,200,170,140,125,110,95,80,65,50,35,20);}// EofIF
if(k== 7){Mat = new Array(290,260,230,200,170,140,125,110,95,80,65,50,35,20);}// EofIF
if(k== 8){Mat = new Array(290,260,230,200,170,140,125,110,95,80,65,50,35,20);}// EofIF
if(k== 9){Mat = new Array(290,260,230,200,170,140,125,110,95,80,65,50,35,20);}// EofIF
if(k== 10){Mat = new Array(275,230,205,190,170,140,125,110,95,80,65,50,35,20);}// EofIF
if(k== 11){Mat = new Array(275,235,215,195,170,140,125,110,95,80,65,50,35,20);}// EofIF
if(k== 12){Mat = new Array(230,195,175,160,145,140,125,110,95,80,65,0,0,0);}// EofIF
if(k== 13){Mat = new Array(275,245,230,200,170,140,125,110,95,80,65,50,35,20);}// EofIF
if(k== 14){Mat = new Array(275,255,230,200,170,140,125,110,95,80,65,50,35,20);}// EofIF
if(k== 15){Mat = new Array(260,230,220,200,170,140,125,110,95,80,65,50,35,20);}// EofIF
if(k== 16){Mat = new Array(260,235,220,200,170,140,125,110,95,80,65,50,35,20);}// EofIF
if(k== 17){Mat = new Array(290,260,230,200,170,140,125,110,95,0,0,0,0,0);}// EofIF
test = new Array(450,450,400,375,400,450,450,450,450,450,425,425,350,425,425,400,400);
tpm=test[k];
go6(Mat);
}

function g300(){
if(k== 0){Mat = new Array(740,675,655,635,600,550,535,535,505,410,270,170,105,50,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 1){Mat = new Array(750,750,730,705,665,605,590,570,505,410,270,170,105,50,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 2){Mat = new Array(695,655,640,620,585,535,525,520,475,390,270,170,105,50,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 3){Mat = new Array(620,560,550,530,500,455,450,450,445,370,270,170,105,50,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 4){Mat = new Array(695,680,655,640,620,605,590,570,530,510,485,450,280,165,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 5){Mat = new Array(750,750,720,695,665,605,590,570,530,510,485,450,315,200,160,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 6){Mat = new Array(750,750,720,695,665,605,590,570,530,510,485,450,320,215,145,95,60,40,0,0,0,0,0,0);}// EofIF
if(k== 7){Mat = new Array(750,750,730,705,665,605,590,570,530,510,485,450,375,260,175,110,70,40,0,0,0,0,0,0);}// EofIF
if(k== 8){Mat = new Array(750,745,715,705,665,605,590,570,530,510,485,370,275,200,145,100,60,35,0,0,0,0,0,0);}// EofIF
if(k== 9){Mat = new Array(750,750,730,705,665,605,590,570,530,510,485,450,375,255,170,115,75,50,0,0,0,0,0,0);}// EofIF
if(k== 10){Mat = new Array(720,600,540,495,465,435,430,425,415,405,395,390,380,320,310,255,200,155,115,85,60,50,35,25);}// EofIF
if(k== 11){Mat = new Array(720,620,560,515,480,450,445,430,425,420,420,415,385,350,345,305,235,185,145,115,95,75,60,40);}// EofIF
if(k== 12){Mat = new Array(600,505,455,415,380,360,350,345,335,330,320,0,0,0,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 13){Mat = new Array(720,645,595,550,515,485,480,465,460,450,445,440,385,355,315,270,235,185,140,110,85,65,50,40);}// EofIF
if(k== 14){Mat = new Array(720,660,615,575,540,515,505,495,490,485,485,450,385,365,360,325,275,170,125,95,70,55,40,35);}// EofIF
if(k== 15){Mat = new Array(670,605,570,535,505,480,465,455,445,435,425,415,385,335,290,225,170,130,100,80,60,45,30,25);}// EofIF
if(k== 16){Mat = new Array(670,605,570,535,505,480,470,455,450,435,425,420,385,345,335,260,190,135,105,75,60,45,35,25);}// EofIF
if(k== 17){Mat = new Array(750,720,665,615,575,555,550,540,530,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);}// EofIF
test = new Array(1125,1125,1050,950,1050,1125,1125,1125,1125,1125,1100,1100,900,1100,1100,1025,1025);
tpm=test[k];
go6(Mat);
}

function g400(){
if(k== 0){Mat = new Array(990,900,875,845,800,730,715,710,670,550,355,230,140,70,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 1){Mat = new Array(1000,1000,970,940,885,805,785,755,670,550,355,230,140,70,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 2){Mat = new Array(925,875,850,825,775,710,695,690,630,520,355,230,140,70,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 3){Mat = new Array(825,750,730,705,665,610,600,600,590,495,355,230,140,70,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 4){Mat = new Array(925,905,870,855,830,805,785,755,710,675,650,600,375,220,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 5){Mat = new Array(1000,1000,965,925,885,805,785,755,710,675,650,600,420,270,210,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 6){Mat = new Array(1000,1000,965,925,885,805,785,755,710,675,650,600,425,290,190,130,80,50,0,0,0,0,0,0);}// EofIF
if(k== 7){Mat = new Array(1000,1000,970,940,885,805,785,755,710,675,650,600,505,345,235,145,90,55,0,0,0,0,0,0);}// EofIF
if(k== 8){Mat = new Array(1000,995,955,940,885,805,785,755,705,675,645,495,365,265,190,135,80,45,0,0,0,0,0,0);}// EofIF
if(k== 9){Mat = new Array(1000,1000,970,940,885,805,785,755,710,675,650,600,505,340,230,150,100,70,0,0,0,0,0,0);}// EofIF
if(k== 10){Mat = new Array(960,800,720,660,620,580,575,565,555,540,530,520,510,430,410,345,265,205,150,115,80,65,45,35);}// EofIF
if(k== 11){Mat = new Array(960,825,745,685,635,600,590,580,570,565,555,555,515,465,460,405,315,245,195,155,130,100,80,55);}// EofIF
if(k== 12){Mat = new Array(800,675,605,550,510,480,470,460,450,440,430,0,0,0,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 13){Mat = new Array(960,860,795,735,685,650,635,620,610,600,595,590,515,475,415,360,315,245,185,145,115,85,70,50);}// EofIF
if(k== 14){Mat = new Array(960,880,820,765,720,685,670,660,655,650,645,600,515,485,480,430,365,230,165,125,90,75,55,45);}// EofIF
if(k== 15){Mat = new Array(895,805,760,710,670,635,620,610,595,580,565,555,515,450,390,300,230,175,135,105,80,60,40,30);}// EofIF
if(k== 16){Mat = new Array(895,810,760,715,675,640,625,610,600,580,575,555,515,460,450,345,250,185,135,100,80,60,45,35);}// EofIF
if(k== 17){Mat = new Array(1000,960,885,820,770,740,735,725,710,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);}// EofIF
go6(Mat);
}


function g600(){
if(k== 0){Mat = new Array(1480,1350,1315,1270,1200,1095,1075,1065,1010,825,535,345,205,105,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 1){Mat = new Array(1500,1500,1455,1410,1330,1210,1175,1135,1010,825,535,345,205,105,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 2){Mat = new Array(1390,1315,1275,1235,1165,1065,1045,1035,945,780,535,345,205,105,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 3){Mat = new Array(1235,1125,1095,1060,995,915,895,895,885,740,535,345,205,105,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 4){Mat = new Array(1390,1360,1305,1280,1245,1210,1175,1135,1065,1015,975,900,560,330,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 5){Mat = new Array(1500,1500,1445,1385,1330,1210,1175,1135,1065,1015,975,900,630,405,315,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 6){Mat = new Array(1500,1500,1445,1385,1330,1210,1175,1135,1065,1015,975,900,640,430,290,190,125,75,0,0,0,0,0,0);}// EofIF
if(k== 7){Mat = new Array(1500,1500,1455,1410,1330,1210,1175,1135,1065,1015,975,900,755,520,350,220,135,80,0,0,0,0,0,0);}// EofIF
if(k== 8){Mat = new Array(1500,1490,1430,1410,1330,1210,1175,1135,1055,1015,965,740,550,400,290,200,125,70,0,0,0,0,0,0);}// EofIF
if(k== 9){Mat = new Array(1500,1500,1455,1410,1330,1210,1175,1135,1065,1015,975,900,755,505,345,225,150,105,0,0,0,0,0,0);}// EofIF
if(k== 10){Mat = new Array(1440,1200,1080,995,930,875,860,850,830,805,790,780,765,640,615,515,400,310,225,170,125,95,70,55);}// EofIF
if(k== 11){Mat = new Array(1440,1240,1120,1025,955,900,890,870,855,845,835,830,775,700,685,610,475,370,295,235,190,150,115,85);}// EofIF
if(k== 12){Mat = new Array(1200,1015,910,825,765,720,700,685,670,660,645,0,0,0,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 13){Mat = new Array(1440,1290,1190,1105,1030,975,955,0.93,915,900,895,885,775,715,625,545,465,370,280,220,170,130,105,75);}// EofIF
if(k== 14){Mat = new Array(1440,1320,1230,1145,1080,1025,1010,990,985,975,970,900,775,725,720,645,550,345,245,185,135,110,80,70);}// EofIF
if(k== 15){Mat = new Array(1345,1210,1140,1065,1010,955,930,910,895,870,850,830,775,670,585,445,345,260,200,160,115,90,60,50);}// EofIF
if(k== 16){Mat = new Array(1345,1215,1140,1070,1015,960,935,910,900,875,855,835,775,685,670,520,375,275,205,150,115,90,65,50);}// EofIF
if(k== 17){Mat = new Array(1500,1440,1330,1230,1150,1115,1100,1085,1065,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);}// EofIF
test = new Array(2225,2250,2100,1875,2100,2250,2250,2250,2250,2250,2175,2175,1800,2175,2175,2025,2025);
tpm=test[k];
go6(Mat);
}

function g900(){
if(k== 0){Mat = new Array(2220,2025,1970,1900,1795,1640,1610,1600,1510,1235,805,515,310,155,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 1){Mat = new Array(2250,2250,2185,2115,1995,1815,1765,1705,1510,1235,805,515,310,155,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 2){Mat = new Array(2085,1970,1915,1850,1745,1600,1570,1555,1420,1175,805,515,310,155,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 3){Mat = new Array(1850,1685,1640,1585,1495,1370,1345,1345,1325,1110,805,515,310,155,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 4){Mat = new Array(2085,2035,1955,1920,1865,1815,1765,1705,1595,1525,1460,1350,845,495,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 5){Mat = new Array(2250,2250,2165,2080,1995,1815,1765,1705,1595,1525,1460,1350,945,605,475,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 6){Mat = new Array(2250,2250,2165,2080,1995,1815,1765,1705,1595,1525,1460,1350,955,650,430,290,185,115,0,0,0,0,0,0);}// EofIF
if(k== 7){Mat = new Array(2250,2250,2185,2115,1995,1815,1765,1705,1595,1525,1460,1350,1130,780,525,330,205,125,0,0,0,0,0,0);}// EofIF
if(k== 8){Mat = new Array(2250,2235,2150,2115,1995,1815,1765,1705,1585,1525,1450,1110,825,595,430,300,185,105,0,0,0,0,0,0);}// EofIF
if(k== 9){Mat = new Array(2250,2250,2185,2115,1995,1815,1765,1705,1595,1525,1460,1350,1130,760,515,340,225,155,0,0,0,0,0,0);}// EofIF
if(k== 10){Mat = new Array(2160,1800,1620,1490,1395,1310,1290,1275,1245,1210,1190,1165,1145,965,925,770,595,465,340,255,185,145,105,80);}// EofIF
if(k== 11){Mat = new Array(2160,1860,1680,1540,1435,1355,1330,1305,1280,1265,1255,1245,1160,1050,1030,915,710,555,440,350,290,225,175,125);}// EofIF
if(k== 12){Mat = new Array(1800,1520,1360,1240,1145,1080,1050,1030,1010,985,965,0,0,0,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 13){Mat = new Array(2160,1935,1785,1655,1545,1460,1435,1395,1375,1355,1340,1325,1160,1070,940,815,710,555,420,330,255,195,155,115);}// EofIF
if(k== 14){Mat = new Array(2160,1980,1845,1720,1620,1540,1510,1485,1475,1460,1455,1350,1160,1090,1080,965,825,515,370,280,205,165,125,105);}// EofIF
if(k== 15){Mat = new Array(2015,1815,1705,1600,1510,1435,1395,1370,1340,1305,1275,1245,1160,1010,875,670,515,390,300,235,175,135,95,70);}// EofIF
if(k== 16){Mat = new Array(2015,1820,1705,1605,1520,1440,1405,1370,1345,1310,1280,1255,1160,1030,1010,780,565,410,310,225,175,135,100,75);}// EofIF
if(k== 17){Mat = new Array(2250,2160,1995,1845,1730,1670,1650,1625,1595,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);}// EofIF
test = new Array(3350,3375,3125,2775,3125,3375,3375,3375,3375,3375,3225,3225,2700,3225,3225,3000,3000);
tpm=test[k];
go6(Mat);
}

function g1500(){
if(k== 0){Mat = new Array(3705,3375,3280,3170,2995,2735,2685,2665,2520,2060,1340,860,515,260,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 1){Mat = new Array(3750,3750,3640,3530,3325,3025,2940,2840,2520,2060,1340,860,515,260,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 2){Mat = new Array(3470,3280,3190,3085,2910,2665,2615,2590,2365,1955,1340,860,515,260,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 3){Mat = new Array(3085,2810,2735,2645,2490,2285,2245,2245,2210,1850,1340,860,515,260,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 4){Mat = new Array(3470,3395,3260,3200,3105,3025,2940,2840,2660,2540,2435,2245,1405,825,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 5){Mat = new Array(3750,3750,3610,3465,3325,3025,2940,2840,2660,2540,2435,2245,1575,1010,790,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 6){Mat = new Array(3750,3750,3610,3465,3325,3025,2940,2840,2660,2540,2435,2245,1595,1080,720,480,310,190,0,0,0,0,0,0);}// EofIF
if(k== 7){Mat = new Array(3750,3750,3640,3530,3325,3025,2940,2840,2660,2540,2435,2245,1885,1305,875,550,345,205,0,0,0,0,0,0);}// EofIF
if(k== 8){Mat = new Array(3750,3725,3580,3530,3325,3025,2940,2840,2640,2540,2415,1850,1370,995,720,495,310,170,0,0,0,0,0,0);}// EofIF
if(k== 9){Mat = new Array(3750,3750,3640,3530,3325,3025,2940,2840,2660,2540,2435,2245,1885,1270,855,565,375,255,0,0,0,0,0,0);}// EofIF
if(k== 10){Mat = new Array(3600,3000,2700,2485,2330,2185,2150,2125,2075,2015,1980,1945,1910,1605,1545,1285,995,770,565,430,310,240,170,135);}// EofIF
if(k== 11){Mat = new Array(3600,3095,2795,2570,2390,2255,2220,2170,2135,2110,2090,2075,1930,1750,1720,1525,1185,925,735,585,480,380,290,205);}// EofIF
if(k== 12){Mat = new Array(3000,2530,2270,2065,1910,1800,1750,1715,1680,1645,1610,0,0,0,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 13){Mat = new Array(3600,3230,2975,2760,2570,2435,2390,2330,2290,2255,2230,2210,1930,1785,1565,1360,1185,925,705,550,430,325,255,190);}// EofIF
if(k== 14){Mat = new Array(3600,3300,3070,2870,2700,2570,2520,2470,2460,2435,2425,2245,1930,1820,1800,1610,1370,855,615,465,345,275,205,170);}// EofIF
if(k== 15){Mat = new Array(3360,3025,2845,2665,2520,2390,2330,2280,2230,2170,2125,2075,1930,1680,1460,1115,860,650,495,395,290,225,155,120);}// EofIF
if(k== 16){Mat = new Array(3360,3035,2845,2675,2530,2400,2340,2280,2245,2185,2135,2090,1930,1720,1680,1305,945,685,515,375,290,225,165,130);}// EofIF
if(k== 17){Mat = new Array(3750,3600,3325,3070,2880,2785,2750,2710,2660,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);}// EofIF
go6(Mat);
}

function g2500(){
if(k== 0){Mat = new Array(6170,5625,5470,5280,4990,4560,4475,4440,4200,3430,2230,1430,860,430,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 1){Mat = new Array(6250,6250,6070,5880,5540,5040,4905,4730,4200,3430,2230,1430,860,430,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 2){Mat = new Array(5785,5470,5315,5145,4850,4440,4355,4320,3945,3260,2230,1430,860,430,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 3){Mat = new Array(5145,4680,4560,4405,4150,3805,3740,3740,3685,3085,2230,1430,860,430,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 4){Mat = new Array(5785,5660,5435,5330,5180,5040,4905,4730,4430,4230,4060,3745,2345,1370,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 5){Mat = new Array(6250,6250,6015,5775,5540,5040,4905,4730,4430,4230,4060,3745,2630,1685,1315,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 6){Mat = new Array(6250,6250,6015,5775,5540,5040,4905,4730,4430,4230,4060,3745,2655,1800,1200,800,515,315,0,0,0,0,0,0);}// EofIF
if(k== 7){Mat = new Array(6250,6250,6070,5880,5540,5040,4905,4730,4430,4230,4060,3745,3145,2170,1455,915,570,345,0,0,0,0,0,0);}// EofIF
if(k== 8){Mat = new Array(6250,6205,5965,5880,5540,5040,4905,4730,4400,4230,4030,3085,2285,1655,1200,830,515,285,0,0,0,0,0,0);}// EofIF
if(k== 9){Mat = new Array(6250,6250,6070,5880,5540,5040,4905,4730,4430,4230,4060,3745,3145,2115,1430,945,630,430,0,0,0,0,0,0);}// EofIF
if(k== 10){Mat = new Array(6000,5000,4500,4140,3880,3640,3580,3540,3460,3360,3300,3240,3180,2675,2570,2145,1655,1285,945,715,515,400,285,230);}// EofIF
if(k== 11){Mat = new Array(6000,5160,4660,4280,3980,3760,3700,3620,3560,3520,3480,3460,3220,2915,2865,2545,1970,1545,1230,970,800,630,485,345);}// EofIF
if(k== 12){Mat = new Array(5000,4220,3780,3440,3180,3000,2920,2860,2800,2740,2680,0,0,0,0,0,0,0,0,0,0,0,0,0);}// EofIF
if(k== 13){Mat = new Array(6000,5380,4960,4600,4285,4060,3980,3880,3820,3760,3720,3680,3220,2970,2605,2265,1970,1545,1170,915,715,545,430,315);}// EofIF
if(k== 14){Mat = new Array(6000,5500,5120,4780,4500,4280,4200,4120,4100,4060,4040,3745,3220,3030,13000,2685,2285,1430,1030,770,570,455,345,285);}// EofIF
if(k== 15){Mat = new Array(5600,5040,4740,4440,4200,3980,3880,3800,3720,3620,3540,3460,3220,2800,2430,1860,1430,1085,830,660,485,370,260,200);}// EofIF
if(k== 16){Mat = new Array(5600,5060,4740,4260,4220,4000,3900,3800,3740,3640,3560,3480,3220,2865,2800,2170,1570,1145,855,630,485,370,275,215);}// EofIF
if(k== 17){Mat = new Array(6250,6000,5540,5120,4800,4640,4580,4520,4430,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);}// EofIF
go6(Mat);
}

function go6(Mat){
  temp = new Array(100, 200, 300, 400, 500, 600, 650, 700, 750, 800, 850, 900, 950, 1000, 1050, 1100, 1150, 1200, 1250, 1300, 1350, 1400, 1450, 1500);
  t1=eval(document.getElementById("Temperature").value);
  t1=t1*9/5+32;
  er=0;
  if(t1 < 100){t1=100;}//EofIF
  if((t1 > 1000) && (k==0)){er=1;t1=1000; alert("Maximum Temperature for 150lb Flange = 538C, 1000F");}// EofIF
  if(t1 > 1500){er=1;t1=1500; alert("Maximum Temperature = 815C, 1500F");}// EofIF
  ii=0;do{} while(t1 > temp[++ii]);
  p=0;
  if(Mat[ii] != 0){p=(t1-temp[ii-1])/(temp[ii]-temp[ii-1])*(Mat[ii]-Mat[ii-1])+Mat[ii-1];}// EofIF
  p1 = Math.round(p*100/14.5)/100;
  if((p == 0)|| (er==1)){document.getElementById("dp").innerHTML=0;alert("Temperature Limit Exeeded For Chosen Material");}
  else{document.getElementById("dp").innerHTML=outputConvert(p1,103.04,"Bar g");}// EofIF
  }

