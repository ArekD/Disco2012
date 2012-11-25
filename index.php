<?php
session_start();
include('config/config.php');
include_once('inc/rewrite.php');
include_once('inc/function.php');

if(isset($_GET['s'])){
$s=$_GET['s'];
}
elseif(isset($_POST['s'])){
$s=$_POST['s'];
}
else{
$s= null;
}
switch($s){
 
  case 'news':
 $page ='news.php';
 $section = 2;
 break;
 
 case 'clips':
 $page ='clips.php';
 $section = 3;
 break;
    case 'songs':
 $page ='spngs.php';
 $section = 4;
 break;
   case 'listsongs':
 $page ='listsongs.php';
 $section = 5;
 break;
 case 'listclips':
 $page ='listclips.php';
 $section = 6;
 break;
  case 'contact':
 $page ='contact.php';
 $section = 7;
 break;

 case 'wyloguj':
	unset($_SESSION['USER']);
	unset($_SESSION['USERID']);
	unset($_SESSION['LEVEL']);
	session_destroy();
	$page='index.php';
	 $section = 1;
 break;

default:
 $page='index.php';
 $section = 1;
}

if(!file_exists('./page/' . $page)){
$page='index.php';
$section = 1;
}
include_once('inc/top_inc.php');
include('./page/' . $page);
include_once('inc/bottom_inc.php');
?>