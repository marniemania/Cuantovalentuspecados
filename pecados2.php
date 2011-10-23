<head>
<title>Calculadora de Pecados | Cuanto valen tus pecados?</title>
<!--Layer goes here--> <script type="text/javascript" src="http://view.binlayer.com/ad-5801.js"></script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3444863-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
<script src="inc/lib/prototype.js" type="text/javascript"></script>
<script src="inc/src/scriptaculous.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
var aktiv = window.setInterval("update()", 5000);
var i = 0;
function update () {
new Ajax.Updater('jeur', './inc/ajax.php', {asynchronous:true});
  i = i + 1;

  if (i >= 1000)
    window.clearInterval(aktiv);
}




//-->
</script>
<!--COUNT-->
<script type="text/javascript">
<!--
var seteur = window.setInterval("counteur()", 80);
var zwo, eurhaug, euinh,eumin,eupl,eurv=0,eurh=0,eurvvar,eurhvar;
function Trenner(number) {
number = '' + number;
if (number.length > 3) {
var mod = number.length % 3;
var output = (mod > 0 ? (number.substring(0,mod)) : '');
for (i=0 ; i < Math.floor(number.length / 3); i++) {
if ((mod == 0) && (i == 0))
output += number.substring(mod+ 3 * i, mod + 3 * i + 3);
else
// hier wird das Trennzeichen festgelegt mit '.'
output+= '.' + number.substring(mod + 3 * i, mod + 3 * i + 3);
}
return (output);
}
else return number;
}
function counteur() {

eurvvar=document.eus.eurv.value;
if(eurv<eurvvar){
 eumin=eurvvar-eurv;
 if     (eumin>11111111111111){ eurv = eurv+1111111111111; }
 else if(eumin>111111111111)  { eurv = eurv+111111111111; }
 else if(eumin>11111111111)   { eurv = eurv+11111111111; }
 else if(eumin>1111111111)    { eurv = eurv+1111111111; }
 else if(eumin>111111111)     { eurv = eurv+111111111; }
 else if(eumin>11111111)      { eurv = eurv+11111111; }
 else if(eumin>1111111)       { eurv = eurv+1111111; }
 else if(eumin>111111)        { eurv = eurv+111111; }
 else if(eumin>11111)         { eurv = eurv+11111; }
 else if(eumin>1111)          { eurv = eurv+1111; }
 else if(eumin>111)           { eurv = eurv+111; }
 else if(eumin>11)            { eurv = eurv+11; }
 else eurv++;

  }
else {
//NOOP
}
euinh = Trenner((eurv / 100).toFixed(2).replace('.', ',')).replace('.,', ',');
Element.update('eur', euinh + '\u20AC');

}

//-->

</script>
<!--ENDCOUNT-->
</head>
<body onLoad="update()">
<link rel=stylesheet type="text/css" href="./inc/style.css">
<div id="jeur"></div>
 <div align="center">
   <table id="tra">
 <tr>
  <td>
  <h1>Cuanto valen tus pecados?</h1><br><br>
  <div class="index">
Imaginate, hoy deberias llamar al timbre de la puerta del cielo<br>
  y solo te dejarian entrar si pagues los pecados de tu vida en la puerta<br>
  Aqui puedes calcular cuanto tendrias que pagar...   </div> 
     <form action="start.php" method="post">
     <input type="hidden" name="start" value="st" />
     <div align="right"><input type="submit" value="Dime cuanto...!" style="background: #FFFFFF; border: 1px; border-color: #FFFFFF; font-family: Arial; font-size: 30px; color: #99CCFF; cursor:pointer;"/></div>
     </form>
    </td>
 </tr>
</table>
<br />
<h3>por<div id="eur"></div> se ha pecado ya</h3>
<a href="st.php">estatisticas</a>
<br><br>


</div>
</body>
</html>
