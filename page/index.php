<div class="content">
<?php

echo'<div class="clipsBox"><h3 class="nomargin">Teledyski</h3><div class="titledesc">Ostatnio dodane teledyski.</div>';
$sqlo = 'SELECT * FROM clips order by clips_id desc limit 7'; 
echo'<ul id="clips">';
   	$moo = mysql_query($sqlo);
 	while($r = mysql_fetch_array($moo)){
	$id = $r['clips_id'];
	$stitle = $r['title'];
	echo'<li style="float:left width:130px;">
            <div class="ts-display-pf-img">
             <a class="image" href="'.urlDocumentClip($stitle, $id).'" ><span class="rollover"></span><img style="width:130px; border:0;" src="img/pic1.jpg" alt="'.$stitle.'" /></a>
             <div class="ribbontag"><a href="'.urlDocumentClip($stitle, $id).'">'.$r['title'].'</a><span class="ribboncurve"></span></div>	
            </div>
        </li>';
	}
	echo'</ul></div>';


echo'<div style="float:left; width:700px; border-top:1px solid #aaa; margin:10px 0 0 0;">';
echo'<div class="newsmgFront"><h3 class="nomargin">Aktualności</h3><div class="titledesc">Informacje ze świata muzyki disco polo.</div>';
$sqlo = 'SELECT * FROM news order by news_id desc LIMIT 3';
   	$moo = mysql_query($sqlo);
 	while($r = mysql_fetch_array($moo)){
	$id = $r['news_id'];
	$stitle = $r['title'];
	echo'<div class="news">
    <div class="img"><img src="img/pic1.jpg" alt="'.$stitle.'" /></div> 

       <h3 class="entry-title"><a title="'.$stitle.'" href="?s=news&id='.$id.'">'.$stitle.'</a></h3>
    <div class="preview">'.$r['preview'].'</div>
    </div>';
	}
	echo'</div></div><div style="float:right; width:300px; height:auto; margin:10px 0 0 0; border-top:1px solid #aaa;"><h3 class="nomargin">Piosenki</h3><div class="titledesc">Ostatnio dodane piosenki.</div>
	
	<div id="songSG">
		<h6><a href="#">Tomasz Niecik - Dziewczyna z Facebook</a></h6>
		<h6><a href="#">Skalar - Plastikowa Biedronka</a></h6>
				<h6><a href="#">Tomasz Niecik - Dziewczyna z Facebook</a></h6>
		<h6><a href="#">Skalar - Plastikowa Biedronka</a></h6>
				<h6><a href="#">Tomasz Niecik - Dziewczyna z Facebook</a></h6>
		<h6><a href="#">Skalar - Plastikowa Biedronka</a></h6>
				<h6><a href="#">Tomasz Niecik - Dziewczyna z Facebook</a></h6>
		<h6><a href="#">Skalar - Plastikowa Biedronka</a></h6>
				<h6><a href="#">Tomasz Niecik - Dziewczyna z Facebook</a></h6>
		<h6><a href="#">Skalar - Plastikowa Biedronka</a></h6>
				<h6><a href="#">Tomasz Niecik - Dziewczyna z Facebook</a></h6>
		<h6><a href="#">Skalar - Plastikowa Biedronka</a></h6>
				<h6><a href="#">Tomasz Niecik - Dziewczyna z Facebook</a></h6>
		<h6><a href="#">Skalar - Plastikowa Biedronka</a></h6>
				<h6><a href="#">Tomasz Niecik - Dziewczyna z Facebook</a></h6>
		<h6><a href="#">Skalar - Plastikowa Biedronka</a></h6>
				<h6><a href="#">Tomasz Niecik - Dziewczyna z Facebook</a></h6>
		<h6><a href="#">Skalar - Plastikowa Biedronka</a></h6>
				<h6><a href="#">Tomasz Niecik - Dziewczyna z Facebook</a></h6>
		<h6><a href="#">Skalar - Plastikowa Biedronka</a></h6>
				<h6><a href="#">Tomasz Niecik - Dziewczyna z Facebook</a></h6>
		<h6><a href="#">Skalar - Plastikowa Biedronka</a></h6>
				<h6><a href="#">Tomasz Niecik - Dziewczyna z Facebook</a></h6>
		<h6><a href="#">Skalar - Plastikowa Biedronka</a></h6>
				<h6><a href="#">Tomasz Niecik - Dziewczyna z Facebook</a></h6>
		<h6><a href="#">Skalar - Plastikowa Biedronka</a></h6>
				<h6><a href="#">Tomasz Niecik - Dziewczyna z Facebook</a></h6>
		<h6><a href="#">Skalar - Plastikowa Biedronka</a></h6>
	</div>
	
	</div>';

?>
<script type="text/javascript">
jQuery(document).ready(function(){
    $("#clips").jcarousel({
		hoverPause:true,
		visible: 4,
		scrool: 4,
		speed:1000
    });
});
</script>	
<div class="clear"></div>
</div>