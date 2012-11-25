<?php
// polecprodukt.php powiazany z polecprodukt.js
include('../config/config.php');
include('rewrite.php');

$email = $_POST['email'];
$adresproduktu = $_POST['polecany'];
$nameadd = $_POST['nameadd'];

$temat= "{$nameadd} - koniecznie zobacz";
$naglowki = "Reply-to: kontakt@chcezegarek.pl <kontakt@chcezegarek.pl>".PHP_EOL;
$naglowki .= "From: kontakt@chcezegarek.pl <kontakt@chcezegarek.pl>".PHP_EOL;
$naglowki .= "MIME-Version: 1.0".PHP_EOL;
$naglowki .= "Content-type: text/html; charset=utf-8".PHP_EOL; 			

$do = $email;

$content = '<html lang="pl">
<head><title>Zobacz koniecznie - $nameadd</title></head><body>
<table style="margin:0; padding:0; border:0;"><tr><td><img style="margin:0; padding:0;" src="http://chcezegarek.pl/image/logo.png" /></td></tr></table>';

$sqlo = "SELECT * FROM produkty where id = {$adresproduktu} LIMIT 1";
$moo = mysql_query($sqlo);

while($r = mysql_fetch_array($moo)){
$content .='<table cellpadding="0" cellspacing="0" border="0" align="center" width="100%">
<h1 style="color:#000000;">'.$r['tytul'].'</h1>
<p>Zobacz koniecznie pod tym linkiem <a href="http://chcezegarek.pl'.urlDocument($r['tytul'], $r['id']).'">'.$r['tytul'].'</a></p>
<p><img src="http://www.chcezegarek.pl/images/'.$r['id'].'/1.jpg" /></p>
</table>';
}

$content .="</body></html>";
mail($do, $temat, $content, $naglowki);

?>