<div class="content">
<div class="clipsBoxB"><h3 class="nomargin">Aktualności</h3> 
<div class="contentLeft">
<?php
if(isset($_GET['id'])){
$idnews = (int)$_GET['id'];
select_news_target($idnews);
?>
<div class="fb-comments" data-href="http://discoponadwszystko.pl/<?php urlDocument($stitle, $id); ?>" data-num-posts="2" data-width="660"></div>
<?php
}else{
select_news_list();
}
?>
</div>
<div class="contentRight">
pozostałe newsy</br> losowy teledysk <br /> newsletter
</div>
<div class="clear"></div>
</div>
</div>