<div class="content">
<?php
if(isset($_GET['clip'])){
echo'<div class="clipsBoxB">';
echo'<div class="contentLeft">'; 
$idnews = (int)$_GET['clip'];
	echo'<div class="clipone">';
	$sqlo = "SELECT * FROM clips where clips_id = $idnews";
   	$moo = mysql_query($sqlo);
		while($r = mysql_fetch_array($moo)){
		$id = $r['clips_id'];  	$stitle = $r['title'];	$band = $r['band'];
			echo'<h1>'.$stitle.'</h1><div class="sfull">'.$r['url'].'</div>';
		}
	echo'</div>';
?>
<div class="fb-comments" data-href="http://discoponadwszystko.pl/<?php urlDocumentClip($stitle, $id); ?>" data-num-posts="2" data-width="660"></div>
<?php
echo'</div>
<div class="contentRight">';
select_clips_target_band($idnews);
echo' losowy news <br /> newsletter';
echo'</div></div>';
}else{

echo'<div id="clipsContent">';

	echo'<div class="clipsBoxB"><h2 class="nomargin">Teledyski</h2>';
	$sqlo = 'SELECT * FROM clips a left outer join band b on a.clips_id = b.band_id order by clips_id desc LIMIT 9';  
	echo'<ul>';
   	$moo = mysql_query($sqlo);
 	while($r = mysql_fetch_array($moo)){
		$id = $r['clips_id']; 	$stitle = $r['title'];	$band = $r['band'];

	echo'<li class="clips_list">
			 <div class="one"><a href="?s=clips&clip='.$id.'" ><img src="img/pic1.jpg" alt="'.$stitle.'" /></a></div> 
			 <div class="two"><h3><a href="?s=clips&clip='.$id.'">'.$stitle.'</a></h3><h4>'.$band.'</h4></div>	
         </li>';
	}
	echo'</ul></div>';
}
echo'</div>';
//href="'.urlDocumentClip($stitle, $id).'"
?>
<div class="clear"></div>
</div>