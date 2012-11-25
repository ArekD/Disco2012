<?php
/*
function breadcrumb(){
	if(isset($_GET['c'])){
	$c = $_GET['c'];
	$sqloa = 'SELECT * FROM kategoria where kategoria = '.$c.'';	
		$mooa = mysql_query($sqloa);
		while($r = mysql_fetch_array($mooa)){
			$cat = $r['kategoria'];
		$stitle = $r['nazwa'];
				echo '<div class="breadcrumbs"><div>';
		        echo'<h1>'.$stitle.'</h1>';
				echo '<ul><li><a class="second" href="http://www.chcezegarek.pl" rel="home directory">Strona główna</a></li><li>\</li></ul>';
				echo'</div></div><div class="clear"></div>';
		}
	}else{
	if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sqloa = "SELECT * FROM produkty where id = $id";	
		$mooa = mysql_query($sqloa);
		while($ro = mysql_fetch_array($mooa)){
		$c = $ro['kategoria'];
		$sqloa = "SELECT * FROM kategoria where kategoria = $c";	
		$mooa = mysql_query($sqloa);
			while($r = mysql_fetch_array($mooa)){
					$category = $r['kategoria']; 
					$stitle = $r['nazwa'];	$opiscat = $r['opis'];
			}
	echo '<div class="breadcrumbs"><div>';
	echo'<h1>'.$ro['tytul'].'</h1>';
	echo '<ul><li><a class="second" href="http://www.chcezegarek.pl" rel="home directory">Strona główna</a></li><li>\</li><li><a alt="'.$stitle.'" title="'.$stitle.'" href="'.urlDocumentCategory($stitle, $category).'">
	<h2 class="entry-title">'.$stitle.'</h2></a></li></ul>';
	echo'</div></div><div class="clear"></div>';
		} 
	}else{
	if(isset($_GET['s'])){
		if($_GET['s'] == 'zegarki-damskie' || $_GET['s'] == 'zegarki-meskie' || $_GET['s'] == 'jak-kupowac' || $_GET['s'] == 'kontakt' || $_GET['s'] == 'promocje' || $_GET['s'] == 'regulamin' || $_GET['s'] == 'panel' || $_GET['s'] == 'logowanie'){
		}else{
		echo '<div class="breadcrumbss"><div><ul>';
		}
		if(($_GET['s']) == 'dane-adresowe'){
			echo '<li class="bgstep"><a href="koszyk.html">1.Koszyk</a></li><li class="bgstep2"><a href="koszyk-dane-adresowe.html">2.Dane adresowe</a></li>
			<li class="bgstepempty"><span>3.Zapłata</span></li><li class="bgstepempty"><span>4.Podsumowanie</span></li>';
		}elseif(($_GET['s']) == 'zaplata'){
			echo '<li class="bgstep"><a href="koszyk.html">1.Koszyk</a></li><li class="bgstep"><a href="dane-adresowe.html">2.Dane adresowe</a></li>
			<li class="bgstep2"><a href="koszyk-zaplata.html">3.Zapłata</a></li><li class="bgstepempty"><span>4.Podsumowanie</span></li>';
		}elseif(($_GET['s']) == 'podsumowanie'){
			echo '<li class="bgstep"><a href="koszyk.html">1.Koszyk</a></li><li class="bgstep"><a href="koszyk-dane-adresowe.html">2.Dane adresowe</a></li>
			<li class="bgstep"><a href="koszyk-zaplata.html">3.Zapłata</a></li><li class="bgstep2"><a href="koszyk-podsumowanie.html">4.Podsumowanie</a></li>';
		}elseif(($_GET['s']) == 'koszyk'){
		echo '<li class="bgstep2"><a href="koszyk.html">1.Koszyk</a></li><li class="bgstepempty"><span>2.Dane adresowe</span></li>
			<li class="bgstepempty"><span>3.Zapłata</span></li><li class="bgstepempty"><span>4.Podsumowanie</span></li>';
		}
		if(($_GET['s']) == 'zegarki-damskie'){
			echo '<div class="breadcrumbs"><div>';
		echo'<h1>Zegarki damskie</h1>';
		echo '<ul><li><a class="second" href="http://www.chcezegarek.pl" rel="home directory">Strona główna</a></li><li>\</li></ul></div></div><div class="clear"></div>';
		}
		if(($_GET['s']) == 'jak-kupowac'){
			echo '<div class="breadcrumbs"><div>';
		echo'<h1>Jak kupować w sklepie www.chcezegarek.pl</h1>';
		echo '<ul><li><a class="second" href="http://www.chcezegarek.pl" rel="home directory">Strona główna</a></li><li>\</li></ul></div></div><div class="clear"></div>';
		}
		if(($_GET['s']) == 'zegarki-meskie'){
			echo '<div class="breadcrumbs"><div>';
		echo'<h1>Zegarki męskie</h1>';
		echo '<ul><li><a class="second" href="http://www.chcezegarek.pl" rel="home directory">Strona główna</a></li><li>\</li></ul></div></div><div class="clear"></div>';
		}
		if(($_GET['s']) == 'kontakt'){
			echo '<div class="breadcrumbs"><div>';
		echo'<h1>Kontakt</h1>';
		echo '<ul><li><a class="second" href="http://www.chcezegarek.pl" rel="home directory">Strona główna</a></li><li>\</li></ul></div></div><div class="clear"></div>';
		}
		if(($_GET['s']) == 'promocje'){
			echo '<div class="breadcrumbs"><div>';
		echo'<h1>Promocje</h1>';
		echo '<ul><li><a class="second" href="http://www.chcezegarek.pl" rel="home directory">Strona główna</a></li><li>\</li></ul></div></div><div class="clear"></div>';
		}
		if(($_GET['s']) == 'regulamin'){
			echo '<div class="breadcrumbs"><div>';
		echo'<h1>Regulamin</h1>';
		echo '<ul><li><a class="second" href="http://www.chcezegarek.pl" rel="home directory">Strona główna</a></li><li>\</li></ul></div></div><div class="clear"></div>';
		}
		
		if(($_GET['s']) == 'panel'){
		echo '<div class="breadcrumbs"><div>';
		echo'<h1>Panel użytkownika</h1>';
		echo '<ul><li><a class="second" href="http://www.chcezegarek.pl" rel="home directory">Strona główna</a></li><li>\</li></ul></div></div><div class="clear"></div>';
		}
		
		if(($_GET['s']) == 'logowanie'){
		echo '<div class="breadcrumbs"><div>';
		echo'<h1>Logowanie</h1>';
		echo '<ul><li><a class="second" href="http://www.chcezegarek.pl" rel="home directory">Strona główna</a></li><li>\</li></ul></div></div><div class="clear"></div>';
		}
		
		if($_GET['s'] == 'zegarki-damskie' || $_GET['s'] == 'zegarki-meskie' || $_GET['s'] == 'jak-kupowac' || $_GET['s'] == 'kontakt' || $_GET['s'] == 'promocje' || $_GET['s'] == 'regulamin' || $_GET['s'] == 'panel' || $_GET['s'] == 'logowanie'){
		}else{
		echo'</ul></div></div><div class="clear"></div>';	
		}
	}
	}
	}
}
*/


function select_clips(){
echo'<div class="clipsBox"><h3 class="nomargin">Teledyski</h3><div class="titledesc">Ostatnio dodane teledyski.</div>';
$sqlo = 'SELECT * FROM clips order by clips_id desc LIMIT 8'; 
echo'<ul id="clips">';
   	$moo = mysql_query($sqlo);
 	while($r = mysql_fetch_array($moo)){
	$id = $r['clips_id'];
	$stitle = $r['title'];
	echo'<li>
            <div class="ts-display-pf-img">
             <a class="image" href="'.urlDocumentClip($stitle, $id).'" ><span class="rollover"></span><img src="img/pic1.jpg" alt="'.$stitle.'" /></a>
             <div class="ribbontag"><a href="'.urlDocumentClip($stitle, $id).'">'.$r['title'].'</a><span class="ribboncurve"></span></div>	
            </div>
        </li>';
	}
	echo'</ul></div>';
	//src="'.$r['image'].'" 
}

function select_clips_list(){
echo'<div class="clipsBox"><h3 class="nomargin">Teledyski</h3><div class="titledesc">Ostatnio dodane teledyski.</div>';
$sqlo = 'SELECT * FROM clips a left outer join band b on a.clips_id = b.band_id order by clips_id desc LIMIT 9';  
echo'<ul>';
   	$moo = mysql_query($sqlo);
 	while($r = mysql_fetch_array($moo)){
	$id = $r['clips_id'];
	$stitle = $r['title'];
	$band = $r['band'];

	echo'<li class="clips_list">
         <div class="one"><a href="'.urlDocumentClip($stitle, $id).'"><img src="img/pic1.jpg" alt="'.$stitle.'" /></a></div> 
         <div class="two"><h3><a href="'.urlDocumentClip($stitle, $id).'">'.$stitle.'</a></h3><h4>'.$band.'</h4></div>	
         </li>';
	}
	echo'</ul></div>';
	//'.$r['image'].'  a left outer join band b on a.clips_id = b.band_id order by clips_id desc  	$sqlot = 'SELECT band FROM band where band_id = $band';  
//	$moot = mysql_query($sqlot);
	//while($ro = mysql_fetch_array($moot)){
	//		$bandName = $ro['band'];
	//	}
}


function select_news(){
echo'<div class="newsmg"><h3 class="nomargin">Aktualności</h3><div class="titledesc">Informacje ze świata muzyki disco polo.</div>';
$sqlo = 'SELECT * FROM news order by news_id desc LIMIT 4';
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
	echo'</div>';
	//href="'.urlDocument($stitle, $id).'"  src="'.$r['image'].' "
}
/*
   <h3 class="entry-title"><a title="'.$stitle.'" href="'.urlDocument($stitle, $id).'">'.$stitle.'</a></h3> */

function select_news_list(){
$sqlo = "SELECT * FROM news order by news_id desc limit 10";
   	$moo = mysql_query($sqlo);
 	while($r = mysql_fetch_array($moo)){
		$id = $r['news_id'];
		 $stitle = $r['title'];
	echo'<div class="lastnews">
		<a class="title" href="?s=news&id='.$id.'" title="'.$stitle.'"><h2>'.$stitle.'</h2></a>
		<div class="textshort">'.$r['preview'].'</div>
	</div>';
	}
}

function select_news_target($idnews){
echo'<div class="newsmg">';
$sqlo = "SELECT * FROM news where news_id = $idnews";
   	$moo = mysql_query($sqlo);
 	while($r = mysql_fetch_array($moo)){
 		
	$id = $r['news_id']; 
	$stitle = $r['title'];
	
echo'<div class="shorts">';
	echo'<h1>'.$stitle.'</h1>
	<div style="margin:0 10px 0 0; text-align:justify;">'.$r['full'].'</div></div>';
	}
echo'</div>';
}

function select_clips_target($idnews){
echo'<div class="newsmg">';
$sqlo = "SELECT * FROM clips where clips_id = $idnews";
   	$moo = mysql_query($sqlo);
 	while($r = mysql_fetch_array($moo)){
	$id = $r['clips_id']; 
	$stitle = $r['title'];
	$band = $r['band'];
			echo'<div class="shorts"><h1>'.$stitle.'</h1><div class="sfull">'.$r['url'].'</div></div>';
	}
	echo'</div>';
}


function select_clips_target_band($idnews){
echo'<div class="newsmg"><h2>Pozostałę utwory wykonawcy</h2>';
$sqlo = "SELECT band FROM clips where clips_id = $idnews limit 1";
   	$moo = mysql_query($sqlo);
	 	while($r = mysql_fetch_array($moo)){
	$band = $r['band']; 
	}

$sqlo = "SELECT * FROM clips where band = $band and clips_id != $idnews";
   	$moo = mysql_query($sqlo);
 	while($r = mysql_fetch_array($moo)){
	$id = $r['clips_id']; 
		$stitle = $r['title'];
			echo'<div class="shorts"><h4><a href="'.urlDocumentClip($stitle, $id).'" title="'.$stitle.'">'.$stitle.'</a></h4></div>';
	}
	echo'</div>';
}

function register(){                                       
 
}



?>
