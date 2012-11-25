<?php reklama(); wysylkareklama(); ?>
<div class="clear"></div>
<div class="centerpage">
<div class="contentLeft">
<?php
menu();
?>
</div>
<div class="contentRight">
<?php
if(isset($_GET['id'])){
$idnews = (int)$_GET['id'];
select_news_target($idnews);
}else{
$types = 1;
select_produkty();
}
?>
</div>
<div class="clear"></div>
<?php polecprodukt(); ?>
</div>
<script>
$(function(){
$('.short img').mouseover(function(e){
xOffset = 5; yOffset = -20;
var $targetbox = $(this).parent().parent();
var imgp = $(this).attr('src');
$('<div class="tooltip"><img src="'+imgp+'" /></div>').css("top",(e.pageY - xOffset) + "px").css("left",(e.pageX + yOffset) + "px").appendTo($targetbox);
}).mouseout(function(){	$('.tooltip').remove();});
$('.short img').mousemove(function(e){
$(".tooltip").css("top",(e.pageY - xOffset) + "px").css("left",(e.pageX + yOffset) + "px");
});$('.galeria>ul>li>img').mouseover(function(){var actimg = $(this).attr('src');$('.shorts img').attr('src', actimg);});});
</script>