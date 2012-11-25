<br /><div class="centerpage">
<div class="contentLeft">
<?php menu();?>	
</div>
<div class="contentRight">
<script type="text/javascript" src="js/adduser.js"></script>

<?php
if(isset($_SESSION['USERID'])){ ?>
<script>setTimeout("window.location.location(http://www.chcezegarek.pl)", 100);  </script>
<?php }else{ register(); } ?>
</div>
<div class="clear"></div>

</div>