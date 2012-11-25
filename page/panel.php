<?php reklama(); wysylkareklama(); ?>
<div class="clear"></div>
<div class="centerpage">
<h4 style="font-size:20px;">Dane osobowe</h4>
<?php
 show_user();
?>
<div></div>
<h4 style="font-size:20px;">Zamówienia</h4>
<?php
 echo'<table id="koszyk_full"><tr><td class="first">PRODUKT</td><td>ILOŚĆ</td><td>CENA ZA 1 SZT</td><td>CENA ŁĄCZNA</td></tr></table>';
        
 $koment= 'SELECT * FROM zamowienietowar where user = '.$_SESSION['USERID'].'';
	$moko = mysql_query($koment);
	echo'<table class="koszyk_full_row">';
 	while($r = mysql_fetch_array($moko)){

echo'<tr><td class="first"><img style="width:100px; height:120px; float:left; marin:0 0 0 20px;" src="/images/'.$r['produkt'].'/'.$r['obrazek'].'" /><a style="margin:40px 0 0 0;" href="'.urlDocument($r['tytul'], $r['id']).'">'.$r['tytul'].'</a></td>';      
echo'<td>'.$r['ilosc'].'</td><td>'.$r['cena'].'zl</td><td>'.$r['suma'].'zł</td></tr>';
}
echo'</table>';
?>


<div class="clear"></div>
<script type="text/javascript">
$(function(){
$('.emailadd').focus(function(){if($(this).val() == 'Wpisz email odbiorcy'){$(this).val('');}})
.blur(function(){if($(this).val() == ''){$(this).val('Wpisz email odbiorcy');}else{$(this).val();}});
});
</script>
</div>