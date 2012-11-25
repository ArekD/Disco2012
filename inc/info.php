<?php

        $kto = $_POST['kto'];
        $email = $_POST['email'];
		$tresc = $_POST['tresc'];

$temat= "Info z likeweb.pl";
$header = "MIME-Versio: 1.0r\n"."Content-type: text/html; charset=UTF-8r\n";
$header .= "From: kontakt@likeweb.pl \n";
$header .= "Cc: $email \n";
$header .= "Bcc: $email \n";


$do = teaman@tlen.pl;
$content = '<html lang="pl">
<head>
<title>Potwierdzenie przyjęcia zamówienia w sklepie www.chcezegarek.pl</title>
</head>
<body>';
$content = $kto;
$content .= $tresc;
$content .= $email;
$content .="</body></html>";
	mail($do, $temat, $content, $header);
		
?>