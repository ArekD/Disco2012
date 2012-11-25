<?php
 //dodawanie produktu do koszyka
 session_start();
include('../config/config.php');
$idproduktu = (int)$_POST['idproduktu'];
 
if(!isset($_SESSION['koszyk']))  
    $_SESSION['koszyk'];
if (isset($_SESSION['koszyk'][$idproduktu])) {
	$_SESSION['koszyk'][$idproduktu]['quantity']++; 
} else { 
$q = "SELECT cena FROM produkty WHERE id = '".$idproduktu."'";
		$r = mysql_query($q);		
		if (mysql_num_rows($r) == 1) {  
		list($cena) = mysql_fetch_array($r);
		$_SESSION['koszyk'][$idproduktu] = array ('quantity' => 1, 'cena' => $cena);
}
}

if (isset($_POST['submitted'])) {
	foreach ($_POST['qty'] as $k => $v) {
		$idproduktu = (int) $k;
		$qty = (int) $v;
		if ( $qty == 0 ) { 
			unset ($_SESSION['koszyk'][$idproduktu]);
		} elseif ( $qty > 0 ) {
			$_SESSION['koszyk'][$idproduktu]['quantity'] = $qty;
		}
	} 
} 
//$_SESSION['produkty'] =oblicz($_SESSION['koszyk']);
?>