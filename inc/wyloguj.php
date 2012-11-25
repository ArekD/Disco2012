<?php
if(isset($_POST['wyloguj'])) {
	unset($_SESSION['user']);
	unset($_SESSION['userid']);
	unset($_SESSION['poziom']);
	session_destroy();
	?>
<script language="JavaScript" type="text/javascript">                 
<!--                                                                  
setTimeout("window.location.replace('index.php')", 500);                   
//-->                                                                 
</script>
<?php 
}?>