<?php
include('../config/config.php');
include('rewrite.php');
$last_id=$_POST['id'];
$sql = 'SELECT * FROM news where id < '.$last_id.' and widocznosc = 1 order by id desc LIMIT 5 ';
$moo = mysql_query($sql);
 $last_id="";
 	while($r = mysql_fetch_array($moo)){
		$id = $r['id'];
		$stitle = $r['title'];
	echo'<div id="'.$id.'" class="box" >
			<h2 class="title"><a href="'.urlDocument($stitle, $id).'">'.$stitle. $total_kom.' </a></h2>
			<div class="short">'.$r['short'].'</div>
			<div class="clear"></div>
			<div class="add"><span>'.$r['datadodania'].'</span><a href="'.urlDocument($stitle, $id).'">Czytaj całość</a></div>
		</div>';
	}
?>
