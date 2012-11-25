<!DOCTYPE html><html lang="pl-PL"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9"/>
<?php 
/*
	if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "SELECT * FROM news where news_id = $id";
		$mo = mysql_query($sql);
		while($r = mysql_fetch_array($mo)){
		echo'
		<meta name="keywords" content="'.$r['keywords'].'" />
		<meta name="description" content="'.$r['preview'].'" />
		<title>'.$r['title'].'</title>
		<meta property="fb:page_id" content="'.$r['news_id'].'" />
		<meta property="og:image" content="http://discoponadwszystko.pl/'.$r['image'].'" />
		<meta property="og:description" content="'.$r['preview'].'"/>
		<meta property="og:title" content="'.$r['title'].'"/>
		<meta property="og:site_name" content="http://discoponadwszystko.pl"/>
		<meta property="og:url" content="http://discoponadwszystko.pl/pelne url"/>
        <meta property="og:type" content="News"/>





		<meta itemprop="name" content="">
		<meta itemprop="description" content="'.$r['preview'].'">
		<meta itemprop="image" content="http://discoponadwszystko.pl/'.$r['image'].'">';
	}
	}else if(isset($_GET['clip'])){
	$c = $_GET['clip'];
	$sql = "SELECT * FROM clips where clips_id = $c";
		$mo = mysql_query($sql);
		while($r = mysql_fetch_array($mo)){
		echo'<meta name="keywords" content="'.$r['klucze'].'" />
		<meta name="description" content="'.$r['preview'].'" />
		<title>'.$r['title'].$r['band'].'</title>';
	}
	}else{
	 global $section;
		$sql = "SELECT * FROM meta where meta_id = $section";
		$mo = mysql_query($sql);
		while($r = mysql_fetch_array($mo)){
		echo'<meta name="keywords" content="'.$r['keywords'].'" />';
		//<meta name="description" content="'.$r['preview'].'" />
		echo'<title>'.$r['title'].'</title>';
	}
	}
	*/
 ?>
<meta name="distribution" content="global" />
<meta name="robots" content="index,follow,all" />
<meta http-equiv="Content-Script-Type" content="text/javascript" /> 
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" >
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
<link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
<link href="css/skin.css" media="all" rel="stylesheet" type="text/css" />
<noscript><style type="text/css">#page{display:none;}#errorbox{display:block;font-size:20px;color:red;margin:0 auto;width:400px;height:auto;}</style></noscript>
</head>
<body><!--
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/all.js#xfbml=1&appId=360135340732280";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

-->
<jestem w testowym branchu nowe>
	<div id="header">
		<div id="top">
		<div id="logo"><a href="http://discoponadwszystko.pl"><img src="img/logo.png" alt="Disco Ponad Wszystko"  /></a></div>
			<div id="nav">
				<ul id="topnav">
					<li><a href="index.php" title="Strona główna">Strona główna </a></li>
					<li><a href="index.php?s=news" title="Aktualności">Aktualności</a></li>
					<li><a href="index.php?s=clips" title="Teledyski">Teledyski</a></li>
					<li><a href="index.php?s=songs" title="Piosenki">Piosenki</a></li>
					<li><a href="index.php?s=listsongs" title="Top Lista ">Top Lista </a></li>
					<li><a class="last" href="index.php?s=listclips" title="Top Lista Teledyski">Top Lista Teledyski</a></li>
					<li><a id="logowanie" title="Logowanie">Logowanie</a></li>
					<li><a id="rejestracja" title="Rejestracja">Rejestracja</a></li>
				</ul><!-- #topnav -->
			</div><!-- #nav -->	
		</div><!-- end #top -->
	</div><!-- #header -->
	<div class="clear"></div>