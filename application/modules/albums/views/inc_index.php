<style>
#slide-gallery .flex-direction-nav .flex-next{background: url(../../../fat/media/img/arrow-purple-right.png) no-repeat;width:29px; height:29px;top:75%;}
#slide-gallery .flex-direction-nav .flex-prev{background: url(../../../fat/media/img/arrow-purple-left.png)no-repeat;width:29px; height:29px;top:75%;}
</style>
<div id="gallery">
<span class="titleGallery">รูปภาพกิจกรรม</span> <div class="line4"> </div>
<div id="slide-gallery" style="margin-left:40px;">
	<ul class="slides">
		<?php foreach($result as $key =>$item): ?>
		<li>
	      <div id="col1-gallery">
	      <div class="title-ogan"><strong>องค์กร :</strong><?php echo $item['agency_name']." ต. ".$item['district_name']." อ.".$item['amphur_name']." จ. ".$item['province_name'] ?></div>
	      <div class="boximg"><a href="albums/view/<?php echo $item['album_id'] ?>/<?php echo $item['user_id'] ?>"><img src="uploads/albums/<?php echo $item['album_id'] ?>/<?php echo $item['image'] ?>" width="259" height="197" /></a></div>

	 	  </div>
 	 	</li>
 	 	<?php endforeach; ?>
 </ul>
</div>
<div class="clearfix"></div>
	<div class="btn-gallery-viewall"><a href="albums/view_all" style="width:148px;display:inline-block;height:36px;">&nbsp;</a></div>
</div>
<script type="text/javascript">
$(window).load(function() {
  $('#slide-gallery').flexslider({
    slideshow: false,animation: "slide",animationLoop: false
   ,itemWidth:300,minItems: 1,maxItems: 3,reverse: false
   ,controlNav: false,prevText: "",nextText: "",slideshowSpeed: 7000,
  });
});
</script>
