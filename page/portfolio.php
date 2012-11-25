<div class="centerpage">
<div class="contentLeft">
<?php
portfolio();
?>
</div>
<div class="contentRight">
<?php
menu();
?>
<?php
if(isset($_GET['id'])){
select_news_list();
}
?>
</div>
<div class="clear"></div>
</div>
<link media="screen" rel="stylesheet" href="css/colorbox.css" />
<script src="js/jquery.colorbox-min.js"></script>
<script>
	$(document).ready(function(){
		$(".group1").colorbox({rel:'group1'});
	});
</script>



