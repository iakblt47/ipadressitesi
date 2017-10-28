<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ip adresim</title>
	
	
	 <style>

	 #ip{
		 font-weight: bold;
		 color:#ea0000;
		 font-size: 22px;
	 }	 
	#trh{
		 font-weight: bold;
		 color:#ez4740;
		 font-size: 22px;
	 }
	  #hostname{
		 font-weight: bold;
		 color:#1400cc;
		 font-size: 22px;
	 }
	  #tarayici{
		 font-size: 22px;
		 font-weight: bold;
		 color:#00fc08;
	 }
	  #isletimsistemi{
		 font-size: 22px;
		 font-weight: bold;
		 color:#fc00e3;
	 }
	 	 
	 
    </style>
	
	
	
	
	
  </head>
  <body>



<?php
error_reporting(0);
 
 function isletimsistemi() {
 $tespit=$_SERVER['HTTP_USER_AGENT'];
 if(stristr($tespit,"Windows 95")) { $os="Windows 95"; }
 elseif(stristr($tespit,"Windows 98")) { $os="Windows 98"; }
 elseif(stristr($tespit,"Windows NT 5.0")) { $os="Windows 2000"; }
 elseif(stristr($tespit,"Windows NT 5.1")) { $os="Windows XP"; }
 elseif(stristr($tespit,"Windows NT 6.0")) { $os="Windows Vista"; }
 elseif(stristr($tespit,"Windows NT 6.1")) { $os="Windows 7"; }
 elseif(stristr($tespit,"Windows NT 6.2")) { $os="Windows 8"; }
 elseif(stristr($tespit,"Mac")) { $os="Mac"; }
 elseif(stristr($tespit,"Linux")) { $os="Linux"; }
 else {$os="Bilinmiyor ?";}
 return $os;
 }
 
function tarayici() {
 $tespit2=$_SERVER['HTTP_USER_AGENT'];
 if(stristr($tespit2,"MSIE")) { $tarayici="Internet Explorer"; }
 elseif(stristr($tespit2,"Firefox")) { $tarayici="Mozilla Firefox"; }
 elseif(stristr($tespit2,"YaBrowser")) { $tarayici="Yandex Browser"; }
 elseif(stristr($tespit2,"Chrome")) { $tarayici="Google Chrome"; }
 elseif(stristr($tespit2,"Safari")) { $tarayici="Safari"; }
 elseif(stristr($tespit2,"Opera")) { $tarayici="Opera"; }
 else {$tarayici="Bilinmiyor ?";}
 return $tarayici;
 }
 
 
$ip = $_SERVER['REMOTE_ADDR']; 
$tarih = date("Y-m-d;h:i:s"); 
$hostname=gethostbyaddr($_SERVER['REMOTE_ADDR']);
 
 
		echo '<p id="ip">',"IP ADRESINIZ : ",$ip, "</p>";
		echo '<p id="trh">',"TARIH : ",$tarih,"</p>";
		echo '<p id="hostname" >',"HOSTNAME : ",$hostname,"</p>";
		echo '<p id="tarayici" >',"TARAYICI : ",tarayici(),"</p>";
		echo '<p id="isletimsistemi" >',"ISLETIM SISTEMI  : ",isletimsistemi(),"</p>";
	
	
?>
 
 
 
   </body>
</html>