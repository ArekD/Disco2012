<div class="clear"></div>
<div class="centerpage">
<div class="centerfooter">
<?php if($_SESSION['USERID']){ ?>
	<div style="width:970px; margin:0 auto; border-bottom:1px solid #000;">
	<h3 style="border-bottom:3px solid #000; padding:5px; font-size:19px;">Twoje dane kontaktowe</h3>
	<?php show_user(); ?>

	</div>
			<div style="margin:10px 0 0 350px;" class="bgstep"><a href="koszyk-zaplata.html">Zapłata &raquo;</a></div>
	
<?php }else{ 
?>
<div>
<ul id="daneadresowe">
<li class="pos bgstep"><span>Logowanie do sklepu</span></li>
<li class="niepos bgstep"><span>Rejestracja w sklepie</span></li>
<li class="niepos bgstep"><span>Chce dokonać zakupu bez Rejestracji</span></li></ul>
<div class="clear"></div>
</div>
<div id="selectstan">
<div id="pos"><?php logincart(); ?></div>   
<div id="niepos"><?php register(); ?>
<div style="margin:0 0 0 -300px; width:940px; border:1px solid #eee; border-radius:5px;">
<legend style="font-size:20px;">Oswiadczenie</legend>
<div style="padding:10px; color:#000; font-size:10px;">
<input type="checkbox" checked="checked" name="oswiadczenie" readonly="readonly" />Oświadczam, ż zapoznałem się <a href="regulamin.html">regulaminem</a> i akceptuję jego warunki.<br />
Wyrażam zgodę na przetwarzanie moich danych osobowych w celu realizacji zamówienia przez firmę <strong>chcezegarek.pl</strong> zgodnie z ustawę z dnia 29 sierpnia 1997r. o ochronie danych osobowych
(tekst.jedn.Dz.U.02.101.926 z p�n.zm). Oświadczam, że zostałem poinformowany, iż podanie moich danych osobowych ma charakter dobrowolny oraz, że przysługuje mi prawo do wglądu, korekty,
usunięcia oraz kontroli swoich danych osobowych.
Zlecenie usunięcia danych osobowych może odbyć się poprzez wysłanie zlecenia w formie pisemnej droga elektroniczną na adres e-mail: <strong>kontakt@chcezegarek.pl</strong> 
lub telefonicznie 500 590 668.
</div>
</div>
</div> 

</div>
<?php  } ?>
<script type="text/javascript" src="js/adduser.js"></script>
<script>
$(function(){
$('#pos').hide();$('#nierej').hide();
$('#niepos').hide();
$('.niepos').click(function(){
$('#pos').hide('fast', function(){ if($('#niepos').is(':visible')){ $('#niepos').hide(); }else{ $('#niepos').show(); } });
});
$('.pos').click(function(){
$('#niepos').hide('fast', function(){ $('#pos').toggle(); });
});
$('#regist input').focus(function(){
	$(this).css({'text-align':'left', 'color':'#aaa' });	
}).blur(function(){
	if($(this).val() == ''){$(this).val();}
	else{$(this).css({'text-align':'right', 'color':'#aaa' });	}
});
});
</script>
</div>  
<div class="clear"></div>
</div>