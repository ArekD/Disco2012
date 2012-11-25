<div class="clear"></div>
<div class="centerpage">
<div class="centerfooter">

<?php

if(isset($_SESSION['USERID'])){
       $userid=$_SESSION['USERID'];


if(isset($_POST['wysylam']) || $_POST['submit'] =='rejestracja'){
	   $komentarz= trim(htmlspecialchars(stripslashes($_POST['komentarz'])));
            $suma = $_POST['suma'];
			$a =md5(uniqid(rand(), true));
			$email =$_SESSION['EMAIL'];

$dataa = array(zamowienie =>'NULL', user => "'$userid'", kasa => "'$suma'", realizacja =>"1", komentarz =>"'$komentarz'", datadodania=> "NOW()", email=>"'$email'");  

           insert($dataa, zamowienie); 


$l = mysql_insert_id(); 

	foreach ($_SESSION['koszyk'] as $id => $value) {

	$qty = $value['quantity'];

$qty = $_SESSION['koszyk'][$id]['quantity'];
$cena =$_SESSION['koszyk'][$id]['cena'];
                      
	  

$data = array(id =>'NULL', zamowienie => "'$l'", produkt => "'$id'", ilosc =>"'$qty'", cena=> "'$cena'", user=> "'$userid'");  

           insert($data, zamowienietowar);      
}

$temat = "Potwierdzenie przyjęcia zamówienia w sklepie www.chcezegarek.pl";
$naglowki = "Reply-to: kontakt@chcezegarek.pl <kontakt@chcezegarek.pl>".PHP_EOL;
$naglowki .= "From: kontakt@chcezegarek.pl <kontakt@chcezegarek.pl>".PHP_EOL;
$naglowki .= "MIME-Version: 1.0".PHP_EOL;
$naglowki .= "Content-type: text/html; charset=utf-8".PHP_EOL; 			

$content ="";

$do = $email;
$content .= '<html lang="pl">
<head>
<title>Potwierdzenie przyjęcia zamówienia w sklepie www.chcezegarek.pl</title>
</head>
<body>
<table style="margin:0; padding:0; border:0;"><tr><td><img style="margin:0; padding:0;" src="http://chcezegarek.pl/image/logo.png" /></td></tr></table>
<h1>Dziękujemy za złożenie zamówienia</h1>
<p>Twoje zamówienie oczekuje na dokonanie płatności przelewem. Zostanie wysłane dopiero po zaksięgowaniu środków na naszym koncie.</p>
<h3>Wybrane produkty to:</h3>
<table style="background:#eee; padding:5px; border:1px solid #ccc; ">';
$content .="<tr style=\"margin:2px 0 0 0px; width:100%;\" ><td style=\"border:1px solid #aaa;\">L.P</td><td style=\"padding:3px; border:1px solid #aaa;\">TYTUŁ</td><td style=\"padding:3px; border:1px solid #000;\">ILOŚĆ</td><td style=\"paing:3px; border:1px solid #000;\" >CENA</td>  <td style=\"paing:3px; border:1px solid #000;\" >RAZEM</td></tr>";
  


 	foreach ($_SESSION['koszyk'] as $id => $value) {

       	$subtotal = $_SESSION['koszyk'][$id]['quantity'] * $_SESSION['koszyk'][$id]['cena'];
	     $total += $subtotal;

       	$q = "SELECT * FROM produkty where id = $id ";
	$r = mysql_query ($q);
	$lp =1;
	while ($row = mysql_fetch_array($r)){

$content .="<tr style=\"margin:2px 0 0 0px; width:100%;\" ><td style=\"border:1px solid #aaa;\">{$lp}</td><td style=\"padding:3px; border:1px solid #aaa;\"><span style=\"color:blue;\"> {$row['tytul']} </span></td><td style=\"padding:3px; border:1px solid #000;\" ><span style=\"color:blue;\"> {$_SESSION['koszyk'][$row['id']]['quantity']} </span></td> <td style=\"paing:3px; border:1px solid #000;\" ><span style=\"color:blue;\">{$_SESSION['koszyk'][$row['id']]['cena']} </span>zl </td>  <td style=\"paing:3px; border:1px solid #000;\" > razem  <span style=\"color:blue;\">". number_format ($subtotal, 2) . " </span>zl</td></tr>";
  $lp =$lp +1;
}
}
 
 if($suma < 200){
 $suma = $suma +10;
 }
$content .= "</table><table><p>Data rejestracji zamówienia:</p>";
$content .= "<table><tr><td style='border:1px solid green; width:500px; bakground:#CCFFCC;'><h3>Suma, którą należy wplacić to: {$suma}zł.</h3>";
$content .= "<h2>Należność należy wplacic na konto: </h2> ";
$content .= "<h3>M-BANK: 11 1140 2004 0000 3002 4283 4718</h3> ";
$content .= "<h4>tytułem: <span style=\"color:red;\">wpisujesz swój adres email.</span></h4></td></tr></table></table></body></html> ";

mail($do, $temat, $content, $naglowki);


echo '<div style="margin:0 10px;"><p style="font-size:20px; color:green; font-weight:bold;">Dziękujemy za złożenie zamówienia.</p>';
echo '<p style="font-size:17px; color:green; font-weight:normal;">Na podany adres email zostaly wyslane dane do wpłaty.</p>';
echo '<p style="font-size:17px; color:green; font-weight:normal;">Po uiszczeniu wpłaty zamówienie zostanie zrealizowane.</p></div>';





 	unset($_SESSION['koszyk'], $_SESSION['wplata'], $_SESSION['total'] );

mail('teaman@tlen.pl', 'Potwierdzenie przyjecia zamowienia', 'masz zamowienie git', 'From: kontakt@chcezegarek.pl');
}
else{

 $userid=$_SESSION['USERID'];

 $ss= "SELECT * FROM user where id= $userid limit 1";
$ssa=mysql_query($ss);

while($oo=mysql_fetch_array($ssa)){
echo '<div style="width:950px;  padding:5px; background:#fff; margin:3px 10px;">
<p style="font-size:22px; color:#000; border-bottom:3px solid #000; padding:0 0 5px 0;">Dane, na które zostanie dostarczona przesyłka</p>';
echo '<div style="font-size:16px; color:green; margin:2px 0px; background:#efefef; height:20px;  padding:2px; color:green; "><span style="color:#000;">imię i nazwisko :</span> '.$oo['name'].' '.$oo['surname'].'</div>';
echo '<div style="font-size:16px; color:green; "><span style="color:#000;">ulica :</span> '.$oo['street'].' </div>';
echo '<div style="font-size:16px; color:#f6b63b; margin:2px 0px; background:#eee; height:20px;  padding:2px; color:green;"><span style="color:#000;">kod pocztowy i miasto :</span> '.$oo['code'].'  '.$oo['city'].'</div>';
echo '<div style="font-size:16px; color:green; "><span style="color:#000;">email :</span> '.$oo['email'].' </div>';
echo '<div style="font-size:16px; margin:2px 0px; background:#eee; height:20px; padding:2px; color:green; "><span style="color:#000;">telefon :</span> '.$oo['fon'].'</div></div>';
}
 echo'<table id="koszyk_full"><tr><td class="first">PRODUKT</td><td>ILOŚĆ</td><td>CENA ZA 1 SZT</td><td>CENA ŁĄCZNA</td></tr></table>';
         	$total = 0; 
foreach ($_SESSION['koszyk'] as $pid => $value) {
      	$q = "SELECT * FROM produkty where id = $pid ";
	$r = mysql_query ($q);	while ($row = mysql_fetch_array($r)){
		$subtotal = $_SESSION['koszyk'][$row['id']]['quantity'] * $_SESSION['koszyk'][$row['id']]['cena'];
		
		$total += $subtotal;
echo'<table class="koszyk_full_row" style="background:'.$bg.';">';
echo'<tr><td class="first"><img style="width:100px; height:120px; float:left; marin:0 0 0 20px;" src="/images/'.$row['id'].'/'.$row['obrazek'].'" />
<a href="'.urlDocument($row['tytul'], $row['id']).'" alt="'.$row['tytul'].'" title="'.$row['tytul'].'">'.$row['tytul'].'</a></td>';      
echo'<td class="two">'.$_SESSION['koszyk'][$row['id']]['quantity'].'</td>
<td class="three">'.$_SESSION['koszyk'][$row['id']]['cena'].' zl</td><td class="four">'. number_format ($subtotal, 2) . 'zł</td></tr></table>';
}   
}
echo'</table>';
 

$razem = $total;


$wplata = $_SESSION['zaplata'];
         

 echo '<div style="width:230px; float:left; font-size:16px; border:2px solid #af0303; padding:15px; margin:10px 10px 5px 150px;">
 <b>Suma zakupów: </b>' . $total .'zł</div> <div style="float:left; font-size:16px; margin:26px 10px 0 0; color:#000;">+ </div>';
echo'<div style="width:180px; float:left; font-size:16px; border:2px solid #af0303; padding:15px; margin:10px 10px 5px 0px;"><b>Koszt dostawy: </b>';
if($total>200){ echo' 0';}else{ echo'10';}
 echo'zł</div><div style="float:left; font-size:16px; margin:26px 10px 0 0;  color:#000;">=</div>';
 $suma= $wplata+$total;
 echo '<div style="width:230px; float:left;  font-size:16px; border:2px solid green; padding:15px; margin:10px 0px 5px 0px;">
 <b>Kwota do zapłaty: </b>' . $suma .'zł</div><div class="clear"></div>';
 
 echo'<form method="POST" action="koszyk-podsumowanie.html"><div style="width:950px;  padding:5px; background:#fff; margin:3px 10px;">
<p style="font-size:22px; color:#000; border-bottom:3px solid #000; padding:0 0 5px 0;">Informacje dodatkowe</p>
<p style="display:block;"><textarea name="komentarz" id="komentarz" style="padding:5px; border:1px solid #ccc; width:938px; height:100px;"></textarea></p>
<input type="hidden" name="wysylam" value="true" /><input type="hidden" name="suma" value="'.$total.'" /><input type="submit" style="border:0; font-size:20px; color:#fff; margin:20px 0 0 365px;"  class="bgstep" value="Zamawiam &raquo;" name="rejestracja" /></div></form>';
}
}else{

echo '<p>wybierz zegarek który chcesz kupić</p>';

}

  ?>



 </div>
<div class="clear"></div>
 </div>