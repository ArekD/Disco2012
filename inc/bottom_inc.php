<div id="footer">
	<div id="main-footer">
                    <ul id="menufooter">
						<li><a href="aktualnosci.html">Aktualności</a></li>
						<li><a href="teledyski.html">Teledyski</a></li>
						<li><a href="lista-piosenek.html">Top Lista </a></li>
						<li><a href="lista-teledyski.html">Top Lista Teledyski</a></li>
						<li><a href="kontakt.html">Kontakt</a></li>
                    </ul>
                </li>
            </ul>
    <div class="clear"></div>
	</div><!-- end #main-footer -->
</div><!-- end #footer -->
<!--
<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>  FB.init({appId:'360135340732280', cookie:true, status:true, xfbml:true   });
function FacebookInviteFriends(){FB.ui({ method: 'apprequests',    message: 'Poleć stronę www.discoponadwszystko.pl..'});}
</script>
<ul id="face">
<li><a href='#' title="Poleć strone użytkowniką FACEBOOKA" onclick="FacebookInviteFriends();"><img src="images/face.png" alt="Poleć stronę" />POLEĆ STRONE</a></li>
</ul>

-->
<script type="text/javascript">

$(function(){

	$('#logowanie').click(function(){
		$('#logBox').hide();
	$('#bgAddon').hide();
		$('#bgAddon').show();
	$('<div id="logBox"><h5>Logowanie</h5><input type="text" value="Email" /><input type="text" value="Hasło" />'+
		'<input type="submit" value="Loguj" /><a>Anuluj</a></div>').animate({'position':'fixed', 'top':'50%', 'left':'50%', 'width':'250px','height':'220px', 'margin':'-125px 0 0 -100px' }).appendTo($('body'));
	});
	
	$('#rejestracja').click(function(){
	$('#logBox').hide();
	$('#bgAddon').hide();
		$('#bgAddon').show();
	$('<div id="logBox"><h5>Rejestracja</h5><input type="text"  value="Login" /><input type="text" value="Email" /><input type="text" value="Hasło" />'+
		'<input type="submit" value="Rejestruj" /><a>Anuluj</a></div>').animate({'position':'fixed', 'top':'50%', 'left':'50%', 'width':'250px','height':'250px', 'margin':'-125px 0 0 -100px' }).appendTo($('body'));
	});
	
	$('#logBox input[type="text"]').live('click', function(){
		var selectInput = $(this).val('');
	
	});
	
	$('#logBox input[type="submit"]').live('click', function(){
	
		console.log('submit');
			
	});
	
	
	$('#logBox a').live('click', function(){
		$('#logBox').remove();
		$('#bgAddon').hide();
	});


});

</script>
<div id="bgAddon"></div>
<div id="errorbox">Włącz javascript w przeglądarce</div>
</body>
</html>