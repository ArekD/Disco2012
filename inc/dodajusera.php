<?php
 //dodawanie usera
 session_start();
include('../config/config.php');
$idSong = trim(addslashes(stripslashes($_POST['song'])));
$userID = trim(addslashes(stripslashes($_POST['user'])));
$pointVoid = trim(addslashes(stripslashes($_POST['point'])));


$data = array( id =>'NULL', song=> "'$idSong'", point =>"'$pointVoid'", user => "'$userID'");  
insert($data, voice);
   
?>