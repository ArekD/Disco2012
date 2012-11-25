<?php 
if(isset($_POST['email'])) {
 $email = mysql_escape_string($_POST['email']);
if(!preg_match('/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/',$email)) {
	echo 1;
}elseif{
 $koments= mysql_query("SELECT COUNT(`id`) FROM `user` where `email` = '$email'");
	echo $total = mysql_result($koments, 0);
}else{
echo 0;
}
}
?>