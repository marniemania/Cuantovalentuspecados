<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="de">
<head>
<title>S&uuml;ndenrechner | Wie viel kosten deine S&uuml;nden?</title>
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
<div id="jeur"><form name="eus"><input type="hidden" name="eurv" value="" /></form></div>
 <div align="center">
   <table id="tra">
 <tr>
  <td>
  <h1>Wie viel kosten deine S&uuml;nden?</h1><br><br>
  <div class="index">
  Stell Dir vor, Du m&uuml;sstest heute an der Himmelst&uuml;re klingeln<br>
  und sie w&uuml;rden Dich nur hinein lassen, wenn Du am Eingang f&uuml;r<br>
  Deine Lebenss&uuml;nden bezahlst. Neben der T&uuml;r h&auml;ngt eine Tabelle,<br>
  was verschiedene S&uuml;nden kosten. Rechne doch mal aus,<br>
  was Du bezahlen m&uuml;sstest...   </div> 
     <form action="start.php" method="post">
     <input type="hidden" name="start" value="st" />
     <div align="right"><input type="submit" value="Los...!" style="background: #FFFFFF; border: 1px; border-color: #FFFFFF; font-family: Arial; font-size: 30px; color: #99CCFF; cursor:pointer;"/></div>
     </form>
    </td>
 </tr>
</table>
<br />
<h3>Es wurde bereits f&uuml;r <div id="eur"></div> Ges&uuml;ndigt!</h3>
<a href="st.php">Statistiken</a>
<br><br>
<script type="text/javascript"><!--
google_ad_client = "pub-8122320310520638";
/* 728x90, Erstellt 01.12.09 */
google_ad_slot = "9134253232";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

</div>
<div class="poweredby" style="position:absolute; right:5px; bottom:5px; border:1px dashed #FF0000; padding:5px; background-color:#FFEEEE;">
<a href="http://www.erbert.eu" target="_blank">powered by erbert.eu</a>&nbsp;&nbsp;&bull;&nbsp;
<a href="http://erbert.eu/index.php?section=guestbook" target="_blank">Guestbook</a>&nbsp;&nbsp;&bull;&nbsp;
<a href="http://www.erbert.eu/index.php?page=74" target="_blank">FAQ</a>

</div>
</body>
</html>
