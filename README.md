===== Datová schránka =====

**Diktováni - převod na text**

<html>
<!DOCTYPE html><html lang="cs"><head><meta charset="utf-8"><style>html, body{height:100%;min-height:100%;padding:0;margin:0}*{font-family: Arial, Helvetica, sans-serif;}#wr{background-image: linear-gradient(#99c 1px, transparent 1px);background-size: 28px 28px;background-repeat: repeat;background-position: 0 50px;position: relative;margin: 20px auto;padding: 0 10px 14px;width: 80%;max-width: 600px;min-width: 200px;line-height: 28px;font-size: 14px;color: #000;min-height:76%;height:auto;}#main{padding-bottom:2em;}#txt{min-height:80%;height:auto;clear:both;}#txt:focus{outline: none;}#draft{color: #ccc}#warn{display:block;color:#f00;width:100%;padding:1em;}#m2{position:absolute;bottom:10px;width:94%;}#m2in{float:left}#m2in a{display: inline;padding: 5px 10px;background: #999;color: #000;-webkit-border-radius: 4px;border-radius: 4px;text-decoration:none;margin: 0 6px 0 0;}#m2in a:hover{background: #369;color: #cff;}</style></head><body><div id="wr"><div id="main"><span id="txt" contenteditable="true">Klikni na Start.</span><span id="draft"></span><span id="warn"></span></div><div id="m2"><span id="m2in"><a href="#" onclick="action();return false;" id="btn"></a><a href="#" onclick="clearSlate();return false;" id="btnClear">Vyčistit</a></span></div></div><script>var wrk, spr;if (typeof(webkitSpeechRecognition) !=='function'){document.getElementById("txt").innerHTML="Zkuste poslední verzi Google Chrome.";document.getElementById("m2in").style.display="none";}else{spr=new webkitSpeechRecognition();spr.continuous=true;spr.maxAlternatives=5;spr.interimResults=true;spr.lang="cs";spr.onend=reset;reset();spr.onerror=function (e){var msg=e.error + " error";if ( e.error==='no-speech' ){msg="Žadný zvuk.";}else if ( e.error==='audio-capture' ){msg="Asi je něco s mikrofonem.";}else if ( e.error==='not-allowed' ){msg="Mikrofon je nepřístupný. Můžete to změnit na <a href='chrome://settings/contentExceptions#media-stream'>chrome://settings/contentExceptions#media-stream</a>";}document.getElementById("warn").innerHTML="<p>" + msg + "</p>";setTimeout(function(){document.getElementById("warn").innerHTML="";}, 5000);};spr.onresult=function (e){for (var i=e.resultIndex;i < e.results.length;++i){if (e.results[i].isFinal){var words=document.getElementById("txt");var val=e.results[i][0].transcript;if (val===" nový řádek"){val="<br>";}else if (val===" tečka" || val==="tečka"){val=". ";}else if (val===" čárka"){val=", ";}else if (val===" otazník"){val="? ";}else if (val===" vykřičník"){val="! ";}else if (val===" pomlčka"){val="- ";}else if (val===" uvozovka"){val="\" ";}else if (val===" mezera"){val=" ";}else if (val===" stop"){val="";action();}/* alert('*'+words.innerHTML+'*');*/ var l2=words.innerHTML.substr(-2);if (words.innerHTML.substr(-8)==="<br><br>"){l2=words.innerHTML.substr(-10,2);}else if (words.innerHTML.substr(-4)==="<br>"){l2=words.innerHTML.substr(-6,2);}if ((l2===". " || l2==="? " || l2==="! ") && val !=="<br>"){val=val.substr(1,1).toUpperCase() + val.substr(2);}if (words.innerHTML.length===0){val=val.substr(0,1).toUpperCase() + val.substr(1);}document.getElementById("draft").innerHTML="";words.innerHTML +=val;}else{document.getElementById("draft").innerHTML=e.results[i][0].transcript;}}};if (typeof(localStorage) !=='undefined' ){if ( localStorage.narration==='undefined' ){localStorage.narration="";}document.getElementById("txt").innerHTML=localStorage.narration;setInterval (function (){var text=document.getElementById("txt").innerHTML;if (text !==localStorage.narration){localStorage.narration=text;}}, 3000);}}function clearSlate(){if (wrk){spr.stop();}document.getElementById("txt").innerHTML="";reset();}function reset(){wrk=false;document.getElementById("btn").innerHTML="Start";}function action(){if (wrk){spr.stop();reset();}else{spr.start();wrk=true;document.getElementById("btn").innerHTML="Stop";}}</script><script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script><script type="text/javascript">_uacct="UA-117980-7";urchinTracker();</script></body>
</html>

[[http://webcache.googleusercontent.com/search?q=cache:http://www.nishkam.cz/tools/hlas/&num=1&strip=0&vwsrc=0|Zdroj diktovani na text]]

[[http://10.0.0.140/|Lexmark nastaveni online]]

[[http://support.lexmark.com/index?locale=CS&page=product&userlocale=CS_CZ&productCode=LEXMARK_CX310&focusedTab=PUBLICATIONS#1|Lexmark CX310dn - technická podpora]]

[[http://publications.lexmark.com/publications/lexmark_hardware/CX31x/UG/pdf/Lexmark_CX31x_UsersGuide_cs.pdf|Lexmark CX310dn - návod]]

[[https://www.czechpoint.cz/webfiller/FormService/Filler.Open?DocID=232099394| Konverze !vždy vytisknout konečný dokument, nebo dat do pdf]]

[[https://www.innogy24.cz/registrace/domacnost|Innogy - registrace domácnosti - neffe706 <at> seznam.cz]]

[[http://www.dsadvokat.cz/|Videa - datové schránky pro advokáty]]

[[https://www.youtube.com/watch?v=Vpq8DIScS4k|Video - návod na zřízení a ovládání datové schránky]]

[[https://www.mojedatovaschranka.cz/as/login?uri=https%3a%2f%2fwww.mojedatovaschranka.cz%2fportal%2fISDS%2f&status=NCOO|Datová schránka]]

[[https://cert.czechpoint.cz/as/login?uri=https%3a%2f%2fcert.czechpoint.cz%2fczechpoint%2fprivate%2fvkladatel%2fsablony&status=NCOO|Czech point]]

[[https://www.czechpoint.cz/portaluzivatele/p/login;jsessionid=116F1A3883BD7202F583E1BD77D3590A|Czech point - administrace]]

[[https://labs.nic.cz/cs/datovka.html|Datovka CZ.NIC]]

[[https://gitlab.labs.nic.cz/labs/qdatovka/wikis/manual|Manuál datovka]]

[[https://gitlab.labs.nic.cz/labs/qdatovka/wikis/help|FAQ datovka]]


===== Google hledání, otevře se v dalším listu =====

<html>
<form method="get" action="http://www.google.com/search" target="_blank">


<table border="0" align="center" cellpadding="0">
<tr><td>
<input type="text"   name="q" size="25" style="color:#808080;"
maxlength="255" value="Google - sem napiš co hledáš"
onfocus="if(this.value==this.defaultValue)this.value=''; this.style.color='black';" onblur="if(this.value=='')this.value=this.defaultValue; "/>
<input type="submit" value="Enter, nebo zmáčkni toto tlačítko" />
</td></tr>
</table>


</form>

</html>

===== Seznam hledání, otevře se v dalším listu =====
<html>

<form method="get" action="https://search.seznam.cz/?q=&oq=&sgId=&thru=&su=&aq=&sourceid=szn-HP" target="_blank">


<table border="0" align="center" cellpadding="0">
<tr><td>
<input type="text"   name="q" size="25" style="color:#808080;"
maxlength="255" value="Seznam - sem napiš co hledáš"
onfocus="if(this.value==this.defaultValue)this.value=''; this.style.color='black';" onblur="if(this.value=='')this.value=this.defaultValue; "/>
<input type="submit" value="Enter, nebo zmáčkni toto tlačítko" />
</td></tr>
</table>

</html>

===== Youtube hledání, otevře se v dalším listu =====
<html>
<form action="http://www.youtube.com/results" method="get" target="_blank" >
<input name="search_query" type="text" maxlength="128" />
<select name="search_type">
<option value="">Videos</option>
<option value="search_users">Channels</option>
</select>
<input type="submit" value="Enter, nebo zmáčkni toto tlačítko" />
</form>
</html>

===== Překladač, otevře se v dalším listu =====
[[https://translate.google.cz/|Překladač z češtiny a zpět]]
====== Odkazy ======

[[http://mamka.jdem.cz|Všechny tyto odkazy na mamka.jdem.cz]] nebo [[http://zivotniprostredi.php5.cz/doku.php?id=mamka|zivotniprostredi.php5.cz ]]

[[http://bednarovark.byethost33.com/info/uvod/| Návody]]

===== Seznam.cz, seznam.cz email  =====

[[https://www.seznam.cz/|Seznam.cz]]

[[https://login.szn.cz/bad-credentials?username=%40seznam.cz|Seznam.cz přihlášení do emailu]]

==== Seznam.cz ( návody ) ====

[[https://napoveda.seznam.cz/cz/login/prihlaseni-seznam-ucet/|Návod jak na email seznam.cz]]

[[https://www.youtube.com/watch?v=SrAhnLeqFjs|Jak se přihlásit do emailu seznam.cz - videonávod]]

[[https://www.youtube.com/watch?v=-_eku9c9vvI|Jak pracovat s email seznam.cz - videonávod]]



===== Google návody =====

[[https://www.google.com/intl/cs_cz/insidesearch/tipstricks/all.html|Jak hledat na google návody]]

[[http://www.romanhynek.cz/ruzne/ostatni/misc_google.htm|Google pokročilé hledání]]

===== Advokátní kancelář =====

[[http://bednarova.rk.sweb.cz/|Advokátní kancelář JUDR. ZDENKY BEDNÁŘOVÉ
RYCHNOV NAD KNĚŽNOU]]

[[http://www.sweb.cz/|Editace webu]]


===== Datové schránky =====

[[https://www.mojedatovaschranka.cz/as/login?uri=https%3a%2f%2fwww.mojedatovaschranka.cz%2fportal%2fISDS%2f&status=NCOO|Datová schránka]]

[[https://cert.czechpoint.cz/as/login?uri=https%3a%2f%2fcert.czechpoint.cz%2fczechpoint%2fprivate%2fvkladatel%2fsablony&status=NCOO|Czech point]]

[[https://www.czechpoint.cz/portaluzivatele/p/login;jsessionid=116F1A3883BD7202F583E1BD77D3590A|Czech point - administrace]]

[[https://labs.nic.cz/cs/datovka.html|Datovka CZ.NIC]]

[[https://gitlab.labs.nic.cz/labs/qdatovka/wikis/manual|Manuál datovka]]

[[https://gitlab.labs.nic.cz/labs/qdatovka/wikis/help|FAQ datovka]]

===== Evidencí veřejné správy  =====

[[http://wwwinfo.mfcr.cz/ares/ares_es.html.cz|Ares]]

===== Soudy a zastupitelství  =====

[[http://portal.justice.cz/Justice2/Uvod/Uvod.aspx|Justice.cz]]

[[http://portal.justice.cz/Justice2/Uvod/Soudy.aspx|Přehled soudů]]

[[http://portal.justice.cz/Justice2/uvod/StatniZast.aspx|Přehled státních zastupitelství]]

[[http://portal.justice.cz/Justice2/Zastupci/zastupci.html|Přehled státních zástupců]]


[[http://portal.justice.cz/Justice2/soud/soud.aspx?j=193&o=183&k=1844|Okresní soud v Rychnově nad Kněžnou]]

[[http://portal.justice.cz/Justice2/Soud/soud.aspx?j=206&o=196&k=1961|Okresní soud v Ústí nad Orlicí]]

[[http://portal.justice.cz/Justice2/soud/soud.aspx?o=152&j=162&k=1565|Okresní soud v Náchodě]]

[[http://portal.justice.cz/Justice2/soud/soud.aspx?j=143&o=133&kat=1394&d=10842|Okresní soud v Hradci Králové]]

[[http://portal.justice.cz/Justice2/soud/soud.aspx?o=193&j=203&k=1934&d=14797|Okresní soud v Trutnově]]

[[http://portal.justice.cz/Justice2/soud/soud.aspx?o=188&j=198&k=1889|Okresní soud ve Svitavách]]

[[http://portal.justice.cz/Justice2/soud/soud.aspx?j=194&o=184&kat=1853&d=8735|Okresní soud v Semilech]]

[[http://portal.justice.cz/Justice2/soud/soud.aspx?o=158&j=168&k=1619|Okresní soud v Pardubicích]]

[[http://portal.justice.cz/Justice2/soud/soud.aspx?o=136&j=146&k=1421|Okresní soud v Jičíně]]

[[http://portal.justice.cz/Justice2/soud/soud.aspx?o=131&j=141&k=1376|Okresní soud v Havlíčkově Brodě]]

[[http://portal.justice.cz/Justice2/Soud/soud.aspx?o=127&j=137&k=1340|Okresní soud v Chrudimi]]

[[http://portal.justice.cz/justice2/soud/soud.aspx?o=11&j=21&k=265 |Krajské státní zastupitelství v Hradci 
Králové]]

[[http://portal.justice.cz/justice2/soud/soud.aspx?j=57&o=47&k=620|Okresní státní zastupitelství v Hradci Králové]]


===== Zákony =====

[[https://www.zakonyprolidi.cz/|Zákony pro lidi]]

[[https://portal.gov.cz/app/zakony/?path=/portal/obcan/|Portál veřejné správy]]

[[http://business.center.cz/business/pravo/zakony/|Business center]]

[[http://zakony-online.cz/|Ley.cz]]

[[http://www.mvcr.cz/clanek/sbirka-zakonu.aspx|MV CR]]

[[http://www.zakony.cz/|Zakony.cz]]

[[http://zakony.kurzy.cz/|Kurzy.cz]]

[[http://zakony.centrum.cz/|Centrum.cz]]


===== TV online =====

[[http://www.tvprogram.cz/index.php?P_id_kategorie=56456&P_soubor=televize%2Findex.php%3F%26zobrazeni%3D%26typprg_pouze%3D%26casod%3D-1%26typzanr%3D|TV program]]

[[http://www.ceskatelevize.cz/ivysilani/podle-data-vysilani|ČT pořady online podle data]]

[[http://www.ceskatelevize.cz/porady/a-z/|Česká televize online pořady]]

[[http://novaplus.nova.cz/|Novaplus - Nova pořady online]]

[[http://play.iprima.cz/| Prima online]]

[[https://video.aktualne.cz/dvtv/?redirected=1485878604|DVTV - Drtinová a Veselovský]]

[[http://hlidacipes.org/| Žurnalistika ve veřejném zájmu]]

[[https://www.stream.cz/porady/praha-vs-prachy|Praha vs. prachy]]

[[http://slagrtv.cz/zive|Šlágr TV živě]]

===== Radio poslech online =====

[[http://www.abradio.cz/radia/|Všechna radia]]

[[http://www.abradio.cz/radio/4/radio-country/| Country radio]]

[[http://www.abradio.cz/radio/8/radio-folk/|Radio folk]]


===== Zprávy =====

[[http://www.ceskatelevize.cz/ct24/ct24| ČT24]]

[[https://news.google.cz/|Google]]

[[http://zpravy.idnes.cz/|Idnes]]

[[https://www.novinky.cz/denni-tisk?sectionId=901&id=18439914|Novinky.cz]]

[[http://tn.nova.cz/|Tv Nova]]

[[http://www.parlamentnilisty.cz/zpravy|Parlamentní listy]]

[[http://www.rozhlas.cz/zpravy/portal/|Český rozhlas zprávy]]

[[http://www.blesk.cz/zpravy|Blesk.cz]]

[[http://www.e15.cz/|Ekonomické e15.cz]]

[[http://www.reflex.cz/zpravy|Reflex]]

===== Odkazy AK =====

==== Soudy České republiky ====

[[http://www.justice.cz|Oficiální server českého soudnictví]]

[[http://portal.justice.cz/justice2/uvod/Soudy.aspx|Obecné soudy]]

[[http://www.nsoud.cz/|Nejvyšší soud ČR]]

[[http://www.nssoud.cz/Uvod/art/1|Nejvyšší správní soud ČR]]

[[http://www.usoud.cz/|Ústavní soud ČR]]


==== Veřejné informační portály ====

[[http://portal.justice.cz/justice2/uvod/uvod.aspx|Obchodní rejstřík ČR]]

[[http://portal.gov.cz|Portál veřejné správy ČR]]

[[http://nahlizenidokn.cuzk.cz/|Katastr nemovitostí ČR]]

[[http://www.rzp.cz|Živnostenský rejstřík]]

[[http://www.czechpoint.cz|Czech POINT]]

[[http://wwwinfo.mfcr.cz/ares/ares.html.cz|ARES &amp; registr podnikatelů]]

[[http://www.cak.cz|Česká advokátní komora]]

[[http://www.nkcr.cz|Notářská komora ČR]]

[[http://www.upv.cz|Úřad průmyslového vlastnictví]]

[[http://ov.ihned.cz|Obchodní věstník]]

[[http://www.justice.cz/cgi-bin/sqw1250.cgi/upkuk/s_i8.sqw|Evidence úpadců]]

[[https://isir.justice.cz/isir/common/index.do|Insolvenční rejstřík]]

====Datové schránky ====

[[https://seznam.gov.cz/ovm/welcome.do?ref=obcan|Seznam datových schránek]]

[[http://www.cak.cz/scripts/detail.php?id=7453|Datové schránky a advokáti &#8211; jak na to]]

====Portál veřejné správy ====


[[http://portal.gov.cz/portal/mapa.html|Mapa stránek]]

[[https://portal.gov.cz/app/zakony/dulezite.jsp?page=0&amp;src=dulezite&amp;rpp=100#local-content|Zákony]]

[[https://portal.gov.cz/portal/obcan/cph/|CzechPOINT]]

[[https://seznam.gov.cz/ovm/welcome.do?ref=obcan|Seznam datových schránek]]

====Ostatní ====

[[http://nalus.usoud.cz/|Ústavní soud]]

[[http://www.nssoud.cz/main0col.aspx?cls=JudikaturaBasicSearch&pageSource=0|Nejvyšší správní soud]]

[[http://www.nsoud.cz/JudikaturaNS_new/ns_web.nsf/WebSpreadSearch|Nejvyšší soud]]

[[http://aplikace.mvcr.cz/sbirka-zakonu/|Sbírka zákonů s Sbírka mezinárodních smluv]]

[[http://www.psp.cz/sqw/sbirka.sqw|Zákony s vazbou na sněmovní tisky]]

[[http://www.psp.cz/sqw/sntisk.sqw|Sněmovní tisky]]

[[http://senat.cz/xqw/xervlet/pssenat/historie|Senátní tisky]]

[[http://www.psp.cz/sqw/hp.sqw?k=82|České sněmy a Společná česko-slovenská digitální parlamentní knihovna]]

[[https://apps.odok.cz/|Návrhy zákonů a podzákonných předpisů]]

[[http://www.mzv.cz/jnp/cz/vyhledavani_smluv/index.html|Mezinárodní smlouvy]]

[[https://treaties.un.org/|Na webu OSN]]

[[http://eur-lex.europa.eu/|Evropské právo]]
====== Youtube ======

[[https://www.youtube.com/?hl=cs&gl=CZ|Youtube]]

[[https://www.youtube.com/results?q=ulice&sp=CAI%253D|Ulice]]

[[https://www.youtube.com/results?search_query=ordinace|Ordinace v RZ]]

[[https://www.youtube.com/results?search_query=specialist%C3%A9|Specialisté]]

[[https://www.youtube.com/user/SJKshow/playlists|Show Jana Krause]]

[[https://www.youtube.com/results?search_query=%C4%8Cetn%C3%ADci+z+Luha%C4%8Dovic|Četníci z Luhačovic]]

[[https://www.youtube.com/channel/UCw0r-s-EYO6hn8eRBm9a7Aw/videos|Všechnopárty 2017]]

[[http://www.ceskatelevize.cz/porady/1148499747-sama-doma/dily/|Sama doma]]

====== Radia online ======
<html>

<pre>Folk</pre>
<audio controls>
<source src="http://mp3stream2.abradio.cz:8000/folk.mp3" type="audio/mpeg" preload="auto">
Tvuj prohlizec nepodporuje prehravani radia.
</audio>


<pre>Country </pre>
<audio controls>
<source src="http://mp3stream4.abradio.cz/country128.mp3" type="audio/mpeg" preload="auto">
Tvuj prohlizec nepodporuje prehravani radia.
</audio>

<pre>Cro_Hradec_Kralove</pre>
<audio controls> 
<source src="http://icecast2.play.cz/crohk128.mp3" type="audio/mpeg" preload="auto">
Tvuj prohlizec nepodporuje prehravani radia.
</audio>

<pre>Humor</pre>
<audio controls>
<source src="http://mp3stream4.abradio.cz:8000/humor128.mp3" type="audio/mpeg" preload="auto">
Tvuj prohlizec nepodporuje prehravani radia.
</audio>


<pre>City_80</pre>
<audio controls>
<source src="http://kocka.limemedia.cz:8000/city80128.mp3" type="audio/mpeg" preload="auto">
Tvuj prohlizec nepodporuje prehravani radia.
</audio>

<pre>Blanik</pre>
<audio controls>
<source src="http://ice.abradio.cz/blanikcz128.mp3" type="audio/mpeg" preload="auto">
Tvuj prohlizec nepodporuje prehravani radia.
</audio>

<pre>Frekvence1</pre>
<audio controls>
<source src="http://icecast4.play.cz:8000/frekvence1-128.mp3" type="audio/mpeg" preload="auto">
Tvuj prohlizec nepodporuje prehravani radia.
</audio>

<pre>Dechovka</pre> 
<audio controls>
<source src="http://icecast5.play.cz:8000/dechovka128.mp3" type="audio/mpeg" preload="auto">
Tvuj prohlizec nepodporuje prehravani radia.
</audio>


<pre>Pohadka</pre>
<audio controls>
<source src="http://ice3.abradio.cz/pohadka128.mp3" type="audio/mpeg" preload="auto">
Tvuj prohlizec nepodporuje prehravani radia.
</audio>

<pre>Povidka</pre>
<audio controls>
<source src="http://ice3.abradio.cz/povidka128.mp3" type="audio/mpeg" preload="auto">
Tvuj prohlizec nepodporuje prehravani radia.
</audio>

</html>


====== Lavy ======

**4.2.17**

[[https://go.myownconference.com/zafira|Zafira přihlášení]]

[[http://www.zafira.sk/|Zafira informace]]

[[https://www.thermos-cz.cz/|Skleněné termosky]]

[[http://www.pust.cz/frame.php?load=pyramidy|Ovlivnění vody pomocí pyramid]]

====== Ostatní ======

[[https://support.office.com/cs-cz/article/Porovn%C3%A1n%C3%AD-dokument%C5%AF-rozd%C3%ADl%C5%AF-pomoc%C3%AD-mo%C5%BEnosti-pr%C3%A1vn%C3%AD-porovn%C3%A1n%C3%AD-dbfc7351-4022-43a2-a0c4-54d1898702a0|Word porovnání dokumentů]]

[[http://data.idnes.cz/g/eko/infografika_impregnace.html|Impregnace obuvi a textilu]]

[[http://www.poslatsms.cz/|SMS zdarma]]

[[http://www.omko.cz/prijem-digitalni-televize-dvb-t/pardubicky-kraj/|DVB T vysílače]]

[[http://www.pokladyprirody.cz/3107-meridiany-a-jejich-popis|Akupunkturní dráhy]]

[[http://www.diochi.cz/meridiany/meridian-plic|Meridiany]]

[[http://www.wikiskripta.eu/index.php/Lymfatick%C3%A1_uzlina|Limfatické uzliny]]

[[http://www.wikiskripta.eu/index.php/Obecn%C3%A1_anatomie_m%C3%ADzn%C3%ADho_syst%C3%A9mu|Obecná anatomie mízního systému]]

[[http://www.drnatur.cz/lymfaticka-masaz.html|Lymfatická masáž]]

[[https://www.youtube.com/watch?v=BPe30Sn0Rkc|Lymfodrenáž nohou]]

[[http://www.ius-wiki.eu/obcanske-pravo/start|Wiky studentů právnických fakult]]

[[http://lte.ctu.cz/pokryti/|Mapa pokrytí O2, T-mobile, Vodafone]]
