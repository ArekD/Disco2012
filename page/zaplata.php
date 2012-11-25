<div class="clear"></div>
<div class="centerpage">
<div class="centerfooter">
<div style="width:970px; height:auto; margin:0 0px 10px 5px; display:block; padding:10px 0; background:#040476; color:#fff; font-size:26px;">
  <?php
if($_SESSION['total'] > 200){
echo '<p style="text-align:center; line-height:40px; font-size:30px; color:#fff;">Paczki wysyłane są listem piorytetowym poleconym za pośrednictwem poczty polskiej.</p>
<p style="text-align:center; line-height:40px; font-size:30px; color:green;">Powyżej 200zł koszt wysyłki 0zł.</p>
<img src="image/pocztainfo.jpg" />';
 $_SESSION['zaplata'] = 0;
}else{
echo '<p style="text-align:center; line-height:40px; font-size:30px; color:#fff;">Paczki wysyłane są listem piorytetowym poleconym za pośrednictwem poczty polskiej.</p>
<p style="text-align:center; line-height:40px; font-size:30px; color:green;">Koszt wysyłki 10zł</p>
<img src="image/pocztainfo.jpg" />';
 $_SESSION['zaplata'] = 10;
}
?>
</div>
<div class="bgstep" style="margin:0 0 0 400px;">
<a href="koszyk-podsumowanie.html" title="podsumowanie zamówienia" alt="podsumowanie zamówienia"  >Podsumowanie &raquo;</a></li>
</div>
</div>
<div class="clear"></div>
</div>
