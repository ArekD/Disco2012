<?php
echo'<form method="post" action="index.php?s=game">
<select id="select-game"><option class="select-game">Wybierz gre</option>';
$sqlo = "SELECT * FROM game ";
	mysql_query("SET NAMES 'UTF8'"); 
   	$moo = mysql_query($sqlo);
 	while($r = mysql_fetch_array($moo)){
		echo'<option value="'.$r['id'].'" class="select-game">'.$r['gra'].'</option>';
	}
echo'</select></form>';
?>