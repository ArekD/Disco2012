<?php

        $kto = $_POST['kto'];
        $email = mysql_escape_string($_POST['email']);
		$tresc = mysql_escape_string($_POST['tresc']);

$temat= "Info z likeweb.pl";
$header = "MIME-Versio: 1.0r\n"."Content-type: text/html; charset=UTF-8r\n";
$header .= "From: kontakt@likeweb.pl \n";
$header .= "Cc: $email \n";
$header .= "Bcc: $email \n";


$do = teaman@tlen.pl;
$content = $kto;
$content .= $tresc;
$content .= $email;

	mail($do, $temat, $content, $header);
		
?>