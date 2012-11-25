<?php
include('../config/config.php');
$emailss = trim(addslashes(stripslashes($_POST['email'])));
$ip =$_SERVER['REMOTE_ADDR'];
$data = array( id =>'NULL', email=> "'$emailss'", ip =>"'$ip'", datadodania=> "NOW()");  
insert($data, newsletter);

$temat= "Newsletter www.chcezegarek.pl";
$naglowki = "Reply-to: kontakt@chcezegarek.pl <kontakt@chcezegarek.pl>".PHP_EOL;
$naglowki .= "From: kontakt@chcezegarek.pl <kontakt@chcezegarek.pl>".PHP_EOL;
$naglowki .= "MIME-Version: 1.0".PHP_EOL;
$naglowki .= "Content-type: text/html; charset=utf-8".PHP_EOL; 			

$do = $emailss;

$content = '<html lang="pl">
<head><title>Potwierdzenie rejestracji w newsletterze www.chcezegarek.pl</title></head><body>
<table style="margin:0; padding:0; border:0;"><tr><td><img style="margin:0; padding:0;" src="http://chcezegarek.pl/image/logo.png" /></td></tr></table>
<table cellpadding="0" cellspacing="0" border="0" align="center" width="100%">
<h1 style="color:#000000;">Witamy w newsletterze sklepu www.chcezegarek.pl</h1>
<p>Dziękujemy za rejestracje w newsletterze</p><p>Na dobry początek naszej współpracy oferujemy Ci rabat 5%.</p><p> Wystarczy podczas zamówienia w uwagach wpisać ten kod promocyjny:</p>
<p>Cx655OPs2</p>
<p>Dziękujemy i życzymy udanych zakupów.</p>
</table>';


$content .="</body></html>";
mail($do, $temat, $content, $naglowki);


?>