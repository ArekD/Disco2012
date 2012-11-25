<?php
/*
    2011-10-04
    Arkadiusz Drewnik  arekdrewnik@gmail.com
 */                                            
 // ustawienia servera 
// DEFINE(HOST,'localhost');
//DEFINE(USER,'mc112727_discoponadwszystko');
// DEFINE(USER,'root');
//DEFINE(PASS,'mojenowehaslo');
//DEFINE(PASS,'');
 //DEFINE(BAZA,'promnik');
//DEFINE(BAZA,'discoponadwszystko');             


//ustawienia polaczenia 
$dbc = mysql_connect('localhost', 'root', '') or die('nie mozna sie polaczyc z baza');
$pytanie = mysql_select_db('disco') or die('bazy nie ma'); 

 function insert($data, $table) {  
         $columns = "";  
         $values = "";  
   
    foreach ($data as $column => $value) {  
             $columns .= ($columns == "") ? "" : ", ";  
             $columns .= $column;  
             $values .= ($values == "") ? "" : ", ";  
             $values .= $value;  
    }  
    $sql = "insert into $table ($columns) values ($values)";  
    mysql_query($sql) or die(mysql_error());  
            //return the ID of the user in the database.  
    return mysql_insert_id();  
    }
	 
	 
	function delete($from, $where) {
	$query = "DELETE FROM " . $from . " WHERE " . $where;
	$this->last_query = $query;
	if($this->mysqli->query($query))
	{return true;} else {return false;}
	} 
	 
	function strip_all($string)                                            
	{
		$string = htmlentities($string);
		$string = strip_tags($string);
		$string = stripslashes($string);
		$string = addslashes($string);
		return $string;
	}
		 
	function wybierz_tresc($tresc, $max, $moretext){
	if(strlen($tresc) >$max){
	$max-=strlen($moretext);
	$tresc = strrev(strstr(strrev(substr($tresc, 0, $max)), ' '));	
	$tresc.=$moretext;
	}
	return $tresc;
	} 

?>
