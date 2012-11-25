<div class="content">
<div class="clipsBox">
<div class="contentLeft">
<?php
echo'<div class="clipsBox"><h3 class="nomargin">TOP LISTA PIOSENEK</h3>';
$sqlo = 'SELECT * FROM songs left join band using(band) order by songs_id desc LIMIT 140';  
echo'<table id="songs">';
   	$moo = mysql_query($sqlo);
	echo'<tr><th>L.P</th><th>Tytuł</th><th>Wykonawca</th><th>Głosowanie</th><th></th></tr>';
	$o = 1;
 	while($r = mysql_fetch_array($moo)){
	echo'<tr class="titlesong" rel="'.$r['songs_id'].'"><td>'.$o.'</td><td>'.$r['title'].'</td>
				<td class="band">'.$r['band.band'].'</td>
				<td class="voice">+</td>
				<td class="url"><a href="'.$r['url'].'" target="_blank" title="glosuj"></a></td>
		</tr>';
			$o +=1;
	}
	echo'</table></div>';

$_SESSION['USER'] = 23;
?>
</div>
<div class="contentRight">
pozosta�e newsy</br> losowy teledysk <br /> newsletter
</div>
<div class="clear"></div>
</div>
</div>
<script>
$(function(){
	function getDate(userID, idSong, pointVoid){
		jQuery.ajax({url: 'inc/dodajusera.php', data:{user:userID, song:idSong, point: pointVoid}, type:'POST', async: true, cache: false, 
			beforeSend: function(){
				//$('<div class="loading"></div>').appendTo($('#loadDate'));
			},success: function(){
				$(this).addClass('voiceOK');
			},complete: function(){
				//$('.loading').remove();	
				$(this).removeClass('voice');
			}
		});
	}

var pointVoid = 10;

	$('.voice').html('+').live('click', function(){
		var idSong = $(this).parent().attr('rel');
		var userID = "<?php echo $_SESSION['USER']; ?>";
		pointVoid = parseInt(pointVoid);
		if(pointVoid <1){
			$('#endVoise').show();
		}else{
			getDate(userID, idSong, pointVoid);
			pointVoid -=1;
			$(this).html('-');
		}
	});

});
</script>