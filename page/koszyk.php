<div class="clear"></div>
<div class="centerpage">
<div class="centerfooter">
<?php    
if (!empty($_SESSION['koszyk'])) {
 echo'<table id="koszyk_full"><tr><td class="first">PRODUKT</td><td>ILOŚĆ</td><td>CENA ZA 1 SZT</td><td>CENA ŁĄCZNA</td></tr></table>';
      	$total = 0; 
foreach ($_SESSION['koszyk'] as $pid => $value) {
      	$q = "SELECT * FROM produkty where id = $pid ";
	$r = mysql_query ($q);	while ($row = mysql_fetch_array($r)){
		$subtotal = $_SESSION['koszyk'][$row['id']]['quantity'] * $_SESSION['koszyk'][$row['id']]['cena'];
		
		$total += $subtotal;
$bg=($bg=='#fdfdf' ? '#fcfcfc' : '#fdfdf');
$bor=($bor=='#aaa' ? '#aaa' : '#aaa');
echo'<table class="koszyk_full_row" style="background:'.$bg.';">';
echo'<tr><td class="first"><img style="width:100px; height:120px; float:left; marin:0 0 0 20px;" src="/images/'.$row['id'].'/'.$row['obrazek'].'" />
<a href="'.urlDocument($row['tytul'], $row['id']).'" alt="'.$row['tytul'].'" title="'.$row['tytul'].'">'.$row['tytul'].'</a></td>';      
echo'<td class="two"><input type="text" size="2" id="ko" name="qty'.$row['id'].'" value="'.$_SESSION['koszyk'][$row['id']]['quantity'].'" style="border:1px solid red" /></td>
<td class="three">'.$_SESSION['koszyk'][$row['id']]['cena'].' zl</td><td class="four">'. number_format ($subtotal, 2) . 'zł</td></tr></table>';
}   
}
          $_SESSION['wydatek']= number_format ($total, 2);
echo '<div style="width:210px; font-size:16px; border:2px solid #af0303; padding:15px; float:right; margin:10px 10px 0 0;">Suma zakupów: ' . number_format ($total, 2) . 'zł</div>
<div class="clear"></div>
   <input type="hidden" name="submitted" value="TRUE" />
   
<div class="bgstep" style="margin:30px 0 0 350px;">
<a href="koszyk-dane-adresowe.html" title="Dane adresowe" alt="Dane adresowe"  >Dane adresowe &raquo;</a></li>

</div>'; 
              $_SESSION['total'] = $total;
			      echo'<div class="suma" rel="'.$total.'"></div>';
} else {
	echo '<p>Twój koszyk jest obecnie pusty.</p>';
}

      ?>    
</div>
<script>
$(function(){
$('.suma').hide();
var sumazakupu = $('.suma').attr('rel');
$('.ilepro').html(sumazakupu);
});
</script>
<div class="clear"></div>
</div>      